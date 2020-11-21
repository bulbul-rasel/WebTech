<!DOCTYPE html>
<html>
<head>
  <title>Edit Bio</title>
</head>
<body>

<?php

$user_name = $email = "";
$user_nameErr  =$emailErr = "";

$update_status = "";

$myfile = fopen("../data/login.txt", "r") or die("Unable to open file!");
  while ($line = fgets($myfile)) {
    $words = explode(",",$line);
    $password = ($words[3]);
  }
  fclose($myfile); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  if (isset($_POST["user_name"]) & !empty($_POST["user_name"])) {
    $user_name = test_input($_POST["user_name"]);
  }
  else {
    $user_nameErr = "Invalid User Name";
    $counter = $counter + 1;
  }

  if (isset($_POST["email"]) & !empty($_POST["email"])) {
    $email = test_input($_POST["email"]);
  }
  else {
    $emailErr = "Invalid Email";
    $counter = $counter + 1;
  }
  if (!empty($password)) {
    $password = test_input($password);
    }
  else {
    $passwordErr = "Invalid Password";
    $counter = $counter + 1;
    }  

  if($counter == 0) {
    $update_status = "Profile edit completed";
    $user = fopen("../data/login.txt", "w") or die("Unable to open file!");
    fwrite($user, $user_name. ",". $email. ",". $password);
    fwrite($user, "\n");
    fclose($user);
  }
  else {
    $update_status = "Edit Failed";
    $counter = 0;
  }
}
else {
	$update_status = "Edit Failed ";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php 
  echo "<br/>";
  echo $update_status;
  echo "<br/>";
  echo "<a href='../view/bio.php'>Back</a>";
  echo "<br/>";
?>

</body>
</html>
