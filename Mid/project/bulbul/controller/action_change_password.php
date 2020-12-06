<!DOCTYPE html>
<html>
<head>
  <title>password change</title>
</head>
<body>

<?php

$user_name  = $email = $password = $repassword = "";
$user_nameErr =$emailErr = $passwordErr = $repasswordErr =  "";

$status = "";

$myfile = fopen("../data/login.txt", "r") or die("Unable to open file!");
while ($line = fgets($myfile)) {
  $words = explode(",",$line);
  $user_name = $words[0];
  $email = $words[1];
  $password = $words[2];
}
fclose($myfile); 

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counter = 0;

    if (!empty($user_name)) {
     $user_name = test_input($user_name);
    }
    else {
      $user_nameErr = "Invalid User Name";
      $counter = $counter + 1;
    }

    if (!empty($email)) {
      $email = test_input($email);
    }
    else {
      $emailErr = "Invalid Email";
      $counter = $counter + 1;
    }

    if(($_POST["old_password"]."\n") == $password){
      if ($_POST["new_password"] == $_POST["new_repassword"]){
      if (isset($_POST["new_password"]) & !empty($_POST["new_password"])) {
        $password = test_input($_POST["new_password"]);
      }
      else {
        $passwordErr = "Invalid Password";
        $counter = $counter + 1;
      }

      if (isset($_POST["new_repassword"]) & !empty($_POST["new_repassword"])) {
        $repassword = test_input($_POST["new_repassword"]);
      }
      else {
        $repasswordErr = "Invalid Password Repeat";
        $counter = $counter + 1;
      }
    }
    else{
      echo "*Repeat same password*";
      $counter = $counter + 1;
    }

    if($counter == 0) {
      $status = "Password changed successfully";
      $user = fopen("../data/login.txt", "w") or die("Unable to open file!");
      fwrite($user, $user_name. ",". $email. ",". $password);
      fwrite($user, "\n");
      fclose($user);
    }
    else {
      $status = "Unable to change";
      $counter = 0;
    }
      
    }
    else{
      echo "Old password doesnot match";
    }

    
  }
  else {
	 $status = "Unable to change";
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 
  echo "<br/>";
  echo $status;
  echo "<br/>";
  echo "<a href='../view/bio.php'>Back</a>";
  echo "<br/>";
  ?>

</body>
</html>
