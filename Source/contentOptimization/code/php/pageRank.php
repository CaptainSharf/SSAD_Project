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

//will get distinct url with min timestamp
$sql="SELECT tt.*
FROM url_and_baseScore tt
INNER JOIN
    (SELECT url, MIN(dateViewed) AS MinDateTime
    FROM url_and_baseScore
    GROUP BY url) groupedtt 
ON tt.url = groupedtt.url 
AND tt.dateViewed = groupedtt.MinDateTime";

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
			$pageview+=$row['pageViews'];
						
			$basep=returnBasePriority($row['dateViewed'],$pageview);
			$sql1="update url_and_baseScore_and_pageViews set pageViews=$pageview,baseScore=$basep where url=$row[1]";
			$retval2 = mysql_query( $sql1, $conn );
		}

	}
	else
	{
		
		$pageview=$row['pageViews'];

		$basep=returnBasePriority($row['dateViewed'],$pageview);
		$sql1="insert into url_and_baseScore_and_pageViews (url,baseScores,pageViews) values($row[0],$basep,$pageview)";
		$retval2 = mysql_query( $sql1, $conn );	
	}
}

mysql_close($conn);



//functions for finding base score

function writeMsg() {
    echo "Hello world!";
}

function returnBasePriority($date_added,$page_views){
	
	$current_time=strtotime($date_added);
//	echo "$current_time";
	$seconds= (float)$current_time-1134028003;
    $seconds/=45000;
	
	$temp=log(max($page_views,1),10);
	
	$ans=round($temp+$seconds,7);
		
	echo "$ans";
	
}


//	$temp=strtotime("2008:08:07 18:11:11");
//echo "$temp";


?> 	

