<?php
$server_name ="localhost";
$username="root";
$password="";
$db="bank";

$conn=mysqli_connect($server_name,$username,$password,$db);
if(mysqli_connect_error()){
    echo "Error connection";
}
?>