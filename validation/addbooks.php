<html>
<head>
<link rel="stylesheet" type="text/css" href="newind.css">
<style>
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    cyan;}
#txtbox
    {
     font-size:18pt;
     height:40px;
     width:400px;
    }
body {background-image:url("services_img_3.jpg");}
h1{color:cyan;}
</style>
</head>
<ul class="topnav">
  <li><a class="active" href="librarysection.html">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="right"><a href="#about">About</a></li>
</ul>
<body style=text-align:center>
<h1>ADD BOOKS</h1>
<form name="myfrm" action="add.php" autocomplete="off" method="POST">

<p class="ist">
<input type="text" name="bookname" id="txtbox" placeholder="Enter the BookName"  style="border:2px solid cyan;
	border-radius:5px; " /><br/><br/></p>
<p class="ist">
<input type="text" name="author" id="txtbox" placeholder="Enter the Author of the book"  style="border:2px solid cyan;
	border-radius:5px; " /><br/><br/></p>
<p class="ist">
<input type="text" name="copies" id="txtbox" placeholder="Enter number of copies"  style="border:2px solid cyan;
	border-radius:5px; " /><br/><br/></p>
<input type="submit" value=" submit " style="font-size:10pt;color:white;
background-color:cyan;border:2px solid #336600;border-radius:5px;padding:15px;<font color='red'>margin-bottom:40px</font>">
</body>
</html>