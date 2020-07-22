<?php 
require_once('connection.php');

function redirect(){
    header("location : http://khwezilomso.000webhostapp.com/index.php");
}


$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO GetInTouch (Name,Number,Email,Message) VALUES ('$name','$number','$email','$message')";
$result = mysqli_query($conn,$sql);
if($result){
    header("location : http://khwezilomso.000webhostapp.com/index.php");
    redirect();
}else{
    echo "Error :" .$sql;
}

?>