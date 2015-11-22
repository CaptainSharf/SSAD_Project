<?php

if ($_POST['dummy'] == '1') {
	$mysql_host = 'localhost';
	$mysql_user = 'aayn';
	$mysql_pass = 'justdoit123';
	$mysql_db   = 'content_optimization';
	$conn       = mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die("connection failed".mysql_error());
	echo "Connected successfully\n";

	mysql_select_db($mysql_db);

	$query  = "SELECT `url`, `tag` FROM `personal_score` group by `url`, `tag`;";
	$retval = mysql_query($query, $conn) or die("connection failed".mysql_error());

	$tag_array = [];
	while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
		$temp_url_key = $row['url'];
		if (array_key_exists($temp_url_key, $tag_array)) {
			array_push($tag_array[$temp_url_key], $row['tag']);
		} else {
			$tag_array[$temp_url_key] = [];
			array_push($tag_array[$temp_url_key], $row['tag']);
		}
	}
	//print_r($tag_array);
	$j_tags   = json_encode($tag_array);
	$j_tags   = "tagarray = ".$j_tags.";";
	$fpointer = fopen('js/json_processing/tagArray.js', 'w+');
	fwrite($fpointer, $j_tags);
	fclose($fpointer);
} else {
	echo "Failure\n";
}

?>