<?php include(__DIR__ . '\includes\charts.php'); 
		include( __DIR__ . '\includes\session.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Shopalytics - Dashboard</title>
		<meta name="description" content="Mainpage from Shopalytics Webapplication"/>
		<meta name="language" content="de"/>
		<meta name="keywords" content="Mainpage Shopalytics Online Shopping"/>
		<meta name="author" content="Shopayltics-Team"/>
		<link rel="stylesheet" type="text/css" href="../style/Hauptseite.css"/>
		<link rel="stylesheet" type="text/css" href="../style/General.css"/>
		<link rel="stylesheet" type="text/css" href="../style/chart.css"/>
		
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="DrawChart.js"></script>
	</head>
	
	<header>
		<div id="welcome" class="text">Herzlich Willkommen: <a href="Benutzerverwaltung.php"><?php echo $user_check ?></a></div>
		
		<a href="includes/logout.php">
			<img id = "logout" class="icon" src="../graphic/icons/logout.png" title="Logout"/>
		</a>
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
	<footer>
		<a href="../Verlinkungen/Impressum.html">Impressum</a> | 
		<a href="../Verlinkungen/Datenschutz.html">Datenschutzbestimmungen</a> | 
		<a href="../Verlinkungen/Kontakt.html">Kontakt</a>
	</footer>
</html>