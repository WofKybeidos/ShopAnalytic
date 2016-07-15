<?php include(__DIR__ . '\includes\Change_PW.php');
	 include(__DIR__ . '\includes\Change_Mail.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Benutzerverwaltung Shopalytics</title>
		<meta name="description" content="User management from Shopalytics Webapplication"/>
		<meta name="language" content="de"/>
		<meta name="keywords" content="User Management Shopalytics Online Shopping"/>
		<meta name="author" content="Shopayltics-Team"/>
		<link rel="stylesheet" type="text/css" href="../style/Benutzerverwaltung.css"/>
		<link rel="stylesheet" type="text/css" href="../style/General.css"/>
	</head>

	<header>
		<h2>Benutzerverwaltung</h2>
		<a href="../../Login.html"><img src="../../graphic/logos/Shopanalytics.png"></a>
	</header>

	<body>
		<form method="post" name="NewPassword" action="?changePW=1">
			<fieldset>
				<legend>Passwort &auml;ndern</legend>
					<label for="AktuellesPw">
						Aktuelles Passwort: <input type="password" name="password" id="aPw" placeholder="">
					</label>
					<label for="NeuesPw">
						Neues Passwort: <input type="password" name="passwordNew" id="nPw" placeholder="">
					</label>
					<label for="PwBestaetigen">
						Passwort Bestaetigen: <input type="password" name="passwordNew2" id="bPw" placeholder="">
					</label>
						<input type="submit" id="changePw" title="Speichern" value="Speichern"/>
			</fieldset>
		</form>
		
		<form method="post" name="NewMail" action="?changeMail=1">
			<fieldset>
				<legend>E-Mail Adresse &auml;ndern</legend>
					<label for="AktuelleE-Mail">
						Aktuelle E-Mail Adresse: <input type="email" name="email" id="aE-Mail" placeholder="">
					</label>
					<label for="NeueE-Mail">
						Neue E-Mail Adresse: <input type="email" name="emailNew" id="nE-Mail" placeholder="">
					</label>
					<label for="E-MailBestaetigen">
						E-Mail Adresse Bestaetigen: <input name="emailNew2" id="bE-Mail" placeholder="">
					</label>
					<label for="AktuellesPw">
						Aktuelles Passwort: <input type="password" name="password" id="aPw" placeholder="">
					</label>
						<input type="submit" id="changeE-mail" title="Speichern" value="Speichern"/>
			</fieldset>
		</form>
	</body>
	
	<footer>
		Zur&uuml;ck zur Startseite: <a href="../../Login.html">Hier klicken</a>
	</footer>
</html>