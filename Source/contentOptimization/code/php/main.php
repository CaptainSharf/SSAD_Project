<?php

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

	$finalscorearray;

	//sql query which returns url,sumoftagscore for url
	$sql="SELECT `t1`.`visitorId`,`t1`.`domainId`,`t1`.`url`,`t2`.`sum` from `personal_score` as `t1` inner join(select `url`,`sum(tagScore)` as `sum` from `personal_score` group by `url`) `t2` on `t1`.`url`=`t2`.`url`;";


	$retval = mysql_query( $sql, $conn );

	
	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{	

		$temp=$row['url'];	
		$sql1="SELECT `baseScore` from `url_and_baseScore_and_pageViews` where `url`='$temp'"
		$retval1 = mysql_query( $sql1, $conn ); //get basescore
		
		$ans=0;
		while($row1 = mysql_fetch_array($retval1, MYSQL_ASSOC))
		{		
				$ans+=$row1['baseScore'];		
		}		

		$ans+=$row['sumoftagscores'];

		$finalscorearray["$temp"]=$ans;

	}

	arsort($finalscorearray);

	$sliced_array = array_slice($finalscorearray, 0, 5);


	$titlearray;
	foreach (array_expression as $key => $value) 
	{
		$sql="SELECT * from `url_and_pageTitle` where `url`='$key';";
		$retval = mysql_query( $sql, $conn );
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{		
				$temp=$row[0];           //'url'
				$titlearray[$temp]=$row[1];     //"title"		
		}

	}
		

	// final answer is in $titlearray
	


?>	
