<?php
$username = "";
$errors = array();
include 'config.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phno= $_POST['phno'];
$username = $_POST['username'];
$password_1 = $_POST['password1'];
$password_2 = $_POST['password2'];
if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
}
$query = "SELECT * FROM user_data WHERE Username='$username' LIMIT 1";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
if ($user) {
  if ($user['Username'] === $username) {
    array_push($errors, "Username already exists");
  }
}
if (count($errors) == 0) {
	$password = $password_1;
  $query = "INSERT INTO user_data (name,email,username, password, phno) VALUES('$name','$email','$username','$password','$phno')";
	mysqli_query($conn, $query);
  echo "Account Created. PLease login again.";
  header("Refresh:2; url= login.html");
}
else {
  $arrlength = count($errors);
  for($x = 0; $x < $arrlength; $x++) {
    echo $errors[$x];
    echo "<br>";
    header("Refresh:2; url= register.html");
    }
  }
?>  