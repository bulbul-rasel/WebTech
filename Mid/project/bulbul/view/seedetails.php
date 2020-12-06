<!DOCTYPE html>
<html lang="en">
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>see Details</title>
</head>
<body>
	<div>
		<?php include 'header.php' ?>
    <hr></hr>
	</div>

	<input type=button onClick="location.href='http://localhost/bulbul/view/changepic.php'" value='Change Photo'>
	<br> 

	<input type="button" value=" Back " onClick="location.href='http://localhost/bulbul/view/home.php'">



	<table border cellspacing="30">
		<tr align="center">
			<td colspan="3" style="color: blue;background: gray"> Details </td>
		</tr>	

		<tr>
			<td>Name</td>
			<td>:Bulbul</td>
			<td rowspan="6"> <img src="bulbul.jpg"alt="Bio Picture" width="160" height="145"></td>
		</tr>
		<tr>
			<td>Date of Birth</td> 
			<td>:26 March</td>
		</tr>
		<tr>
			<td>Father's Name</td> 
			<td>:Ali Zinnah</td>
		</tr>
		<tr>
			<td>Email</td> 
			<td>:bulbul.rasel7@gmail.com</td>
		</tr>
		<tr>
			<td>Contact No.</td> 
			<td>:0123456789</td>
		</tr>
		<tr>
			<td>Home Town</td> 
			<td>:pabna</td>
		</tr>
		<tr>
			<td>Nationality</td> 
			<td>:Bangladeshi</td>
		</tr>
		<tr>
			<td>Marital Status</td> 
			<td>:UnMarried</td>

		</tr>
		<tr>
			<td>Gender</td> 
			<td>:Male</td>
		</tr>
		<tr>
			<td>Position</td> 
			<td>:Assistant Manager</td>
		</tr>
	</table>
	<div>
		<hr></hr>
    	<?php include 'footer.php' ?>
  	</div>

</body>
</html>