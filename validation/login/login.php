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

</style>
</head>
<ul class="topnav">
  <li><a class="active" href="../index.html">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="right"><a href="#about">About</a></li>
</ul>
<h1>ADMIN LOGIN </h1><br/><br/>
<body style="text-align:center">
<form name="myform" action="validation.php"  autocomplete="off" method="POST">
<p class="ist">
<input type="text" name="name" id="txtbox" placeholder="User Name"  style="border:2px solid cyan;
	border-radius:5px; " /><br/><br/></p>
<p class="ist2"><input type="password" name="password" id="txtbox" placeholder="Password" style="border:2px solid cyan;
	border-radius:5px;" /><br/><br/></p>
<input type="submit" value=" submit " style="font-size:10pt;color:white;
background-color:cyan;border:2px solid #336600;border-radius:5px;padding:15px;<font color='red'>margin-bottom:40px</font>">
</form>

</body>
</html>