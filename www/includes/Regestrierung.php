<?php 
session_start();
//Ausgelagerte Datenbank connection für mehr Modularität
include( __DIR__ . '\config.php');

//Damit das Script nur dann Ausgeführt wird, wenn der Registrations-Button ausgeführt wird
if(isset($_GET['register'])) {
	$error = false;
	$email = $_POST['email'];
	$email2 = $_POST['email2'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	
	//Überprüfung ob die Passwörter übereinstimmen
	if($password != $password2) {
		echo 'Die Passwörter müssen übereinstimmen<br>';
		$error = true;
	}
	//Überprüfung ob die E-Mail-Adressen übereinstimmen
	if($email != $email2) {
		echo 'Die E-Mail Adressen müssen übereinstimmen<br>';
		$error = true;
	}
	
	if(!$error) {
		$stmt = $pdo->prepare("SELECT * FROM user.users WHERE email = :email");
		$result = $stmt->execute(array('email' => $email));
		$user = $stmt->fetch();
		
		//Überprüfung ob die E-Mailadresse bereits Verwendet wird		
		if($user !== false) {
			echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
			$error = true;
		}	
	}
	
	//Wenn kein Fehler vorliegt, werden die Daten in die Datenbank eigetragen
	if(!$error) {	
		$password_hash = hash('sha256', $password);
		$statement = $pdo->prepare("INSERT INTO user.users (email, password, firstname, lastname) VALUES (:email, :password_hash, :firstname, :lastname)");
		$result = $statement->execute(array('email' => $email, 'password_hash' => $password_hash, 'firstname' => $firstname, 'lastname' => $lastname));
		
		//Ergebniss Ausgaben
		if($result) {		
			echo 'Du wurdest erfolgreich registriert. <a href="login.html">Zum Login</a>';
			$showFormular = false;
		} else {
			echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
		} 
	} 
}
?>