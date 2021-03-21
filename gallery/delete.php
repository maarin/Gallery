<?php
include 'db.php';

$deleteId = $_GET['deleteId'];

try{ 
	$conn = new PDO("mysql:host=$dbhost;dbname=gallerydb", $dbuser, $dbpass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "DELETE FROM gallery WHERE id='$deleteId'";
	$conn->exec($sql);
} catch(PDOException $e){ 
        echo $sql . $e->getMessage();
}

header('Location:index.php');

$conn = null;
?>
