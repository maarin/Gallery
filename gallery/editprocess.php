<?php
include 'db.php';
$id = $_POST['id'];
$name = $_POST['name'];

try{ 
	$conn = new PDO("mysql:host=$dbhost;dbname=gallerydb", $dbuser, $dbpass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "UPDATE gallery SET name='$name' WHERE id='$id'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e){ 
        echo $sql . $e->getMessage();
}
header('Location:index.php');
?>
