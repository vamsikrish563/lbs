<?php 

$con = mysqli_connect("localhost","root","","wp");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

$statment = "insert into register (name,email,password,repassword) values ('$name','$email','$password','$repassword')";
$res = mysqli_query($con ,$statment);


echo "Successfullyregisterd";
?>