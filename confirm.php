<?php
require('config.php');
if(isset($_POST['from']) && isset($_POST['to'])){

    $flighttype=$_POST['type'];
    $class=$_POST['class'];
    $from=$_POST['from'];
    $dest=$_POST["to"];
    $dep=$_POST['departing-date'];
    $ret=$_POST['returning-date'];
    $child=$_POST['children'];
    $adult=$_POST['adult'];
    

}
?>
