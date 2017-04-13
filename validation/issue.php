<?php 

$con = mysqli_connect("localhost","root","","library");
$id = $_POST['id'];
$regno = $_POST['regno'];
$date =date("Y-m-d H:i:s");
$statement1 ="insert into issuebook (id,bookname,author) select id,bookname,author from books where id='$id'";
$res1 =mysqli_query($con,$statement1);
if($res1){
$stat = "update issuebook  set regno = '$regno' where id='$id'" ;
$res =mysqli_query($con,$stat);
$stat9 = "update issuebook  set date = '$date' where id='$id'" ;
$res9 =mysqli_query($con,$stat9);
echo $res9;
if($res){
$stat1  = "delete from books where id='$id'";
$res3=mysqli_query($con,$stat1);
}
}
if(!$res)
{
	echo "update failed";
}
else
echo"successfully issued book";
?>