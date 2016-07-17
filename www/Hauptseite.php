<?php include(__DIR__ . '\includes\charts.php'); 
		include( __DIR__ . '\includes\session.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- für google Optimierte Such kriterien beachten -->
		<title>Startseite Shopalytics</title>
		<meta name="description" content="Mainpage from Shopalytics Webapplication"/>
		<meta name="language" content="de"/>
		<meta name="keywords" content="Mainpage Shopalytics Online Shopping"/>
		<meta name="author" content="Shopayltics-Team"/>
		<link rel="stylesheet" type="text/css" href="../style/Hauptseite.css"/>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="DrawChart.js"></script>
	</head>
	
	<header>
		<br>Herlich Willkommen: <?php echo $user_check ?>
		<a href="Benutzerverwaltung.php">
			<img id = "user" src="../graphic/icons/user.png"/>
		</a>
		<a href="https://www.google.de/?gws_rd=ssl">
			<img id = "logout" src="../graphic/icons/logout.png"/>
		</a>
		<img id = "dashboard" src="../graphic/icons/dashboard.png"/>
		<img id = "logo" src="../graphic/logos/Shopanalytics.png">
	</header>
	
	<body>
	</body>
	<footer>
		<a href="../Verlinkungen/Impressum.html">Impressum</a> | 
		<a href="../Verlinkungen/Datenschutz.html">Datenschutzbestimmungen</a> | 
		<a href="../Verlinkungen/Kontakt.html">Kontakt</a>
	</footer>
</html>