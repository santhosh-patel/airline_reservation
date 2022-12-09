<?php
  include 'config.php';
  if($_SERVER["REQUEST_METHOD"] == "POST") {
     $username = $_POST['username'];
     $password = $_POST['password'];
      include 'auth.php';
     $sql = "SELECT user_id FROM user_data WHERE username = '$username' and password = '$password'";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     $count = mysqli_num_rows($result);
     if($count == 1) {
        $_SESSION["myusername"]=$username;
        $_SESSION['login_user'] = $username;
        header("location: main.html");
     }else {
        $error = "Your Login Name or Password is invalid<br><br>";
        echo $error;
        header("location: login.html");
     }
  }else{
   header("location: login.html");
  }
  mysqli_close($conn);
?>