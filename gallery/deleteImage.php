<?php
include 'imageDB.php';

$deleteId = $_GET['deleteId'];


try{ 
	$conn = new PDO("mysql:host=$dbhost;dbname=gallerydb", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "DELETE FROM images WHERE id='$deleteId'";
	$conn->exec($sql);
} catch(PDOException $e){ 
        echo $sql . $e->getMessage();
}

header('Location:index.php');

$conn = null;
?>
