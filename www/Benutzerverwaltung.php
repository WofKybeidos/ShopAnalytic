<!-- Zur Modularisierung haben wir ein externes Change_PW.php und Change_PW.php eingebunden-->
<?php include(__DIR__ . '\includes\Change_PW.php');
	 include(__DIR__ . '\includes\Change_Mail.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Für Google optimierte Suchkriterien mit Seitenrelevanten Informationen und Beschreibung -->
		<title>Benutzerverwaltung Shopalytics</title>
		<meta name="description" content="User management from Shopalytics Webapplication"/>
		<meta name="language" content="de"/>
		<meta name="keywords" content="User Management Shopalytics Online Shopping"/>
		<meta name="author" content="Shopayltics-Team"/>
		<!-- Einbindung der Css-Dateien. Einmal die spezifische für die Benutzerverwaltungsseite und die Generall.css in dem Allgemeine Paramter abgehandelt werden -->
		<link rel="stylesheet" type="text/css" href="../style/Benutzerverwaltung.css"/>
		<link rel="stylesheet" type="text/css" href="../style/General.css"/>
	</head>

	<header>
		<!-- Einbindung des Logos im Header mit Verlinkung zur Startseite -->
		<a href="../www/Start.php"><img src="../graphic/logos/Shopanalytics.png"></a>
		<h2>Benutzerverwaltung</h2>
	</header>

	<body>
		<!-- Definierung der Benutzerverwaltung mit 2 Fieldset (Einmal für das Passwort ändern und das zweite für das ändern der Email) mit den benötigten Feldern 
		und Übergabe der Werte an das dementsprechende PHP -->
		<form method="post" name="NewPassword" action="?changePW=1">
			<fieldset>
				<!-- Legende für das ändern des Passwortes -->
				<legend>Passwort &auml;ndern</legend>
					<!-- Hier wird das Label für das Feld Aktuelles Passwort definiert -->
					<label for="AktuellesPw">
						Aktuelles Passwort: <input type="password" name="password" id="aPw" placeholder="">
					</label>
					<label for="NeuesPw">
						Neues Passwort: <input type="password" name="passwordNew" id="nPw" placeholder="">
					</label>
					<label for="PwBestaetigen">
						Passwort Best&auml;tigen: <input type="password" name="passwordNew2" id="bPw" placeholder="">
					</label>
						<!-- Hier wird der Button zum speichern des geänderten Passworts festgelegt -->
						<input class="Button" type="submit" id="changePw" title="Speichern" value="Speichern"/>
			</fieldset>
		</form>
		
		<!-- Genau wie oben, nur fürs ändenr der Email Adresse -->
		<form method="post" name="NewMail" action="?changeMail=1">
			<fieldset>
			<!-- Legende für das ändern der E-Mail Adresse -->
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
		<a href="Hauptseite.php">Zur&uuml;ck zum Dashboard</a>	
	</body>
	
	<!-- Definierung des Footers mit dem Links zum Impressum, Datenschutzbestimmungen und Kontaktfomulat. Hier eingebunden, damit man direkt von 
	der Hauptseite darauf zugreifen kann -->
	<footer>
		<a href="../Verlinkungen/Impressum.html">Impressum</a> | 
		<a href="../Verlinkungen/Datenschutz.html">Datenschutzbestimmungen</a> | 
		<a href="../Verlinkungen/Kontakt.html">Kontakt</a>
	</footer>
</html>