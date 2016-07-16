<?php
	include( __DIR__ . '\config.php');
	
	$userID = $_SESSION['userid'];
	$result = $pdo->query('SELECT Category, Price FROM Transaction WHERE 
?>