<?php
	//Wenn keine Session vorliegt zurück zur Start Seite
	if (session_status() == PHP_SESSION_NONE) {
		header("Location: start.php");
	}