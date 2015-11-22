<?php

//echo "<br>", "Merge Sorting - 6, 5, 3, 1, 8, 7, 9, 2, 4", "<br>";
//$arr = array(6, 5, 3, 1, 8, 7, 9, 2, 4);
//$reuslt = mergeSort($arr);
//print_r($reuslt);

//echo "<br>", "Quick Sorting - 1, 99, 87, 2, 5, 9, 1999, 899, 777", "<br>";
//$arr = array(1, 99, 87, 2, 5, 9, 1999, 899, 777);
//$reuslt = quickSort($arr);
//print_r($reuslt);

// connect to db

$mysql_host = 'localhost';
$mysql_user = 'aayn';
$mysql_pass = 'justdoit123';
$mysql_db   = 'content_optimization';
$conn       = mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die("connection failed".mysql_error());

echo 'Connected successfully';
mysql_select_db($mysql_db);

//will get distinct url with min timestamp with no of times url occurs

//$sql="select url,dateViewed,COUNT(*) from url_and_baseScore group by url";
$sql = "SELECT `t1`.`url`,`t1`.`dateViewed`,`t2`.`count` from `url_and_dateViewed` `t1` inner join(SELECT min(`dateViewed`),dateViewed,url,count(dateViewed) as `count` from `url_and_dateViewed` group by `url`) `t2` on `t1`.`url`=`t2`.`url` and `t1`.`dateViewed`=`t2`.`dateViewed`;";

$retval = mysql_query($sql, $conn) or die('Could not get data: '.mysql_error());
echo "Data sent to pageRank\n";

while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

	$url  = $row['url'];
	$sql1 = "SELECT `url` from `url_and_baseScore_and_pageViews` where `url`='$url'";

	$retval1 = mysql_query($sql1, $conn) or die("connection failed".mysql_error());

	if (mysql_num_rows($retval1) == 1) {
		while ($row1 = mysql_fetch_array($retval1, MYSQL_ASSOC)) {
			$pageview = $row1['pageViews'];
			$pageview += $row['count'];

			$temp = $row['url'];

			$basep   = returnBasePriority($row['dateViewed'], $pageview);
			$sql1    = "UPDATE `url_and_baseScore_and_pageViews` set `pageViews`=$pageview,`baseScore`=$basep where `url`='$temp';";
			$retval2 = mysql_query($sql1, $conn) or die("updation failed".mysql_error());
		}

	} else {

		$pageview = (int) $row['count'];

		$temp = $row['url'];

		$basep   = (float) returnBasePriority($row['dateViewed'], $pageview);
		$sql1    = "INSERT into `url_and_baseScore_and_pageViews` (`url`,`baseScore`,`pageViews`) values ('$temp',$basep,$pageview);";
		$retval2 = mysql_query($sql1, $conn) or die("insertion failed\n".mysql_error());
	}
}

mysql_close($conn);

//functions for finding base score

function returnBasePriority($date_added, $page_views) {

	$current_time = strtotime($date_added);

	//echo "$current_time";
	$seconds = (float) $current_time-1134028003;
	$seconds /= 45000;

	$temp = log(max($page_views, 1), 10);

	$ans = round($temp+$seconds, 7);
	return $ans;

}

?>

