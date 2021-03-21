<?php
include 'db.php';
?>

<!DOCTOPY html>
<html>
<head>
	<title>Gallery</title>
</head>
<body style="background-color: #cccccc;">
	<div style="width:50%; margin:0 auto; text-align: center;">
	<h3>Add new gallery</h3>
	<form method="post" action="add.php">
		<input type="text" name="name" minlength="5" maxlength="30">
		<input type="submit" name="submit" value="Add">
	</form>
<table style='border: solid 1px black; display: inline-table;'>
	<th>
		<td>ID</td>
		<td>NAME</td>
	</th>
<?php
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	extract($row);
	?>
	<tr>
		<td><?php echo $id; ?><td>
		<td><?php echo $name; ?><td>
		<td><a href="indexGallery.php?selectId=<?php echo $id; ?>">View</td>
		<td><a href="delete.php?deleteId=<?php echo $id; ?>">Delete</td>
		<td><a href="edit.php?editId=<?php echo $id; ?>">Edit</td>
	<tr>
	<?php
}
?>
</table>
</div>
</body>
</html>
