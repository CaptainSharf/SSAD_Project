<?php
	include 'get_ip.inc.php';
	include_once 'clicky_log.php';
	$ipAddress = get_ip();
	//echo $ipAddress."<br>";

	if (isset($_COOKIE["visitor_id"])) {
		$visitor_id = $_COOKIE["visitor_id"];
		setcookie("visitor_id",$visitor_id,time() + 60*60*24*30);
		$visitor_type = 'returning';
		//print "Returning Visitor " . $visitor_id . "nn";
		} else {
			$site_name = 'digi';
			$timestring = microtime();
			$pieces = explode(" ", substr($timestring, 2));
			$pieces[0] = "1". substr($pieces[0],0,3); 
			$visitor_id = $site_name . dechex($pieces[1]) . dechex($pieces[0]); 
			clicky_log( array( "type" => "custom", "custom" => array( "visitor_id" => $visitor_id )));
			setcookie("visitor_id",$visitor_id,time() + 60*60*24*30);
			$visitor_type = 'new';
			//print "New Visitor " . $visitor_id . "nn";
	}


	$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ipAddress));
	if($query && $query['status'] == 'success') {
	  echo 'Hello '.$visitor_type.' visitor with id <strong>'.$visitor_id.'</strong> from '.$query['country'].', '.$query['city'].'!<br>';
	  echo 'Your ISP is '.$query['org'].'.<br>';
	} else {
	  echo 'Unable to get location';
	}
?>
