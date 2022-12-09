<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('db','ars');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, db);
if($conn === false){
    die("ERROR: Could not connect".mysqli_connect_error());
}else{
}
/*$selected = mysqli_select_db($link, "airline_reservation")  
or die("Could not select examples");  
$result = mysqli_query($link,"select * from login;");  
$json_response = array();  
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {  
$row_array['id'] = $row['id'];  
$row_array['name'] = $row['name']; 
$row_array['password'] = $row['password']; 
array_push($json_response,$row_array);  
}  
echo json_encode($json_response); 
mysqli_free_result($result);**/
?>