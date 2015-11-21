<?php
$mysql_host = "localhost";
$mysql_user = "aayn";
$mysql_pass = "justdoit123";

$mysql_db = 'trial_db';

$conn      = mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die("connection failed");
$sql_query = "INSERT into pets values ('Oreo', 'Shi Tzu')";

mysql_select_db($mysql_db);

$retval = mysql_query($sql_query, $conn);
if (!$retval) {
	die('Could not enter data: '.mysql_error());
}
?>