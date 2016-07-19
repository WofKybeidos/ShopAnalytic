<?php 
//Ausgelagerte Datenbank connection für mehr Modularität
include( __DIR__ . '\config.php');

//Damit das Script nur dann ausgeführt wird, wenn der "Speichern" Button betätigt wird.
if(isset($_GET['changeMail'])) {
	//Notwendige Variablen deklarieren
	$error = false;
	$password = $_POST['password'];
	$emailNew = $_POST['emailNew'];
	$emailNew2 = $_POST['emailNew2'];
	$email = $_SESSION['email'];
	
	//Damit eine Überprüfung vorliegt, ob die Eingegebene E-Mail bewusst eingegeben wurde
	if($emailNew != $emailNew2) {
		echo "<script type='text/javascript'>alert('Die nuen E-Mail-Adressen stimmen nicht überein');</script>";
		$error = true;
	}
	
	//Überprüfung ob E-Mail bereits vorhanden ist, wenn ja Fehler, damit die Unique Eigenschaft in der Datenbank erhalten bleibt
	if(!$error) {
		$stmt = $pdo->prepare("SELECT * FROM user.users WHERE email = :emailNew");
		$result = $stmt->execute(array('emailNew' => $emailNew));
		$user = $stmt->fetch();
		
		if($user !== false) {
			echo "<script type='text/javascript'>alert('Diese E-Mail wird bereits Verwendet');</script>";
			$error = true;
		}	
	}
	
	//Datenbank Eintrag wird aktualisiert, insofern keine Fehler vorliegen 
	if (!$error){	
		$stmt = $pdo->prepare("SELECT * FROM user.users WHERE email = :email");
		$result = $stmt->execute(array('email' => $email));
		$user = $stmt->fetch();
		
		//Zusätzliche überprüfung des Passworts um mehr sicherheit zu gewährleisten
		if (hash('sha256',$password) == $user['password']) {
			$stmt = $pdo->prepare("UPDATE user.users SET email = :emailNew WHERE email = :email");
			$result = $stmt->execute(array('emailNew' => $emailNew, 'email' => $email));
			
			//Ergebnis Ausgaben
			if($result) {		
				echo "<script type='text/javascript'>alert('E-Mail erfolgreich geändert');</script>";
				$showFormular = false;
			} else {
				echo "<script type='text/javascript'>alert('Fehler beim Speichern');</script>";
			} 
		} else {
			echo "<script type='text/javascript'>alert('Passwort war ungueltig');</script>";
			}
	}
}	

?>