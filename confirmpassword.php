<?php
$con=mysqli_connect("localhost","root","","user");
$confirm=$_POST["pass1"];
$b=$_POST["pass2"];
$uname=$_POST["user"];
if($confirm==$b)
{
$c="update information set password='$b' where Name='$uname' ";
mysqli_query($con,"$c");
$d="update information set confirm='$b' where Name='$uname' ";
mysqli_query($con,"$d");
$redirect = true;
$redirect_page = 'login.html';
 header('Location: '.$redirect_page);
}
else
{
 
}


?>
