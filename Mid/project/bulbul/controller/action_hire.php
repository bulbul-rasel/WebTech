<!DOCTYPE html>
<html>
<head>
  <title>Hire Employee</title>
</head>
<body>

<?php

$name = $pos = "";
$nameErr = $possErr = "";

$hire_status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  if (isset($_POST["name"]) & !empty($_POST["name"])) {
    $name = test_input($_POST["name"]);
  }
  else {
    $nameErr = "Invalid User Name";
    $counter = $counter + 1;
  }

  if (isset($_POST["pos"]) & !empty($_POST["pos"])) {
    $pos = test_input($_POST["pos"]);
  }
  else {
    $posErr = "Invalid Position";
    $counter = $counter + 1;
  }

  if($counter == 0) {
    $hire_status = "Hire Successful";

    $user = fopen("../data/hire.txt", "w") or die("Unable to open file!");
    fwrite($user, $name. ",,". $pos. ");
    fwrite($user, "\n");
    fclose($user);
  }
  else {
    $hire_status = "Hiring Failed";
    $counter = 0;
  }
}
else {
  $hire_status = "Hiring Failed";
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
  echo $hire_status;
  echo "<br/>";
  echo "<a href='../view/home.php'>Bio</a>";
  echo "<br/>";
?>

</body>
</html>
