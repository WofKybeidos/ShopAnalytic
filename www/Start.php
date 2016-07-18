<!-- Zur Modularisierung haben wir ein externes Login.php eingebunden-->
<?php include(__DIR__ . '\includes\login.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Für Google optimierte Suchkriterien mit Seitenrelevanten Informationen und Beschreibung -->
		<title>Login Shopalytics</title>
		<meta name="description" content="Login to Shopalytics Webapplication"/>
		<meta name="language" content="de"/>
		<meta name="keywords" content="Login Shopalytics Online Shopping"/>
		<meta name="author" content="Shopayltics-Team"/>
		<link rel="stylesheet" type="text/css" href="../style/Login.css"/>
		<link rel="stylesheet" type="text/css" href="../style/General.css"/>
	</head>
	
	<header>
	<!-- Einbindung des Logos im Header, damit es oben auf der Seite ausgerichtet werden kann -->
		<img src="../graphic/logos/Shopanalytics.png">
	</header>
	
	<body>
		<!-- Definierung des Loginprozesses im Fieldset mit den benötigten Feldern (Mit dem Typ email, passwort und button) und Übergabe der Werte an 
		das dementsprechende PHP und die dazugehörigen Links -->	
		<form method="post" name="login" action="?login=1">
			<fieldset>
				<input type="email" name="email" id="email" placeholder="E-Mail-Adresse" autocomplete="on" autocorrect="off" required>  
				<br/>
				<input type="password" name="password" id="password" placeholder="Passwort" autocomplete="on" autocorrect="off" required>
				<br/>
				<a id = "Registrieren" href="Registrieren.php">
					<input type="button" class="Button" title="Neuanmeldung" value="Registrieren"/>
				</a>
				<input type="submit" class="Button" title="Einloggen" value="Einloggen"/>
			</fieldset>
		</form>
		<!-- Die Funktion hinter dem Passwort vergessen konnte aus zeitlichen Gründen leider nicht mehr implementiert werden, der Vollständigkeitshalber  
		haben wir es aber drinnen gelassen -->
		<a id = "PwVergessen" href="">Passwort vergessen?</a>
	</body>
	<!-- Definierung des Footers mit dem Links zum Impressum, Datenschutzbestimmungen und Kontaktfomulat. Hier eingebunden, damit man direkt von 
	der Loginseite darauf zugreifen kann -->
	<footer>
		<a href="../Verlinkungen/Impressum.html">Impressum</a> | 
		<a href="../Verlinkungen/Datenschutz.html">Datenschutzbestimmungen</a> | 
		<a href="../Verlinkungen/Kontakt.html">Kontakt</a>
	</footer>
</html>