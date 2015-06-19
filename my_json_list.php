<?php 
	header("Content-Type: application/json");
	/* 
	$jsonData = '{
		"u1":{ "user":"John", "age":22, "country":"United States"},
		"u2":{ "user":"Memo", "age":32, "country":"Indonesia"},
		"u3":{ "user":"Kris", "age":42, "country":"Nias"},
		"u4":{ "user":"Saya", "age":22, "country":"United States"},
		"u5":{ "user":"Dia", "age":32, "country":"Indonesia"},
		"u6":{ "user":"Mereka", "age":42, "country":"Nias"},
		"u7":{ "user":"Kamu", "age":22, "country":"United States"},
		"u8":{ "user":"Ya", "age":32, "country":"Indonesia"},
		"u9":{ "user":"Iya", "age":42, "country":"Nias"},
		"u10":{ "user":"Lah", "age":22, "country":"United States"},
		"u11":{ "user":"Handuk", "age":32, "country":"Indonesia"},
		"u12":{ "user":"Meja", "age":42, "country":"Nias"},
		"u13":{ "user":"Kursi", "age":22, "country":"United States"},
		"u14":{ "user":"Laptop", "age":32, "country":"Indonesia"},
		"u15":{ "user":"Kasur", "age":42, "country":"Nias"}
	}';
	*/

	$jsonData = file_get_contents("mylist.json");
	echo $jsonData;
?>