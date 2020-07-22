<?php 
require_once('connection.php');

$email;

$email = $_POST['email'];

$sql = "INSERT INTO Emails (Email) VALUES ('$email')";
$result = mysqli_query($conn,$sql);
if($result){
    header("location : About.php");
}else{
    echo "Error :" .$sql;
}

?>