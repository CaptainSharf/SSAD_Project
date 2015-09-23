<?php
function get_ip(){
	$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
	$http_x_forwarded_for = $_SERVER['HTTP_X_FORWADED_FOR'];
	$remote_addr = $_SERVER['REMOTE_ADDR'];

	if(!empty($http_client_ip)){
		$ip_addr = $http_client_ip;
	}	elseif (!empty($http_x_forwarded_for)) {
		$ip_addr = $http_x_forwarded_for;
	}	else {
		$ip_addr = $remote_addr;
	}
	return $ip_addr;
}
?>