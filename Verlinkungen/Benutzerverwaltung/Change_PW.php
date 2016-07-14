<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=user', 'root', '');
$showFormular = true; 

if(isset($_GET['changePW'])) {
	$error = false;
	$password = $_POST['password'];
	$passwordNew = $_POST['passwordNew'];
	$passwordNew2 = $_POST['passwordNew2'];
	

	if($passwordNew != $passwordNew2) {
		echo 'Die neuen Passwörter stimmen nicht überein<br>';
		$error = true;
	}
	
	if(!$error) {
		$stmt = $pdo->prepare("SELECT * FROM user.users WHERE email = :mail");
		$result = $stmt->execute(array('mail' => $email));
		$user = $stmt->fetch();
		}	
	}
	if ($user !== false && hash('sha256',$password) == $user['password'] && !error) {
		$password_hash = hash('sha256', $passwordNew);
		$stmt = $pdo->prepare("INSERT INTO user.users (password) VALUES (:password_hash)");
		$result = $stmt->execute(array('password_hash' => $password_hash));
		
		if($result) {		
			echo 'Passwort erfolgreich geändert';
			$showFormular = false;
		} else {
			echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
		} 
	} 
}