<!-- Zur Modularisierung haben wir ein externes Regestrierung.php eingebunden-->
<?php include(__DIR__ . '\includes\Regestrierung.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Für Google optimierte Suchkriterien mit Seitenrelevanten Informationen und Beschreibung -->
		<title>Registieren Shopalytics</title>
		<meta name="description" content="Sign Up from Shopalytics Webapplication"/>
		<meta name="language" content="de"/>
		<meta name="keywords" content="Sign Up Shopalytics Online Shopping"/>
		<meta name="author" content="Shopayltics-Team"/>
		<!-- Einbindung der Css-Dateien. Einmal die spezifische für die Regestrierungsseite und die Generall.css in dem Allgemeine Paramter abgehandelt werden -->
		<link rel="stylesheet" type="text/css" href="../style/Registrieren.css"/>
		<link rel="stylesheet" type="text/css" href="../style/General.css"/>
	</head>	
	
	<header>
		<!-- Einbindung des Logos im Header mit Verlinkung zur Startseite -->
		<a href="Start.php"><img src="../graphic/logos/Shopanalytics.png"></a>
		<h1>Registration</h1>
	</header>
	
	<body>
		<!-- Definierung des Regestrierungsprozesses im Fieldset mit den benötigten Feldern (Mit dem Typen Text, Email und Passwort) und Übergabe der Werte an 
		das dementsprechende PHP -->
		<form method="post" name="Registrieren" action="?register=1">
			<fieldset>
				<!-- Definition eines Inputfeldes mit dem Typ text, da hier der Vorname eingetragen werden soll. Der Autofocus für das Feld ist eingeschaltet, 
				da die Fokusierung automatisch erfolgen soll -->
				<input type="text" name="firstname" id="firstname" placeholder="Vorname"
				autofocus autocomplete="on" required> 
				<br/>
				<input type="text" name="lastname" id="lastname" placeholder="Nachname"  
				autocomplete="on" required> 
				<br/>
				<!-- Hier sind jeweils 2 Felder, da das erste für die normale Eingabe ist, das zweite zur Überprüfung der ersten Eingabe -->
				<input type="email" name="email" class="mail" placeholder="Ihre E-Mail Adresse" 
				autocomplete="on" required>
				<br/>
				<input type="email" name="email2" class="mail" placeholder="E-Mail Adresse wdhl."  
				autocomplete="on" required>
				<br/>
				<input type="password" name="password" id="password" value="" placeholder="Passwort" required>
				<br/>
				<input type="password" name="password2" id="password2" value="" placeholder="Passwort wdl." required>
				<br/>
				<input type="submit" id="submit" title="Anmelden" value="Anmelden"/>
			</fieldset>
		</form>
	</body>
	
	<!-- Definierung des Footers mit dem Links zum Impressum, Datenschutzbestimmungen und Kontaktfomulat. Hier eingebunden, damit man direkt von 
	der Hauptseite darauf zugreifen kann -->
	<footer>
		<a href="../Verlinkungen/Impressum.html">Impressum</a> | 
		<a href="../Verlinkungen/Datenschutz.html">Datenschutzbestimmungen</a> | 
		<a href="../Verlinkungen/Kontakt.html">Kontakt</a>
	</footer>
</html>