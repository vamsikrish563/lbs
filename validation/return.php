<html>
<head>
<link rel="stylesheet" type="text/css" href="newind.css">
<style>
body{background-image:url("services_img_3.jpg");}
 #txtbox
    {
     font-size:18pt;
     height:40px;
     width:400px;
    }
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    cyan;}
h1{color:cyan;}
</style>
</head>
<ul class="topnav">
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="right"><a href="#about">About</a></li>
</ul>
<h1>RETURN BOOK </h1><br/><br/>
<body style="text-align:center">
<form name="myform2" action="ret.php" method="POST">
<p class="ist">
<input type="text" name="number" id="txtbox" placeholder="Enter Register Number"  style="border:2px solid cyan;
	border-radius:5px; " /><br/><br/></p>
<p class="ist2"><input type="text" name="bookid" id="txtbox" placeholder="Enter Book Id" style="border:2px solid cyan;
	border-radius:5px;" /><br/><br/></p>
<input type="submit" value=" submit " style="font-size:10pt;color:white;
background-color:cyan;border:2px solid #336600;border-radius:5px;padding:15px;<font color='red'>margin-bottom:40px</font>">
</form>

</body>
</html>