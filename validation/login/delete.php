<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wp";
$idd = $_POST['iddel'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE  FROM libregister WHERE id='$idd' ";
if($conn->query($sql)==TRUE){
	echo "record successfully deleted";
}
	else{
	echo "error deleting record";
}

?>