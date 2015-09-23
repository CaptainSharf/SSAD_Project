<!---
The following code goes into the bottom of footer.php file in the Digitant website.
-->
<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/24634/script.js');
</script>

<?php
	include 'get_ip.inc.php';
	include_once 'clicky_log.php';
	$ipAddress = get_ip();
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
	
?>

<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(100876280); }catch(e){}</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100876280ns.gif" /></p></noscript>