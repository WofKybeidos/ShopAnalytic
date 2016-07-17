<?php 
session_start();
include( __DIR__ . '\config.php');

if(isset($_GET['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$stmt = $pdo->prepare("SELECT * FROM user.users WHERE email = :email");
	$result = $stmt->execute(array('email' => $email));
	$user = $stmt->fetch();

	if ($user !== false && hash('sha256',$password) == $user['password']) {
		$_SESSION['userid'] = $user['id'];
		$_SESSION['email'] = $user['email'];
		header("location: Hauptseite.php");
	} else {
		$errorMessage = "E-Mail oder Passwort war ungueltig<br>";
	}
}
if(isset($errorMessage)) {
	echo $errorMessage;
}
?>
