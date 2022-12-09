<?php
session_start();
if(!isset($_SESSION["username"])){
    $username=$_POST['username'];
}
?>