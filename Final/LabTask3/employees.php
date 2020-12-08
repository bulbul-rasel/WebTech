<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>

	<?php

	$sql = "SELECT * FROM employees";
	$result = mysqi_query( $conn, $sql);

	?>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Email</td>
			<td>Password</td>
			<td>DOB</td>
			<td>Details</td>
			<td>Update</td>
			<td>Delete</td>
		</tr>

	<?php

	if ( mysqli_num_rows($result) > 0) {
		while ( $employee = mysqli_fetch_assoc($result)) {
			?>

			<tr>
				<td><?php echo $employee['e_id']; ?></td>
				<td><?php echo $employee['e_name']; ?></td>
				<td><?php echo $employee['e_email']; ?></td>
				<td><?php echo $employee['e_pass']; ?></td>
				<td><?php echo $employee['e_dob']; ?></td>
				<td><a href="details.php?e_id=<?php echo $employee['e_id']; ?>">Details</a></td>
				<td><a href="update.php?e_id=<?php echo $employee['e_id']; ?>">Update</a></td>
				<td><a href="delete.php?e_id=<?php echo $employee['e_id']; ?>">delete</a></td>
			</tr>

			<?php
		}
	}else{
		echo "O result";
	}

	?>
	</table>

</body>
</html>