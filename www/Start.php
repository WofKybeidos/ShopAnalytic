<?php include(__DIR__ . '\includes\login.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<!-- für google Optimierte Such kriterien beachten -->
		<title>Login Shopalytics</title>
		<meta name="description" content="Login to Shopalytics Webapplication"/>
		<meta name="language" content="de"/>
		<meta name="keywords" content="Login Shopalytics Online Shopping"/>
		<meta name="author" content="Shopayltics-Team"/>
		<link rel="stylesheet" type="text/css" href="../style/Login.css"/>
		<link rel="stylesheet" type="text/css" href="../style/General.css"/>
	</head>
	
	<header>
		<img src="../graphic/logos/Shopanalytics.png">
	</header>
	
	<body>
			
		<form method="post" name="login" action="?login=1">
			<fieldset>
				<input type="email" name="email" id="email" placeholder="E-Mail-Adresse" autocomplete="on" autocorrect="off" required>  
				<br/>
				<input type="password" name="password" id="password" placeholder="Passwort" autocomplete="on" autocorrect="off" required>
				<br/>
				<input type="submit" class="Button" title="Neuanmeldung" value="Registrieren"/>
				</a>
				<input type="submit" class="Button" title="Einloggen" value="Einloggen"/>
			</fieldset>
		</form>
		<a id = "PwVergessen" href="http://passwortvergessen.de/">Passwort vergessen?</a>
	</body>
	
	<footer>
		<a href="Verlinkungen/Impressum/Impressum.html">Impressum</a> | 
		<a href="Verlinkungen/Datenschutz/Datenschutz.html">Datenschutzbestimmungen</a> | 
		<a href="Verlinkungen/Kontakt/Kontakt.html">Kontakt</a>
	</footer>
</html>