<?php 

require 'conn.php'; 
$id = $_GET['e_id'];
$sql = "DELETE FROM employees WHERE e_id ='$id";

if (mysqli_query($conn, $sql)) {
			header('location: employees.php')
		}else{
			echo "Error Delete Record: "  . mysqli_error($conn);
		}


?>