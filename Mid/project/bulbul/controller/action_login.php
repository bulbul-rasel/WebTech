<?php
include '../view/header.php'
?>

<?php 

	$user_name = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(empty($_REQUEST["user_name"])){
      echo "*User name Required";
      echo "<br/>";
    }
    if(empty($_REQUEST["password"])){
      echo "*Password Required";
      echo "<br/>";
    }

   	$user_name = $_POST["user_name"];
   	$password = $_POST["password"];

  	$userFound = false;

  	$myfile = fopen("../data/login.txt", "r") or die("Unable to open file!");

      while ($line = fgets($myfile)) {
        $words = explode(",",$line);

        if (strcmp($user_name,$words[2]) == 0 && strcmp($password."\n",$words[3]) == 0 ) {
          $userFound = true;
        }
      }
      fclose($myfile);

    	if($userFound == true) {
    		echo "<p>Login Successfull</p>";

        $_SESSION["user_name"] = $user_name;
        $_SESSION['password'] = $password;

      	echo "<a href='../view/home.php'>Home</a>";
        echo "<br/>";
      }
    	else {
      	echo "<p>Login Unsuccessful</p>";
      	echo "<a href='../index.php'>Try Again!</a>";
      }
  }
?>