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
	<ul>

	<?php

	if ( mysqli_num_rows($result) > 0) {
		while ( $employee = mysqli_fetch_assoc($result)) {
			?>

			<li><strong>Name: </strong> <?php echo $employee['e_name']; ?></li>
			<li><strong>Email: </strong> <?php echo $employee['e_email']; ?></li>
			<li><strong>Password: </strong> <?php echo $employee['e_pass']; ?></li>
			<li><strong>DOB: </strong> <?php echo $employee['e_dob']; ?></li>

			<?php
		}
	}else{
		echo "O result";
	}

	?>
	</ul>

</body>
</html>