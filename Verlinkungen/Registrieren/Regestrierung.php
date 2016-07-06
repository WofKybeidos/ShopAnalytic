<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=user', 'root', '');
$showFormular = true; 

if(isset($_GET['register'])) {
	$error = false;
	$email = $_POST['email'];
	$email2 = $_POST['email2'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	
	if($password != $password2) {
		echo 'Die Passwörter müssen übereinstimmen<br>';
		$error = true;
	}
	if($email != $email2) {
		echo 'Die E-Mail Adressen müssen übereinstimmen<br>';
		$error = true;
	}
	
	if(!$error) {
		$stmt = $pdo->prepare("SELECT * FROM user WHERE email = :email");
		$result = $stmt->execute(array('email' => $email));
		$user = $stmt->fetch();
			
		if($user !== false) {
			echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
			$error = true;
		}	
	}
	
	if(!$error) {	
		$password_hash = hash('sha256', $password);
		$statement = $pdo->prepare("INSERT INTO user (email, password, firstname, lastname) VALUES (:email, :password_hash, :firstname, :lastname)");
		$result = $statement->execute(array('email' => $email, 'password_hash' => $password_hash, 'firstname' => $firstname, 'lastname' => $lastname));
		
		if($result) {		
			echo 'Du wurdest erfolgreich registriert. <a href="login.html">Zum Login</a>';
			$showFormular = false;
		} else {
			echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
		} 
	} 
}