<?php
include 'db.php';

$name = $_POST['name'];

try{ 
$conn = new PDO("mysql:host=$dbhost;dbname=gallerydb", $dbuser, $dbpass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO gallery (id, name) VALUES (NULL, '$name')";
$conn->exec($sql);
} catch(PDOException $e){ 
        echo $sql . $e->getMessage();
}

header('Location:index.php');

$conn = null;
?>
