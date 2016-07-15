<?php 
session_start();
include( __DIR__ . 'htdocs\ShopAnalytic\config.php');

if(isset($_GET['changePW'])) {
	$error = false;
	$password = $_POST['password'];
	$passwordNew = $_POST['passwordNew'];
	$passwordNew2 = $_POST['passwordNew2'];
	$email = $_SESSION['email'];
	

	if($passwordNew != $passwordNew2) {
		echo 'Die neuen Passwörter stimmen nicht überein<br>';
		$error = true;
	}
	
	if(!$error) {
		$stmt = $pdo->prepare("SELECT * FROM user.users WHERE email = :mail");
		$result = $stmt->execute(array('mail' => $email));
		$user = $stmt->fetch();
		}	
	if ($error == false){	
		if ($user !== false && hash('sha256',$password) == $user['password']) {
			$password_hash = hash('sha256', $passwordNew);
			$stmt = $pdo->prepare("UPDATE user.users SET password = :password_hash WHERE email = :mail");
			$result = $stmt->execute(array('password_hash' => $password_hash, 'mail' => $email));
			
			if($result) {		
				echo 'Passwort erfolgreich geändert';
				$showFormular = false;
			} else {
				echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
			} 
		} else {
			echo 'Ihr aktuelles Passwort war nicht Korrekt';
			}
	}
}	

?>