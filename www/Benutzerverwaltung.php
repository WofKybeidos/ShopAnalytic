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
		<a href="../www/Start.php"><img src="../graphic/logos/Shopanalytics.png"></a>
		<h2>Benutzerverwaltung</h2>
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
						Passwort Best&auml;tigen: <input type="password" name="passwordNew2" id="bPw" placeholder="">
					</label>
						<input class="Button" type="submit" id="changePw" title="Speichern" value="Speichern"/>
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
						E-Mail Adresse Best&auml;tigen: <input name="emailNew2" id="bE-Mail" placeholder="">
					</label>
					<label for="AktuellesPw">
						Aktuelles Passwort: <input type="password" name="password" id="aPw" placeholder="">
					</label>
						<input class="Button" type="submit" id="changeE-mail" title="Speichern" value="Speichern"/>
			</fieldset>
		</form>
	</body>
	
	<footer>
		<a href="../Verlinkungen/Impressum.html">Impressum</a> | 
		<a href="../Verlinkungen/Datenschutz.html">Datenschutzbestimmungen</a> | 
		<a href="../Verlinkungen/Kontakt.html">Kontakt</a>
	</footer>
</html>