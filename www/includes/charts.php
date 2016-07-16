<?php
	include( __DIR__ . '\config.php');
	try{
		$userID = $_SESSION['userid'];
		$result = $pdo->query('SELECT Category, Price FROM user.transaction WHERE userID = :ID_USERS');
		
		$rows = array();
		$table = array();
		$table['cols'] = array(
			array('label' => 'Kategorie', 'type' => 'string'),
			array('label' => 'Ausgaben'. 'type' => 'number'));
			
		foreach($result){
			$temp = array();
			$temp[] = array('v' => (string) $result['Category']);
			
			$temp[] = array('v' => (int) $result['Price']);
		}
		
		$table['rows'] = $rows;
		$jsonTable = json_encode($table);
	
	} catch(PDOException $e){
		echo 'ERROR: ' . $e ->getMessage();
	}
?>