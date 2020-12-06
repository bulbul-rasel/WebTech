<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>DB Connect Example</title>
  </head>
  <body>
    <h1>DB Connect Example</h1>

    <?php
     
      $conn1 = new mysqli("localhost", "abcdef", "12345");

      if($conn1->connect_error) {
        die("Connection Failure");
      }
      else {
        echo "Connection Successful";
      }

      echo "<br />";

      $conn2 = mysqli_connect("localhost", "abcdef", "12345");
      if($conn2) {
        echo "Successful";
      }
      else {
        echo "Unsuccessful";
      }
    ?>
  </body>
</html>
<?php 

	$email = $password = $acc = "";
  $emailErr = $passwordErr = $accErr = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $amount = $_POST['credit'];

    $conn = new mysqli("localhost", "root", "", "logindb");

    if($conn->connect_error) {
        die("Connection Failure");
      }
      else {
        $sql = "Select * FROM login WHERE email = '$email' and pass = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        if($row['acc'] > 0  ){
          $new_balance = $row['acc'] + $amount;

          $sql = "UPDATE login SET acc = '$new_balance' WHERE email = '$email'";
          $result = mysqli_query($conn,$sql);
          $_SESSION['acc'] = $new_balance;

          echo "Account credited by '$amount' tk";

        }
        else{
          echo "<br>";
          echo "You entered less than 0";
        }

      }
      $conn -> close();
  }


?>
<?php 

  $email = $password = $acc = "";
  $emailErr = $passwordErr = $accErr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "logindb");

    if($conn->connect_error) {
        die("Connection Failure");
      }
      else {
        echo "Connection Successful";

        $sql = "Select * FROM login WHERE email = '$email' and pass = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        if($row['email'] == $email && $row['pass'] == $password){
          echo "logged in";
          $acc = $row['acc'];

        $_SESSION["email"] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['acc'] = $acc;
        header("Refresh:1;url='../view/home.php'");
        }
        else{
          echo "<br>";
          echo "failed login";
        }

      }
      $conn -> close();
  }


?>
<?php 

  $email = $password = $acc = "";
  $emailErr = $passwordErr = $accErr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $amount = $_POST['debit'];

    echo $amount;
    echo " ";

    $conn = new mysqli("localhost", "root", "", "logindb");

    if($conn->connect_error) {
        die("Connection Failure");
      }
      else {
        $sql = "Select * FROM login WHERE email = '$email' and pass = '$password'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        if($row['acc'] >= $amount ){
          $new_balance = $row['acc'] - $amount;

          $sql = "UPDATE login SET acc = '$new_balance' WHERE email = '$email'";
          $result = mysqli_query($conn,$sql);
          $_SESSION['acc'] = $new_balance;

          echo "Withdrawn";

          header("Refresh:1;url='../view/home.php'");
        }
        else{
          echo "<br>";
          echo "Insufficient amount";
        }

      }
      $conn -> close();
  }


?>
