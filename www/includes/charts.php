<?php
	session_start();
	
	//Auswahl von auszuwertender Kategorie und dem zugehörigen Preis der Tabelle "transaction"
    $con=mysql_connect("localhost","root","");
	$user= $_SESSION['userid'];
	$sth = mysql_query("SELECT Price, Category FROM user.transaction");

	//Labes werden definiert
	$rows = array();
	$table = array();
	$table['cols'] = array(
		array('label' => 'Category', 'type' => 'string'),
		array('label' => 'Price', 'type' => 'number')
	);
	
	$rows = array();
	
	//befüllen des Arrays, für die Graphische Darstellung mit Google-Charts (JSON-Tables)
	while($r = mysql_fetch_assoc($sth)) {
		$temp = array();
		$temp[] = array('v' => (string) $r['Category']);    
		$temp[] = array('v' => (int) $r['Price']);
		$rows[] = array('c' => $temp);
	}
	
	//umwandlung in JSON format
	$table['rows'] = $rows;
	$jsonTable = json_encode($table);
	echo $jsonTable;

?>