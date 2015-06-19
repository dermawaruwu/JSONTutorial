<?php 
	header("Content-Type: application/json");

	if(isset($_POST['limit'])){
		$pattern = '#[^0-9]#';
		$limit = preg_replace($pattern, '', $_POST['limit']);
		require_once('connect_db.php');
		$i  = 0;
		$jsonData = '{';
		$jsonData .= '}';
		echo $jsonData;
	}

	echo $jsonData;

?>