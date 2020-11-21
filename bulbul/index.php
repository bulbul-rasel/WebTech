<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>


	<h1>Welcome to Digital Hospital</h1>

</head>
<body >
	<hr/>

	<form method="POST" action="/bulbul/controller/action_login.php" >

		<label>User name</label>
		<br/>
		<input type="text" name="user_name" required>
		<br/>
		<br/>
		<label>Password</label>
		<br/>
		<input type="password" name="password" required>
		<br/><br/>
		<input type="Submit" value=" Log in ">
		<input type="reset" value="Clear">
		<input type="button" onClick="location.href='http://localhost/bulbul/view/signup.php'" name="button" value="Sign Up">
		<br/>

		<div>
    		<?php include 'view/footer.php' ?>
  		</div>


	</form>	


</body>
</html>

