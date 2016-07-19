<?php 
session_start();
include( __DIR__ . '\config.php');

//Damit das Script nur beim betätigen des Login-buttons ausgeführt wird
if(isset($_GET['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	//Suche der Eingegebenen E-Mail in der Datenbank
	$stmt = $pdo->prepare("SELECT * FROM user.users WHERE email = :email");
	$result = $stmt->execute(array('email' => $email));
	$user = $stmt->fetch();

	//Überprüfung ob das Passwort zu der E-Mail Korrekt ist, wenn ja wird eine Session mit E-Mail und User-ID übergeben
	if ($user !== false && hash('sha256',$password) == $user['password']) {
		$_SESSION['userid'] = $user['id'];
		$_SESSION['email'] = $user['email'];
		header("location: Hauptseite.php");
	} else {
		//Failed Login
		echo "<script type='text/javascript'>alert('E-Mail oder Passwort war ungueltig');</script>";
	}
}
?>
