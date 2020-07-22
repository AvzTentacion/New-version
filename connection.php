<?php 
$dbServername = "localhost";
$dbUsername = "id13096584_khwezi_12";
$dbPassword = "g99mQ*!d4_Jqiz4";
$dbName = "id13096584_email_khwezi";

$conn  = mysqli_connect("$dbServername","$dbUsername","$dbPassword","$dbName");

if(!$conn){
    echo "Database Connection Fail";
}
?>