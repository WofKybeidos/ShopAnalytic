<?php
	session_start();
	include( __DIR__ . '\config.php');
	try{
		$userID = $_SESSION['userid'];
		$result = $pdo->query('SELECT Category, Price FROM user.transaction');
		
		$rows = array();
		$table = array();
		$table['cols'] = array(
			array('label' => 'Kategorie', 'type' => 'string'),
			array('label' => 'Ausgaben', 'type' => 'number'));
			
		foreach((array)$result as $r){
			$temp = array();
			if(isset($tmp['Category'])){
				$temp[] = array('v' => (string) $r['Category']);
			}
			if(isset($tmp['Price'])){
				$temp[] = array('v' => (int) $r['Price']);
			}
		}
		
		$table['rows'] = $rows;
		$jsonTable = json_encode($table);
	
	} catch(PDOException $e){
		echo 'ERROR: ' . $e ->getMessage();
	}
?>