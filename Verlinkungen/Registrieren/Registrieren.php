<?php include("Regestrierung2.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registieren Shopalytics</title>
		<meta name="description" content="Sign Up from Shopalytics Webapplication"/>
		<meta name="language" content="de"/>
		<meta name="keywords" content="Sign Up Shopalytics Online Shopping"/>
		<meta name="author" content="Shopayltics-Team"/>
		<link rel="stylesheet" type="text/css" href="../../style/Registrieren.css"/>
	</head>	
	
	<header>
		<a href="../../Login.html"><img src="../../graphic/logos/Shopanalytics.png"></a> 
		<h1>Registration</h1>
	</header>
	
	<body>	
		<form method="post" name="Registrieren" action="?register=1">
			<fieldset>
				<input type="text" name="firstname" id="firstname" placeholder="Vorname" value="" 
				autofocus autocomplete="on" autocorrect="off" required> 
				<br/>
				<input type="text" name="lastname" id="lastname" placeholder="Nachname" value="" 
				autofocus autocomplete="on" autocorrect="off" required> 
				<br/>
				<input type="email" name="email" id="mail" placeholder="Ihre E-Mail Adresse" value= "" 
				autocomplete="on" autocorrect="off" required>
				<br/>
				<input type="email" name="email2" id="mail" placeholder="E-Mail Adresse wdhl." value= "" 
				autocomplete="on" autocorrect="off" required>
				<br/>
				<input type="password" name="password" id="password" value="" placeholder="Passwort" autocomplete="on" autocorrect="off" required>
				<br/>
				<input type="password" name="password2" id="password" value="" placeholder="Passwort wdl." autocomplete="on" autocorrect="off" required>
				<br/>
				<input type="submit" id="submit" title="Anmelden" value="Anmelden"/>
			</fieldset>
		</form>
	</body>
	
	<footer>
		<!-- Fußzeile Einheitlich machen (kein Copy paste), lieber ein Element für die Fußzeile und diese an jeder Seite anbinden) -->
	</footer>
</html>