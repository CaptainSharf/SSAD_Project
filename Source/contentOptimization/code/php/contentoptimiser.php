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


	$sql="SELECT * from `url_and_baseScore_and_pageViews`;";
	$retval = mysql_query( $sql, $conn );

	$finalscorearray;

	while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	{
		$temp=$row['url'];	
		$sql1="SELECT distinct `tag` from `personal_score` where `url`='$temp';";
		$retval1 = mysql_query( $sql1, $conn );

		$sumtagscore=0;
		while($row1 = mysql_fetch_array($retval1, MYSQL_ASSOC))
		{
			$temp=$row['tag'];
			$sql2="SELECT `tagScore` from `personal_score` where `tag`='$temp' and `visitorId`=$visitorId;";
			$retval2 = mysql_query( $sql2, $conn );			

			while($row2 = mysql_fetch_array($retval2, MYSQL_ASSOC))
			{
				$sumtagscore+=$row['tagScore'];
			}
		}

		$sumtagscore+=$row['baseScore'];

		$finalscorearray["$temp"]=$sumtagscore;
	
	}

	arsort($finalscorearray);

	$sliced_array = array_slice($finalscorearray, 0, 5);

	$titlearray;
	foreach ($finalscorearray as $key => $value) 
	{
		$sql="SELECT * from `url_and_pageTitle` where `url`='$key';";
		$retval = mysql_query( $sql, $conn );
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{		
				$temp=$row[0];           //'url'
				$titlearray[$temp]=$row[1];     //"title"		
		}

	}


?>
