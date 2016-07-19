<?php
	//Der Logout button soll die Session zerstören
	session_start();
	session_destroy();
	header('Location: /shopanalytic/www/start.php');
	exit;
?>