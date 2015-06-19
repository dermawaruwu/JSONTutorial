<?php
	$phpArray = ['user' => "John", 'age' => 22, 'country' => "USA"];
	$jsonData = json_encode($phpArray);
	echo $jsonData;
?>