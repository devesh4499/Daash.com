<?php
$con = mysqli_connect("localhost" ,"root" ,"","User");
session_start(); 
$user = $_POST["username"];
$pass = $_POST["password"];

$_SESSION["a"] = $user;
$a = "select * from information where Name ='$user' ";
$b =mysqli_query($con ,"$a");
while($row = mysqli_fetch_array($b))
{
     if($user =="abhishek" || $user=="ananya" || $user=="devesh" || $user=="shan" && $pass == $row["password"]  )
{
    header('Location: '.'mainwebsite2.php');
}
else if($pass == $row["password"] )
{

header('Location: '. 'mainwebsite1.php');
}
else
{
    header('Location:'.'login.html');
}
}
?>