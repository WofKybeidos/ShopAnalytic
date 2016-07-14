<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=user', 'root', '');
$showFormular = true; 

if(isset($_GET['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$stmt = $pdo->prepare("SELECT * FROM user.users WHERE email = :email");
	$result = $stmt->execute(array('email' => $email));
	$user = $stmt->fetch();

	//Überpruefung des Passworts
	if ($user !== false && hash('sha256',$password) == $user['password']) {
		$_SESSION['userid'] = $user['id'];
		$_SESSION['mail'] = $email['mail'];
		die('Login erfolgreich. Weiter zu <a href="geheim.php">internen Bereich</a>');
	} else {
		$errorMessage = "E-Mail oder Passwort war ungueltig<br>";
	}
}
if(isset($errorMessage)) {
	echo $errorMessage;
}
?>
