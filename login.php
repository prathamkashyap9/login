<?php
session_start();
include "db_conn.php";
if(isset($_POST['uname'])&&isset($_POST['password']))
{
function validate($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
$uname=validate($_POST['uname']);
$pass=validate($_POST['password']);
if(empty($uname))
{
header("Location:LoginForm.php?error=Username is required");
exit();
}
else if(empty($pass))
{
header("Location:LoginForm.php? error=password is required");
exit();
}
$sql="SELECT * FROM logincred WHERE uname='$uname' AND password='$pass'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)===1)
{
$row=mysqli_fetch_assoc($result);
if($row['uname']===$uname&&$row['password']===$pass)
{
    $_SESSION['uname']=$row['uname'];
    $_SESSION['name']=$row['name'];
    $_SESSION['id']=$row['id'];
    header("Location:home.php");
    exit();
}
else
{
    header("Location:LoginForm.php?error=Incorrect Username Or Password");
    exit();
}
}
else
{
    header("Location:LoginForm.php?error=Incorrect Username or Password");
    exit();
}
}

else
{
    header("Location:LoginForm.php");
    exit();
}
?>