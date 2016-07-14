<?php include("login.php"); ?>

<!DOCTYPE html>
<html>
	<head>
		<!-- für google Optimierte Such kriterien beachten -->
		<title>Login Shopalytics</title>
		<meta name="description" content="Login to Shopalytics Webapplication"/>
		<meta name="language" content="de"/>
		<meta name="keywords" content="Login Shopalytics Online Shopping"/>
		<meta name="author" content="Shopayltics-Team"/>
		<link rel="stylesheet" type="text/css" href="style/Login.css"/>
	</head>
	
	<header>
		<img src="graphic/logos/Shopanalytics.png">
	</header>
	
	<body>
			
		<form method="post" name="login" action="?login=1">
			<fieldset>
				<input type="text" name="username" id="username" placeholder="Benutzername" value="" 
				autofocus autocomplete="on" autocorrect="off" required>  
				<br/>
				<input type="password" name="password" id="password" value="" placeholder="Passwort" autocomplete="on" autocorrect="off" required>
				<br/>
				<input type="submit" id="submit" class="login primary icon-confirm svg" title="Einloggen" value="Einloggen"/>
				<!-- <input type="submit" id="new" class="login primary icon-confirm svg" title="Neuanmeldung" value="Registrieren" disabled="disabled"/> -->
			</fieldset>
		</form>
		<!-- <a href="http://passwortvergessen.de/">Passwort vergessen?</a> Passwort vergessen fehlt noch -->
	</body>
	
	<footer>
		<a href="Verlinkungen/Impressum/Impressum.html">Impressum</a> | 
		<a href="Verlinkungen/Datenschutz/Datenschutz.html">Datenschutzbestimmungen</a> | 
		<a href="Verlinkungen/Kontakt/Kontakt.html">Kontakt</a>
	</footer>
</html>