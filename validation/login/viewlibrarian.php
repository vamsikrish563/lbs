<html>
<head>
<style>
p{
	color:blue;
	text-align:center;
}
</style>
</head>
<body style=font-color:blue;background:lightblue>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,name,email FROM libregister";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<p><table><tr><th>ID</th><th>Name</th><th>EMAIL</th></tr></p>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<strong><tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td> <td>"  . $row["email"]. "</td></tr></strong>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
?>
</body>
</html>