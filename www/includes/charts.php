<?php
	session_start();

    $con=mysql_connect("localhost","root","");
	$user= $_SESSION['userid'];
	$sth = mysql_query("SELECT Price, Category FROM user.transaction WHERE ID_USERS = :userid");

	$rows = array();
	$table = array();
	$table['cols'] = array(
		array('label' => 'Category', 'type' => 'string'),
		array('label' => 'Price', 'type' => 'number')
	);
	
	$rows = array();
	
	while($r = mysql_fetch_assoc($sth)) {
		$temp = array();
		$temp[] = array('v' => (string) $r['Category']);    
		$temp[] = array('v' => (int) $r['Price']);
		$rows[] = array('c' => $temp);
	}
	
	$table['rows'] = $rows;
	$jsonTable = json_encode($table);
	echo $jsonTable;

?>