<?php 

$con = mysqli_connect("localhost","root","","library");
$regno = $_POST['number'];
$id = $_POST['bookid'];
$date1 =date("Y-m-d H:i:s");
$statment = "insert into books (select * from totalbooks where id ='$id' )";
$res1 =mysqli_query($con,$statment);
$sta="select date from issuebook  where id='$id'";
$result = $con->query($sta);
if ($result->num_rows > 0) {
     echo "<strong>book issue date :</strong>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
	$prev=date('Y-m-d H:i:s',strtotime($row['date']));
         echo "<tr><td>" . $row["date"].  "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
$theprev=strtotime($prev);
$thedate1=strtotime($date1);
printf("<br/>");
$diff = abs($theprev - $thedate1);
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
printf("<br/>");
echo "<strong>";
echo "years:$years";
echo "<br/>";
echo "months:$months";
echo "<br/>";
echo "days:$days";
echo "</strong>";
if($res1){
$stat = "delete from issuebook  where id='$id'" ;
$res2 =mysqli_query($con,$stat);
}
if($days>10 && $days<30){
echo "<br/>";
echo "<h1>";
echo "collect fine of Rs:100/-";
echo "</h1>";
}
else if($days>30)
{
echo "<br/>";
echo "<h1>";
echo "collect fine of Rs:1000/-";
echo "</h1>";	
}
if(!$res1)
{
	echo "update failed";
}
?>