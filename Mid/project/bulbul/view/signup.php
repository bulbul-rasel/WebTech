<div>
    <?php include 'header.php' ?>
</div>
<hr>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

	

	<h1>Sign Up Here</h1>

</head>
<body>


	<form method="POST" action="/bulbul/controller/action_signup.php" >

		<label>User name: </label>
		<input type="text" name="user_name" required>
		<br/>
		<br/>
		<label>Email: </label>
		<input type="Email" name="email" required>
		<br/><br/>

		<label>Password: </label>
		<input type="password" name="password" required>
		<br/><br/>
		<label>Repeat Password: </label>
		<input type="password" name="repassword" required>
		<br/><br/>

		<hr>
		<input type="Submit" value=" Submit">

		<input type="button" value=" Back " onClick="location.href='http://localhost/bulbul/index.php'">
		<br/>

	</form>	

</body>
</html>

<?php include 'footer.php';?>