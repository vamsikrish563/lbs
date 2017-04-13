<html>
<head>
<link rel="stylesheet" type="text/css" href="newind.css">
<style>
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    gold;}
#txtbox
    {
     font-size:18pt;
     height:40px;
     width:400px;
    }
body {background-image:url("services_img_3.jpg");}

</style>
</head>
<ul class="topnav">
  <li><a class="active" href="../index.html">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="right"><a href="#about">About</a></li>
</ul>
<body style="text-align:center;">
<h1>DELETE LIBRARIAN </h1><br/><br/>

<form method="POST" autocomplete="off" action="delete.php">
<p class="ist">
<input type="text" name="iddel" id="txtbox" placeholder="Enter Librarian id to delete"  style="border:2px solid cyan;
	border-radius:5px; " /><br/><br/></p>
<input type="submit" value=" submit " style="font-size:10pt;color:white;
background-color:cyan;border:2px solid #336600;border-radius:5px;padding:15px;<font color='red'>margin-bottom:40px</font>">

</form>

</html>