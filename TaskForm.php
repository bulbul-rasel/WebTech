<!DOCTYPE html>
<html>
<head>
	<title>Lab Task Form</title>
</head>
<body>
	<?php
	  	$nameError = "";
        $emailError = "";
        $idError = "";
        $cityError = "";
        $stateError = "";
        $countryError = "";
        $genderError = "";

	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
	  	{
			if(empty($_REQUEST["name"])) 
			{
				  $nameError = "Name is required";
			}
			else if(empty($_REQUEST["id"])) 
			{
				  $idError = "ID is required";
			}
			else if(empty($_REQUEST["email"])) 
			{
				  $emailError = "Email is required";
			}
			else if(empty($_REQUEST["city"])) 
			{
				  $cityError = "City is required";
			}
			else if(empty($_REQUEST["state"])) 
			{
				  $stateError = "State is required";
			}
			else if(empty($_REQUEST["country"])) 
			{
				  $countryError = "Country is required";
			}
			else if(empty($_REQUEST["gender"])) 
			{
				  $genderError = "Gender is required";
			}
			else 
			{
				echo "Name is: " . $_REQUEST["name"];
				echo "<br />";
				echo "Email is: " . $_REQUEST["email"];
				echo "<br />";
				echo "ID is: " . $_REQUEST["id"];
				echo "<br />";
				echo "Gender is: " . $_REQUEST["gender"];
				echo "<br />";
				echo "City is: " . $_REQUEST["city"];
				echo "<br />";
				echo "State is: " . $_REQUEST["state"];
				echo "<br />";
				echo "Country is: " . $_REQUEST["country"];
			}
		} 
	?>


	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


	<h4>Student ID</h4>
	<input type="text" name="id" required>
	<br />
	<span><?php echo $idError; ?></span><br />

	<h4>Student Name</h4>
	<input type="text" name="name" required>
	<br />
	<span><?php echo $nameError; ?></span><br />
	
	<h4>Gender</h4>
	<input type="checkbox" value="Male" id="male" name="gender">
	<label for="male">Male</label><br />

	<input type="checkbox" value="Female" id="female" name="gender">
	<label for="female">Female</label><br />
	<span><?php echo $genderError; ?></span><br />
	
	 <h4> Student Email</h4>
	<input type="text" name="email" value="@" required>
	<br />
	<span><?php echo $emailError; ?></span><br />
	<h4>Address</h4>

	<input type="text" name="stadd"><br />
	Street Address<br />

	<input type="text" name="stadd2" ><br />
	Street Line 2 <br />

	<span><?php echo $cityError; ?></span><br />
	<input type="text" name="city" required>
	<span><?php echo $nameError; ?></span><br />
	City<br />

	<input type="text" name="state" required>
	<span><?php echo $stateError; ?></span><br />
	State/Province/Region<br />

	<input type="text" name="zip" required><br />
	Zip/Postal Code<br />
	
	<select name="country" id="country" required>
	<option value="bangladesh">Bangladesh</option>
	<option value="America">America</option>
	<option value="England">England</option>
	<option value="Russia">Russia</option>
	</select><br />
	<label for = "country">Country</label><br />
	<span><?php echo $countryError; ?></span><br />
	<br />
	<input type="Submit">

	</form>






</body>
</html>