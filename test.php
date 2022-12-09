<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'myroot');
    define('DB_PASSWORD', 'root12');
    define('db','airline_reservation');
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, db);
    if($conn === false){
        die("ERROR: Could not connect".mysqli_connect_error());
    }else{
        session_start();
        $username = "user";
        $password = "user123";
        $sql = "SELECT * FROM register WHERE name = '$username' AND password = '$password' ";
        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        $numrows = mysqli_num_rows($result);
        if($numrows > 0){
            echo 'Your in';
        }
        else{ 
            echo 'Your not in';
        }
    }
?>