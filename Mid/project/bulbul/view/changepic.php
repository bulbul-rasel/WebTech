<?php
if (isset($_POST['Upload'])){
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];
	$file_size = $_FILES['file']['size'];
	$file_tem_loc = $_FILES['file']['tem_name'];
	$file_store = "../data/upload".$file_name;

	move_uploaded_file($file_tem_loc, $file_store);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Upload Photo </title>
</head>
<body>

	<form action="?" method="POST" enctype="multipart/form-data">
		<label> Uploding Photo</label>
		<p><input type="file" name="file"></p>
		<p><input type="submit" name="upload" value="Upload Image"></p>
	</form>
	<input type="button" value=" Back " onClick="location.href='http://localhost/bulbul/view/seedetails.php'">


</body>
</html>