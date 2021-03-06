<?php 
	include '../control/DoctorsControls.php';
	$divissions=divission();
?>
<html>
	<head>
		<title>Doctor Registration Form</title>
		<link rel="stylesheet"type="text/css"href="CSS/doctorform.css">
		<link rel="stylesheet"type="text/css"href="CSS/homepage.css">
		<link rel="stylesheet" href="CSS/faq.css">
		<!--divission district thana-->
		<script>
		function divid()
		{
			http=new XMLHttpRequest();
			var search_word=document.getElementById("divission").value;
			http.onreadystatechange=function()
			{
				if (http.readyState==4 && http.status==200) 
				{
					//alert(http.responseText);
					//alert(document.getElementById("divission").value);
					document.getElementById("district").innerHTML=http.responseText;

					
				}
				else if (http.status==404) 
				{
					alert("not found");
				}
			}
			http.open("GET","../control/District.php?sk="+search_word,true);
			http.send();
		}
		function disid()
		{
			http=new XMLHttpRequest();
			var search_word=document.getElementById("district").value;
			http.onreadystatechange=function()
			{
				if (http.readyState==4 && http.status==200) 
				{
					//alert(http.responseText);
					//alert(document.getElementById("district").value);
					document.getElementById("thana").innerHTML=http.responseText;
				}
				else if (http.status==404) 
				{
					alert("not found");
				}
			}
			http.open("GET","../control/Thana.php?tk="+search_word,true);
			http.send();
		}
		</script>
	<!--divission district thana-->
	</head>
	<body>
		<div class="btngrp1">
			<button type="button"name="home"class="button"onclick="window.location='HomePage.php'">Home</button>
			<button name="home"class="button"onclick="window.location='Login.php'">Login</button>
			<div class="dropdown">
				<button type="button" class="dropbtn">Sign up</button>
				<div class="dropdown-content">
					<a href="DoctorRegistration.php">Doctor</a>
					<a href="PatientRegistration.php">Patient</a>
					<a href="NurseRegistration.php">Nurse</a>
				</div>
			</div>
		</div>
		<div class="dregister">
			<h4>Doctor Register Form</h4><hr><br>
			<form method="post" action=""id="dregister">
				<table>
					<tr>
						<td>
							<label>User Id</label><br><br>
						</td>
						<td>
							<input type="text" name="uid"placeholder="Enter User id"id="field" value="<?php echo $uid ?>">
							<label class="errmgs"><?php echo $err_uid ?></label>
							<br><br>
						</td>
					</tr>
					<tr>
						<td>
							<label>User Name</label><br><br>
						</td>
						<td>
							<input type="text" name="uname"placeholder="Enter User name"id="field" value="<?php echo $uname ?>">
							<label class="errmgs"><?php echo $err_uname?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Password</label><br><br>
						</td>
						<td>
							<input type="password" name="pass"placeholder="Enter Password"id="field" value="<?php echo $pass?>">
							<label class="errmgs"><?php echo $err_pass?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Gender</label><br><br>
						</td>
						<td>
							<input type="radio"name="gender"value="Male" class="gender" <?php if($gender=="Male") echo"checked"; ?> > Male &nbsp
							<input type="radio"name="gender"value="Female" class="gender" <?php if($gender=="Female") echo"checked"; ?>> Female 
							<label class="errmgs"><?php echo $err_gender?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Email</label><br><br>
						</td>
						<td>
							<input type="text" name="email"placeholder="example@mail.com"id="field"value="<?php echo $email?>">
							<label class="errmgs"><?php echo $err_email?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Phone Number</label><br><br>
						</td>
						<td>
							<input type="text" name="number"placeholder="01XXXXXXXXX"id="field"value="<?php echo $number?>">
							<label class="errmgs"><?php echo $err_number?></label>
							<br><br>
					</tr>		
					<tr>
						<td>
							<label>Date of Birth</label><br><br>
						</td>
						<td>
							<input type="date" name="dob" value=""id="field" >
							<label class="errmgs"><?php echo $err_dob?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Address</label><br><br>
						</td>
						<td>
							<select name="divission" id="divission" class="address" onchange="divid()">
								<option selected disabled>Divission</option>
								<?php foreach ($divissions as $value) { ?>
									<option value="<?php echo $value['divission'] ?>" ><?php echo $value['divission'] ?></option>
								<?php } ?>
							</select>
							<select name="district" id="district" class="address" onchange="disid()">
								<option selected disabled>District</option>
							</select>
							<select name="thana" id="thana" class="address">
								<option selected disabled>Thana</option>
							</select>
							<label class="errmgs"><?php echo $err_address?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Specialty</label><br><br>
						</td>
						<td>
							<select name="specialty"id="field">
								<option value="">Select Specialty</option>
								<option <?php if($specialty=="Allergy") echo "selected";  ?> value="Allergy" >Allergy</option>
								<option <?php if($specialty=="Anesthesiology") echo "selected";  ?> value="Anesthesiology">Anesthesiology</option>
								<option <?php if($specialty=="Dermatology") echo "selected";  ?> value="Dermatology">Dermatology</option>
								<option <?php if($specialty=="Emergency medicine") echo "selected";  ?> value="Emergency medicine">Emergency medicine</option>
								<option <?php if($specialty=="Medical genetics") echo "selected";  ?> value="Medical genetics">Medical genetics</option>
								<option <?php if($specialty=="Neurology") echo "selected";  ?> value="Neurology">Neurology</option>
							</select>
							<label class="errmgs"><?php echo $err_specialty?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Degree</label><br><br>
						</td>
						<td>
							<input type="text" name="degree"placeholder="Enter Degree"id="field"value="<?php echo $degree?>">
							<label class="errmgs"><?php echo $err_degree?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>BMDCRegno</label><br><br>
						</td>
						<td>
							<input type="text" name="bmdcregno"placeholder="10 digits"id="field"value="<?php echo $bmdcregno?>">
							<label class="errmgs"><?php echo $err_bmdcregno?></label>
							<br><br>
						</td>
					</tr>		
					<tr>
						<td>
							<label>Description</label><br><br>
						</td>
						<td>
							<textarea name="description"placeholder="Message(optional)maxlength=200"id="description" maxlength="200"></textarea>
							<br><br>
						</td>
					</tr>
				</table>
				<!--submit button here -->
				<button name="submit"class="submit">Submit</button>
			</form>	
		</div>
		<?php include 'FAQ.php'; ?>
	</body>
</html>