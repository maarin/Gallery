<?php
include 'imageDB.php';
$editId = $_GET['editId'];

try {
	$conn = new PDO("mysql:host=$dbhost;dbname=gallerydb", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT * FROM images WHERE id=$editId");
	$stmt->execute();
} catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
}

$row = $stmt->fetch(PDO::FETCH_ASSOC);
extract($row)

?>
<body style="background-color: #cccccc;">
<form method="post" action="editImageProcess.php">
	<input type="hidden" value="<?php echo $id; ?>" name="id">
	<input type="text" value="<?php echo $name; ?>" name="name" minlength="5" maxlength="20">
	<input type="hidden" value="<?php echo $gallery_id;?>" name="gallery_id">
	<input type="submit" name="submit" value="Edit">
</form>
</body>
