<?php

$mysql_host = 'localhost';
$mysql_user = 'aayn';
$mysql_pass = 'justdoit123';
$mysql_db   = 'content_optimization';
$conn       = mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die("connection failed".mysql_error());

echo "Connected successfully\n";
mysql_select_db($mysql_db);

if (!empty($_POST)) {
	echo "Data sent successfully\n";

	$domainId  = $_POST['domain_id'];
	$visitorId = $_POST['visitor_id'];
	$tagString = $_POST['tag_string'];
	$url       = $_POST['url'];
	$pageTitle = $_POST['pageTitle'];

	$splitString = explode(",", $tagString);
	if (!empty($splitString[0])) {
		//url and date
		$sql_url    = "INSERT into `url_and_dateViewed` (`url`) values ('$url');";
		$retval_url = mysql_query($sql_url, $conn);
		echo "Date and url sent \n";

		//url and title
		$sql_title_sel = "SELECT `pageTitle` from `url_and_pageTitle` where `url`='$url';";
		$retval_title  = mysql_query($sql_title_sel, $conn);
		if (!$retval_title) {
			echo "Page has no title";
		}
		if (mysql_num_rows($retval_title) == 0) {
			$sql_title_ins = "INSERT into `url_and_pageTitle` (`url`, `pageTitle`) values ('$url', '$pageTitle');";
			$retval_title  = mysql_query($sql_title_ins, $conn);
		}

		//personal pageview score
		$sql_vpage    = "SELECT * from `personal_pageview_score` where `visitorId`='$visitorId' and `url`='$url';";
		$retval_vpage = mysql_query($sql_vpage, $conn) or die("personal_pageview_score\n".mysql_error());
		echo "Vpage successful\n";
		if (mysql_num_rows($retval_vpage) == 0) {
			$sql_vpage        = "INSERT into `personal_pageview_score` (`visitorId`, `url`) values ('$visitorId', '$url');";
			$retval_vpage_ins = mysql_query($sql_vpage, $conn);
		} else {
			$row    = mysql_fetch_array($retval_vpage, MYSQL_ASSOC);
			$vscore = (int) $row['viewScore'];
			$vscore -= 170;
			echo "\nvscore $vscore\n";
			$url_temp        = $row['url'];
			$vid_temp        = $row['visitorId'];
			$sql_vpage       = "UPDATE `personal_pageview_score` set `viewScore`=$vscore where `visitorId`='$vid_temp' and `url`='$url_temp';";
			$retval_vpage_up = mysql_query($sql_vpage, $conn);
		}

		foreach ($splitString as $tagName) {
			$sql = "SELECT * from `personal_score` where `visitorId`='$visitorId' and `tag`='$tagName' and `url`='$url';";

			$retval = mysql_query($sql, $conn);
			if (!$retval) {
				die('Could not get data: '.mysql_error());
			}

			if (mysql_num_rows($retval) == 0) {
				$tagscore = 1;

				$sql1    = "INSERT into `personal_score` (`visitorId`, `domainId` ,`tag` , `tagScore`, `url`) values ('$visitorId','$domainId','$tagName',$tagscore,'$url');";
				$retval1 = mysql_query($sql1, $conn);
				if (!$retval1) {
					die('Could not insert data: '.mysql_error());
				}

			} else if (mysql_num_rows($retval) == 1) {
				while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
					$tagscore = $row['tagScore']+1;

					$sql1    = "UPDATE `personal_score` set `tagScore`=$tagscore where `visitorId`='$visitorId' and `tag`='$tagName' and `url`='$url';";
					$retval1 = mysql_query($sql1, $conn);
				}
			} else {
				echo "What?\n";
			}

		}
	} else {
		echo "No tags on page\n";
	}
} else {
	echo "Data could not be sent";
}
?>