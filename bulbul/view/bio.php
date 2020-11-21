
<div>
    <?php include 'header.php' ?>
</div>
<hr>

<!DOCTYPE html>
<html>
<head>
	<title>Bio</title>

	<h1>Profile</h1>

</head>
<body>
	<hr>
	<?php

	$myfile = fopen("../data/login.txt", "r") or die("Unable to open file!");

    while ($line = fgets($myfile)) {
    	$words = explode(",",$line);
    	
    	$mail = $words[0];
      	}
    fclose($myfile);

	echo "Name: " . $_SESSION["user_name"];
	echo "<br/>";
	echo "Email: " . $mail;
	echo "<br/>";
	?>

	
	<input type=button onClick="location.href='http://localhost/bulbul/view/editbio.php'" value='Edit Bio'>
	<br>
	<input type=button onClick="location.href='http://localhost/bulbul/view/changePass.php'" value='Change password'>
	<br>
	<br>
	
	<input type=button onClick="location.href='http://localhost/bulbul/view/home.php'" value='Back'>
	<input type=button onClick="location.href='http://localhost/bulbul/index.php'" value='Logout'>



</body>
</html>

<?php include 'footer.php';?>