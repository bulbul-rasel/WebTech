<!DOCTYPE html>
<html lang="en">
<html>
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Employee Details</title>
</head>
<body>
	<div>
		<?php include 'header.php' ?>
    <hr></hr>
	</div>

	<input type=button onClick="location.href='http://localhost/bulbul/view/hireemp.php'" value='Hire Employee'>

	<input type=button onClick="location.href='http://localhost/bulbul/view/removeemp.php'" value='Remove Employee'>

	<input type="button" value=" Back " onClick="location.href='http://localhost/bulbul/view/home.php'">



	<table border cellspacing="30">
		<tr align="center">
			<td colspan="3" style="color: blue;background: gray"> Employee Details </td>
		</tr>	

		<tr>
			<td>Bulbul</td>
			<td>Doctor</td>
			
		</tr>
		<tr>
			<td>Rasel</td> 
			<td>Manager</td>
		</tr>
		<tr>
			<td>Sefali</td> 
			<td>Nurse</td>
		</tr>
		<tr>
			<td>Mithu</td> 
			<td>Nurse</td>
		</tr>
		<tr>
			<td>Sumon</td> 
			<td>Assistant Manager</td>
		</tr>
		<tr>
			<td>Rafiul</td> 
			<td>Doctor</td>
		</tr>
		<tr>
			<td>Sayda</td> 
			<td>Doctor</td>
		</tr>
		<tr>
			<td>Sathi</td> 
			<td>Nurse</td>

		</tr>
		<tr>
			<td>Tania</td> 
			<td>Assistant Doctor</td>
		</tr>
		<tr>
			<td>Jubair</td> 
			<td>Chairmen</td>
		</tr>
	</table>
	<div>
		<hr></hr>
    	<?php include 'footer.php' ?>
  	</div>

</body>
</html>