<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>

	<?php
	$id = $_GET['e_id'];
	$sql = "SELECT * FROM employees WHERE e_id='$id'";
	$result = mysqi_query( $conn, $sql);

	?>
	<p><a href="employees.php">Back To Employees</a></p>
	<form action="" method="POST">

	<?php

	if ( mysqli_num_rows($result) > 0) {
		while ( $employee = mysqli_fetch_assoc($result)) {
			?>
			<table>
				<tr>
				<td>Name</td>
				<td><input type="text" name="e_name" value=" <?php echo $employee['e_name']; ?> " required=""></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="e_email"  value=" <?php echo $employee['e_email']; ?> required=""></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="e_pass"  value=" <?php echo $employee['e_pass']; ?> required=""></td>
			</tr>
			<tr>
				<td>DOB</td>
				<td><input type="dob" name="e_dob"  value=" <?php echo $employee['e_dob']; ?> required=""></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="e_update"></td>
			</tr>

			</table>

			<?php
		}
	}else{
		echo "O result";
	}

	?>
	
	</form>

	<?php  
	if (isset($_POST['e_update'])) {
		$e_name = $_POST['e_name'];
		$e_mail = $_POST['e_mail'];
		$e_pass = $_POST['e_pass'];
		$e_dob = $_POST['e_dob'];

		$sql = "UPDATE employees SET e_name='$e_name', e_mail ='$e_mail',e_pass = '$e_pass', e_dob ='$e_dob' WHERE e_id = '$id'";

		if (mysqli_query($conn, $sql)) {
			header('location: employees.php')
		}else{
			echo "Error Update: "  . mysqli_error($conn);
		}

		
	}
	?>
</body>
</html>