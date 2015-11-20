<?php

$fpointer = fopen('a.txt', 'w');
fwrite($fpointer, $_POST['tag_string']);
fwrite($fpointer, $_POST['title']);
fclose($j_file);

if (empty($_POST)) {
	echo 'Tags could not be sent.';
} else {

	echo 'Tags sent successfully';
}

?>