<?php

    if(isset($_POST['login'])){
        include 'config.php';
        include 'auth.php';
        $name=$_POST['name'];
        $password=$_POST['password'];
        $query="SELECT admin_id from admins where admin_name = '$name' and password= '$password'";
        
        $res=mysqli_query($conn, $query);
        if($res){
            header("location:adminpanel.php");

        }else{
            echo "admin not found login again";
            header("Refresh:2; url= adminlogin.html");

        }

    }else{

    }
?>