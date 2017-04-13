<?php 
$con = mysqli_connect("localhost","root","","library");

$bookname = $_POST['bookname'];
$author = $_POST['author'];
$copies = $_POST['copies'];
for( $i = 1; $i<=$copies ; $i++){
$statment = "insert into books (bookname,author) values ('$bookname','$author') ";
$res = mysqli_query($con ,$statment);
$statment1 = "insert into totalbooks (bookname,author) values ('$bookname','$author') ";
$res1 = mysqli_query($con ,$statment1);
}
if($res)
{
	header("location:librarysection.html");
	exit;
}
else{
echo "unsucessful query";
$z=1;
sleep(3);
}
if($z){
header("location:librarysection.html");
	exit;

}

?>