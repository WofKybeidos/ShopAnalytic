<?php include(__DIR__ . '\includes\Regestrierung.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registieren Shopalytics</title>
		<meta name="description" content="Sign Up from Shopalytics Webapplication"/>
		<meta name="language" content="de"/>
		<meta name="keywords" content="Sign Up Shopalytics Online Shopping"/>
		<meta name="author" content="Shopayltics-Team"/>
		<link rel="stylesheet" type="text/css" href="../style/Registrieren.css"/>
		<link rel="stylesheet" type="text/css" href="../style/General.css"/>
	</head>	
	
	<header>
		<a href="Start.php"><img src="../graphic/logos/Shopanalytics.png"></a>
		<h1>Registration</h1>
	</header>
	
	<body>	
		<form method="post" name="Registrieren" action="?register=1">
			<fieldset>
				<input type="text" name="firstname" id="firstname" placeholder="Vorname"
				autofocus autocomplete="on" required> 
				<br/>
				<input type="text" name="lastname" id="lastname" placeholder="Nachname"  
				autocomplete="on" required> 
				<br/>
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
	
	<footer>
		<a href="../Verlinkungen/Impressum/Impressum.html">Impressum</a> | 
		<a href="../Verlinkungen/Datenschutz/Datenschutz.html">Datenschutzbestimmungen</a> | 
		<a href="../Verlinkungen/Kontakt/Kontakt.html">Kontakt</a>
	</footer>
</html>