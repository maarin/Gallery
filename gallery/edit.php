<?php
include 'db.php';
$editId = $_GET['editId'];

try {
	$conn = new PDO("mysql:host=$dbhost;dbname=gallerydb", $dbuser, $dbpass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT * FROM gallery WHERE id=$editId");
	$stmt->execute();
} catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
}

$row = $stmt->fetch(PDO::FETCH_ASSOC);
extract($row)

?>
<body style="background-color: #cccccc;">
<form method="post" action="editprocess.php">
	<input type="hidden" value="<?php echo $id; ?>" name="id">
	<input type="text" value="<?php echo $name; ?>" name="name" minlength="5" maxlength="30">
	<input type="submit" name="submit" value="Edit">
</form>
</body>
