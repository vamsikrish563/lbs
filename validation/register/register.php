<html>
<head>
<link rel="stylesheet" type="text/css" href="newind.css">
</head>
<ul class="topnav">
  <li><a class="active" href="../index.html">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="right"><a href="#about">About</a></li>
</ul>
<script>
function log()
{
	if(myform.name.value.length<4)
	{
		alert("enter valid username of length atleast 4 characters");
		location.reload();
	}
	if(myform.password.value.length<4)
	{
		alert("enter password with atleast 4 characters or digits");
		location.reload();
	}
}
</script>
<body style="text-align:center;background:lightblue">
<h1>ADMIN REGISTRER PAGE</h1>
<form name="myform" onsubmit="log()" action="insert.php" method="POST" >
<label>Username :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<input type="text" name="name" /><br/><br/>
<label>EmailId :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<input type="email" name="email" /><br/><br/>
<label>password :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<input type="password" name="password" /><br/><br/>
<label>Re-Enter Password :</label>
<input type="password" name="repassword" /><br/><br/>
<input type="submit" onsubmit="log()" name="submit" value="Register Here" /><br/>
</form>
</body>
</html>
