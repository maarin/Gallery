<?php
$server = "localhost";
$username = "root";
$password = "Letmeinpls!1";

$selectId= $_GET['selectId'];

try{
	$conn = new PDO("mysql:host=$server;dbname=gallerydb", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
}

?>
