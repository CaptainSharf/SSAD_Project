<?php

if (!empty($_POST)) {
	$mysql_host = 'localhost';
	$mysql_user = 'aayn';
	$mysql_pass = 'justdoit123';
	$mysql_db   = 'content_optimization';
	$conn       = mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die("connection failed".mysql_error());

	echo 'Connected successfully main.php\n';
	mysql_select_db($mysql_db);
	$finalscorearray;

	$visitorId = $_POST['visitor_id'];
	$domainId  = $_POST['domain_id'];
	//sql query which returns url,sumoftagscore for url
	$sql = "SELECT `t1`.`visitorId`,`t1`.`domainId`,`t1`.`url`,`t2`.`sum` from `personal_score` as `t1` inner join(select `url`,sum(`tagScore`) as `sum`,`visitorId`,`domainId` from `personal_score` where `visitorId`='$visitorId' and `domainID`='$domainId' group by `url`) `t2` on `t1`.`url`=`t2`.`url` and `t1`.`visitorId`=`t2`.`visitorId` and `t1`.`domainId`=`t2`.`domainId` group by `t2`.`sum`;";

	$retval = mysql_query($sql, $conn);

	while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

		$temp    = $row['url'];
		$sql1    = "SELECT `baseScore` from `url_and_baseScore_and_pageViews` where `url`='$temp';";
		$retval1 = mysql_query($sql1, $conn);//get basescore

		$ans = 0.0;
		while ($row1 = mysql_fetch_array($retval1, MYSQL_ASSOC)) {
			$ans += (float) $row1['baseScore'];
		}

		$ans += $row['sum'];

		$finalscorearray["$temp"] = $ans;

	}

	arsort($finalscorearray);
	print_r($finalscorearray);
	$sliced_array = array_slice($finalscorearray, 0, 5);

	$titlearray;
	foreach ($finalscorearray as $key => $value) {
		$sql    = "SELECT * from `url_and_pageTitle` where `url`='$key';";
		$retval = mysql_query($sql, $conn);
		while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
			$temp              = $row['url'];//'url'
			$titlearray[$temp] = $row['pageTitle'];//"title"
		}

	}
	print_r($titlearray);
	// final answer is in $titlearray
}
?>
