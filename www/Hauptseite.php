<!-- Zur Modularisierung haben wir ein externes charts.php und session.php eingebunden-->
<?php include(__DIR__ . '\includes\charts.php'); 
		include( __DIR__ . '\includes\session.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Für Google optimierte Suchkriterien mit Seitenrelevanten Informationen und Beschreibung -->
		<title>Shopalytics - Dashboard</title>
		<meta name="description" content="Mainpage from Shopalytics Webapplication"/>
		<meta name="language" content="de"/>
		<meta name="keywords" content="Mainpage Shopalytics Online Shopping"/>
		<meta name="author" content="Shopayltics-Team"/>
		<!-- Einbindung der Css-Dateien. Einmal die spezifische für die Haupseite, Charts und die Generall.css in dem Allgemeine Paramter abgehandelt werden -->
		<link rel="stylesheet" type="text/css" href="../style/Hauptseite.css"/>
		<link rel="stylesheet" type="text/css" href="../style/General.css"/>
		<link rel="stylesheet" type="text/css" href="../style/chart.css"/>
		
		<!-- Hier werden javascript Dateien eingebunden, die die Darstellung und Funktion des Charts abhandeln -->
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="DrawChart.js"></script>
	</head>
	
	<header>
		<!-- Hier wird die Seite in verschiedene Divs aufgeteilt, damit die Einteilung zwischen dem Startheader und des Charts einfacher zu gestalten ist -->
		<!-- Hier wird auf die Benutzerverwaltungsseite verlinkt, damit der User anpassungen vornehmen kann. Außerdem wird der Benutername aus der 
		Datenbank ausgelesen und angezeigt -->
		<div id="welcome" class="text">Herzlich Willkommen: <a href="Benutzerverwaltung.php"><?php echo $user_check ?></a></div>
		
		<!-- Hinter dem Logout Symbol ist das dazugehörige Skript hinterlegt, damit der Logout von der Seite erfolgt -->
		<a href="includes/logout.php">
			<img id = "logout" class="icon" src="../graphic/icons/logout.png" title="Logout"/>
		</a>
		<!-- Hier ist es möglich auf das Symbol zu drücken, damit man zur Benutzerverwaltung gelangt -->
		<a href="Benutzerverwaltung.php">
			<img id = "user" class="icon" src="../graphic/icons/user.png" title="Benutzerverwaltung"/>
		</a>
		<a>
			<img id = "dashboard" class="icon" src="../graphic/icons/pie-chart.png" title="Dashboard"/>
		</a>
		
		<img id = "logo" src="../graphic/logos/Shopanalytics.png">
	</header>
	
	<body>
	<div id="chart_div"> </div>
		
	</body>
	
	<!-- Definierung des Footers mit dem Links zum Impressum, Datenschutzbestimmungen und Kontaktfomulat. Hier eingebunden, damit man direkt von 
	der Hauptseite darauf zugreifen kann -->
	<footer>
		<a href="../Verlinkungen/Impressum.html">Impressum</a> | 
		<a href="../Verlinkungen/Datenschutz.html">Datenschutzbestimmungen</a> | 
		<a href="../Verlinkungen/Kontakt.html">Kontakt</a>
	</footer>
</html>