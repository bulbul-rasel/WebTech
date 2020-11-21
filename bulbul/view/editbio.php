<div>
    <?php include 'header.php' ?>
</div>
<hr>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>

	<style>
	
	</style>

	<h1>Profile</h1>
	<hr>

</head>
<body>

	<form method="POST" action="/bulbul/controller/action_edit_bio.php" >

		<label>User name: </label>
		<input type="text" name="user_name" required>
		<br/>
		<br/>

		<label>Email: </label>
		<input type="Email" name="email" required>
		<br/><br/>

		<hr>
		<input type="Submit" value=" Submit">

		<input type="button" value=" Back " onClick="location.href='http://localhost/bulbul/view/bio.php'">
		<br/>

	</form>
</body>
</html>

<?php include 'footer.php';?>