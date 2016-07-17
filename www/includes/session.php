<?php
	include( __DIR__ . '\config.php');	   
	$user_check = $_SESSION['email'];
	   
	$stmt = $pdo->prepare("SELECT email FROM user.users WHERE user_check = :email");
	$result = $stmt->execute(array('email' => $user_check));   
	   
	if(!isset($_SESSION['email'])){
	header("location:start.php");
	}
?>