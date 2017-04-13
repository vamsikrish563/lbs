<?php 

$con = mysqli_connect("localhost","root","","wp");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

$statment = "insert into libregister(name,email,password,repassword) values ('$name','$email','$password','$repassword')";
$res = mysqli_query($con ,$statment);
header("location:adminsection.html");
exit;
?>