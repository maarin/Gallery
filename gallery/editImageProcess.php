<?php
include 'imageDB.php';

$id = $_POST['id'];
$name = $_POST['name'];
$gallery_id = $_POST['gallery_id'];
$selectId = $gallery_id;

try{ 
        $conn = new PDO("mysql:host=$dbhost;dbname=gallerydb", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE `images` SET `name`='$name' WHERE `id`='$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e){ 
        echo $sql . $e->getMessage();
}

header('Location:indexGallery.php?selectId='.$selectId);

?>
