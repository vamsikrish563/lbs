
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,bookname,author,regno FROM issuebook";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>BOOKNAME</th><th>AUTHOR</th><th>REGNO</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["bookname"]. " </td><td>" . $row["author"]. "</td><td>" .$row["regno"]."</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
?>
