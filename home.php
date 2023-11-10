<?php
session_start();
if(isset($_SESSION['id'])&&isset($_SESSION['uname']))
{
?>
<html>
<head>
<title>HOME</title>
<link rel="stylesheet"type="text/css" href="Login.css">
</head>
<body>
<h1>Hello,Pratham Kashyap<?php echo$_SESSION['name'];?></h1>
<a href="logout.php">Logout</a>
</body>
</html>
<?php
}
else
{
header("Location:LoginForm.php");
exit();
}
?>
