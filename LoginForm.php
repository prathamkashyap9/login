<html>
<head>
<title>Login Form</title>
<link rel="stylesheet"type="text/css"href="Login.css">
</head>
<body>
<div class="loginbox">
<img src="image.png" class="image">
<h1><font color="Black"><align=center><b>Login</h1></font></align></b>
<form action="login.php" method="post">
<?php
if(isset($_GET['error']))
{
?>
<p class="error"><?php echo $_GET['error'];?></p>
<?php
}
?>
<p><font color="Black">Username</p></font>
<input type="text" name="uname" placeholder="Enter Your Username">
<p><font color="Black">Password</p></font>
<input type="Password" name="password" placeholder="Enter Your Password">
<input type="Submit" name=" "value="Login">
<a href="#"><font color="Black"><b>Forgot Your Password</a></font></b><br><br>
<a href="#"><font color="Black"><b>Don't Have An Account? Create Now</a></b>
</div>
</body>
</html>

