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

	$domainId=1;
	$visitorId=1;
	$tagString="a,b,c,d";

	$splitString=explode(",",$tagString);

	foreach ($splitString as $value)
	{
		$sql="select * from personal_score where visitorId=$visitorId and tag=$value";

		$retval = mysql_query( $sql, $conn );
		if(! $retval )
		{
  			die('Could not get data: ' . mysql_error());
		}
		
		while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
		{		
			$tagscore=$row['tagScore']+1;

			$sql1="update personal_score set tagScore=$tagscore where visitorId=$visitorId and tag=$value";
			$retval1 = mysql_query( $sql1, $conn );
		}

	}	


?>	
