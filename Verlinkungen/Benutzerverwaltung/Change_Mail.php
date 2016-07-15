<?php 

$pdo = new PDO('mysql:host=localhost;dbname=user', 'root', '');
$showFormular = true; 

if(isset($_GET['changeMail'])) {
	$error = false;
	$password = $_POST['password'];
	$emailNew = $_POST['emailNew'];
	$emailNew2 = $_POST['emailNew2'];
	$email = $_SESSION['email'];
	

	if($emailNew != $emailNew2) {
		echo 'Die neuen E-Mail adressen stimmen nicht &uuml;berein<br>';
		$error = true;
	}
	
	if(!$error) {
		$stmt = $pdo->prepare("SELECT * FROM user.users WHERE email = :emailNew");
		$result = $stmt->execute(array('emailNew' => $emailNew));
		$user = $stmt->fetch();
		
		if($user !== false) {
			echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
			$error = true;
		}	
	}
		
	if (!$error){	
		$stmt = $pdo->prepare("SELECT * FROM user.users WHERE email = :email");
		$result = $stmt->execute(array('email' => $email));
		$user = $stmt->fetch();
		
		if (hash('sha256',$password) == $user['password']) {
			$stmt = $pdo->prepare("UPDATE user.users SET email = :emailNew WHERE email = :email");
			$result = $stmt->execute(array('emailNew' => $emailNew, 'email' => $email));
			
			if($result) {		
				echo 'E-Mail erfolgreich geändert';
				$showFormular = false;
			} else {
				echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
			} 
		} else {
			echo 'Ihr aktuelles Passwort war nicht Korrekt';
			}
	}
}	