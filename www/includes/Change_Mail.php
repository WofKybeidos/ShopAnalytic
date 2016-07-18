<?php 

include( __DIR__ . '\config.php');

if(isset($_GET['changeMail'])) {
	$error = false;
	$password = $_POST['password'];
	$emailNew = $_POST['emailNew'];
	$emailNew2 = $_POST['emailNew2'];
	$email = $_SESSION['email'];
	

	if($emailNew != $emailNew2) {
		echo "<script type='text/javascript'>alert('Die nuen E-Mail-Adressen stimmen nicht überein');</script>";
		$error = true;
	}
	
	if(!$error) {
		$stmt = $pdo->prepare("SELECT * FROM user.users WHERE email = :emailNew");
		$result = $stmt->execute(array('emailNew' => $emailNew));
		$user = $stmt->fetch();
		
		if($user !== false) {
			echo "<script type='text/javascript'>alert('Diese E-Mail wird bereits Verwendet');</script>";
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