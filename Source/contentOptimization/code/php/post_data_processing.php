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

		//url and domain

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