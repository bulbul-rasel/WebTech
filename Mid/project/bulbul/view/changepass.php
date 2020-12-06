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

	<h1>Change Password</h1>
	<hr>

</head>
<body>

	<form method="POST" action="/bulbul/controller/action_change_password.php" >

		<label>Old password: </label>
		<input type="password" name="old_password" required>
		<br/>
		<br/>

		<label>Password: </label>
		<input type="password" name="new_password" required>
		<br/><br/>

		<label>Re enter password: </label>
		<input type="password" name="new_repassword" required>
		<br/><br/>

		<hr>
		<input type="Submit" value=" Submit">
		<input type="button" value=" Back " onClick="location.href='http://localhost/bulbul/view/bio.php'">

		<input type="button" value=" Cancel " onClick="location.href='http://localhost/bulbul/index.php'">
		<br/>

	</form>
</body>
</html>

<?php include 'footer.php';?>