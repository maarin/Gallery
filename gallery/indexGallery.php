<?php
include "imageDB.php";
$selectId = $_GET['selectId'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
</head>
<body style="background-color: #cccccc;">
	<div style="width:50%; margin:0 auto; text-align: center;">
		<h1>Gallery</h1>		
		<form action="addImage.php?selectId=<?php echo $selectId; ?>" method="post" enctype="multipart/form-data">
			Select image to upload:
			<input type="file" name="fileToUpload" id="fileToUpload">
			<input type="submit" value="Upload Image" name="submit">
		</form>
	</div>
<?php
$stmt = $conn->prepare("SELECT id, name, image, gallery_id FROM images WHERE gallery_id=$selectId");
$stmt->execute();

while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	extract($row);
?>
        <div style="float:left; width:20%;">
                <h2><?php echo $row['name']; ?></h2>
 		<div><img src="<?php echo $row['image']; ?>" width="200" height="200"></div>
		<a href="editImage.php?editId=<?php echo $id; ?>">Edit</a>
		<a href="deleteImage.php?deleteId=<?php echo $id; ?>">Delete</a>
	</div>
	<?php
}
?>
</body>
</html>
