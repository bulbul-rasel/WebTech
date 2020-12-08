<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
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