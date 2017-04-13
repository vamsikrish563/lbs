<?php

$con = mysqli_connect("localhost","root","","wp");

$name= $_POST['name'];
$password = $_POST['password'];

$statment = "SELECT id from libregister WHERE name='$name' AND password='$password' ";

$res = mysqli_query($con, $statment);

if($res)
{
	while($arr = mysqli_fetch_array($res))
	{
		echo "Librarian added Successful...";
		exit;
	}
	
}

$row= mysqli_num_rows($res);
if(!$row)
{
	echo "Invalid Login Details";
}


?>