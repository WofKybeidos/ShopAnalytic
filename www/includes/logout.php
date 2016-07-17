<?php
	session_start();
	session_destroy();
	header('Location: /shopanalytic/www/start.php');
	exit;
?>