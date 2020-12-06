<!DOCTYPE html>
<html>
<head>
	<title>Notice Form</title>
</head>
<body>
	<?php
		$noticeError = "";
         

        if($_SERVER["REQUEST_METHOD"] == "POST") 
	  	{
			if(empty($_POST["notice"])) 
			{
				  $noticeError = "Notice is required";
			}
			
			else 
			{
				echo "Notice is: " . $_POST["notice"];
				echo "<br />";
				
			}
		}


	?>


	<div style="display:inline-block;">
    <?php include 'header.php' ?>
    <hr></hr>
	<h1>Update Notice</h1>
    <br />

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<div>
      		<label for="notice"><b>Notice</b></label>
      		<input type="text" placeholder="For Notice" name="notice" style="height: 200px">
      		<span><?php echo $noticeError; ?></span>
    	</div>
    	<br />
		<input type="button" value=" Back " onClick="location.href='http://localhost/bulbul/view/home.php'">

    	<button type="submit">Submit</button>
    	<input type="reset" value="Clear">
    	


    <br />

	</form>

	<div>
		<hr></hr>
    	<?php include 'footer.php' ?>
  	</div>

</body>
</html>