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
<h1>ISSUE BOOK</h1>
<form name="myfrm" action="issue.php" method="POST">
<p class="ist">
<input type="text" name="id" id="txtbox" placeholder="Enter the Id of the book"  style="border:2px solid cyan;
	border-radius:5px; " /><br/><br/></p>
<p class="ist">
<input type="text" name="regno" id="txtbox" placeholder="Enter Registernumber of person"  style="border:2px solid cyan;
	border-radius:5px; " /><br/><br/></p>
<input type="submit" value=" submit " style="font-size:10pt;color:white;
background-color:cyan;border:2px solid #336600;border-radius:5px;padding:15px;<font color='red'>margin-bottom:40px</font>">
</html>