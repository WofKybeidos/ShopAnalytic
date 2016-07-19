<?php 
session_start();
//Ausgelagerte Datenbank connection für mehr Modularität
include( __DIR__ . '\config.php');

//Damit das Script nur dann ausgeführt wird, wenn der "Speichern" Button betätigt wird.
if(isset($_GET['changePW'])) {
	$error = false;
	$password = $_POST['password'];
	$passwordNew = $_POST['passwordNew'];
	$passwordNew2 = $_POST['passwordNew2'];
	$email = $_SESSION['email'];
	
	//Damit eine Überprüfung vorliegt, ob das Eingegebene Passwort bewusst eingegeben wurde
	if($passwordNew != $passwordNew2) {
		echo echo "<script type='text/javascript'>alert('Die neuen Passwörter stimmen nicht überein');</script>";
		$error = true;
	} 
	
	//Aufsuchen der E-Mail in der Datenbank
	if(!$error) {
		$stmt = $pdo->prepare("SELECT * FROM user.users WHERE email = :mail");
		$result = $stmt->execute(array('mail' => $email));
		$user = $stmt->fetch();
	}
	
	//Wenn die E-Mail gefunden wurde, wird das Passwort geprüft und durch das neue Passwort ersätzt (dieses wird gehashed in der Datenbank eingetragen)
	if ($error == false){	
		if ($user !== false && hash('sha256',$password) == $user['password']) {
			$password_hash = hash('sha256', $passwordNew);
			$stmt = $pdo->prepare("UPDATE user.users SET password = :password_hash WHERE email = :mail");
			$result = $stmt->execute(array('password_hash' => $password_hash, 'mail' => $email));
			
			//Ergebniss Ausgabe
			if($result) {		
				echo 'Passwort erfolgreich geändert';
				$showFormular = false;
			} else {
				echo "<script type='text/javascript'>alert('Beim Abspeichern ist leider ein Fehler aufgetreten');</script>";
			} 
		} else {
			echo "<script type='text/javascript'>alert('Ihr aktuelles Passwort war nicht Korrekt');</script>";
			}
	}
}	

?>