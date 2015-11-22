<?php

$fpointer = fopen('post_output.txt', 'w');
fwrite($fpointer, $_POST['domain_id']);
fwrite($fpointer, "\n");
fwrite($fpointer, $_POST['visitor_id']);
fwrite($fpointer, "\n");
fwrite($fpointer, $_POST['url']);
fwrite($fpointer, "\n");
fwrite($fpointer, $_POST['tag_string']);
fwrite($fpointer, "\n");
fclose($j_file);

if (empty($_POST)) {
	echo 'Tags could not be sent.';
} else {

	echo 'Tags sent successfully';
}

?>