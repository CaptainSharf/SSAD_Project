<?php
	$csite_id = '100876280';
	$csite_key = '20fec71b60fbdbf0';
?>

<?php
$data = unserialize( file_get_contents("http://api.clicky.com/api/stats/4?site_id=".$csite_id."&sitekey=".$csite_key."&type=visitors-list&output=php"));
foreach( $data as $item ) {
    foreach( $item as $date ) {
        foreach( $date as $visitor ) {
            if( empty( $visitor['referrer_url'] )) $visitor['referrer_url'] = "(no referrer)";
            echo "{$visitor['time_pretty']} - {$visitor['ip_address']} - {$visitor['referrer_url']}<br>\n";
        }
    }
}
?>