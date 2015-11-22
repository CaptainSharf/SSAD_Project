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
$dbhost = 'localhost:3036';
$dbuser = 'guest';
$dbpass = 'guest123';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_select_db( 'content_optimization' );

//will get distinct url with min timestamp with no of times url occurs

//$sql="select url,dateViewed,COUNT(*) from url_and_baseScore group by url";
$sql="select t1.url,t1.dateViewed,t2.count from url_and_dateViewed t1 inner join(select min(dateViewed) dateviewed,url,count(dateViewed) as count from url_and_dateViewed group by url) t2 on t1.url=t2.url and t1.dateViewed=t2.dateViewed;"

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

while($row = mysql_fetch_array($retval, MYSQL_NUM))
{

	$sql1="select url from url_and_baseScore_and_pageViews where url=$basescore";
	
	$retval1 = mysql_query( $sql1, $conn );

	if (mysql_num_rows($retval1) == 1)
	{
		while($row1 = mysql_fetch_array($retval1, MYSQL_NUM))
		{
			$pageview=$row1['pageViews'];
			$pageview+=$row['count'];
						
			$temp=$row['url'];

			$basep=returnBasePriority($row['dateViewed'],$pageview);
			$sql1="update url_and_baseScore_and_pageViews set pageViews=$pageview,baseScore=$basep where url=$temp";
			$retval2 = mysql_query( $sql1, $conn );
		}

	}
	else
	{
		
		$pageview=$row['count'];

		$temp=$row['url'];

		$basep=returnBasePriority($row['dateViewed'],$pageview);
		$sql1="insert into url_and_baseScore_and_pageViews (url,baseScores,pageViews) values($temp,$basep,$pageview)";
		$retval2 = mysql_query( $sql1, $conn );	
	}
}

mysql_close($conn);



//functions for finding base score



function returnBasePriority($date_added,$page_views){
	
	$current_time=strtotime($date_added);
//	echo "$current_time";
	$seconds= (float)$current_time-1134028003;
    $seconds/=45000;
	
	$temp=log(max($page_views,1),10);
	
	$ans=round($temp+$seconds,7);
		
	echo "$ans";
	
}



?> 	

