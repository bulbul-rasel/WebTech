<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>

	<script>
			function validate() {
				var idErr = document.getElementById('id').value;
				var usernameErr = document.getElementById('username').value;
				var passErr = document.getElementById('pass').value;
				var emailErr = document.getElementById('email').value;
				var dobErr = document.getElementById('dob').value;
				console.log(idErr);

				if(idErr == "") {
					document.getElementById('errorMsg').innerHTML = "ID is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}
				else if(usernameErr == "") {
					document.getElementById('errorMsg').innerHTML = "username is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}
				else if(passErr == "") {
					document.getElementById('errorMsg').innerHTML = "password is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				} 
				else if(emailErr == "") {
					document.getElementById('errorMsg').innerHTML = "Email is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				} 
				else if(dobErr == "") {
					document.getElementById('errorMsg').innerHTML = "Date of birth is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				} 
				else{
					return true;
				} 			
			}
		</script>
</head>
<body>
	<form name="jsForm" method="POST" action="/Labtask4/employee.php" onsubmit="return validate()" >
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="e_name" required=""></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="e_email" required=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="e_pass" required=""></td>
			</tr>
			<tr>
				<td>DOB</td>
				<td><input type="dob" name="e_dob" required=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="e_add"></td>
			</tr>

		</table>


	</form>

	<p><a href="employees.php">Employees</a></p>

	<?php  
	if (isset($_POST['e_add'])) {
		$e_name = $_POST['e_name'];
		$e_mail = $_POST['e_mail'];
		$e_pass = $_POST['e_pass'];
		$e_dob = $_POST['e_dob'];

		$sql = "INSERT INTO employee (e_name, e_mail, e_pass, e_dob) VALUES ('$e_name', '$e_mail', 'e_pass', 'e_dob')";

		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		}else{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	?>

</body>
</html>