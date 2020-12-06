<?php
$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if (isset($_POST['username'])) {
	$uname=$_POST['username'];
	$password=$_POST['password'];

	$sql="select * form loginform where user= '".$uname."'AND pass='".$password."'limit 1";
	$result = mysql_query($sql);
	if (mysql_num_rows($result)==1) {
		echo "Login Successfully";
		exit();
	}
	else{
		echo "Incorect Password";
		exit();
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="POST" action="#"></form>
	<div>
		<form>
			<div class="form_input">
				<input type="text" name="username" placeholder="Enter Your Name"/>
				
			</div>
			<div class="form_input">
				<input type="password" name="password" placeholder="Enter Your Password"/>
				
			</div>
			<input type="submit" name="submit" value="Login" class="btn-login"/>
		</form>
	</div>

</body>
</html>