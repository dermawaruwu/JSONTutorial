<?php 

$host = "localhost";
$port = "5432";
$dbname = "belajar";
$user = "postgres";
$password = "admin";

try {
	$koneksi = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");	
} catch (Exception $e) {
	
}

?>