<?php
$con = mysqli_connect("localhost" ,"root" ,"","User");
$a = "create database User";
mysqli_query($con , "$a");
$b  = "create table information( Name varchar(30) primary key, Email varchar(30), password varchar(30) , Confirm varchar(30))"; 
mysqli_query($con ,"$b");
$name = $_POST["username"];
$email = $_POST["email"];
$pass = $_POST["password"];
$pass2 = $_POST["password_confirm"];
 $c = "insert into information values('$name','$email','$pass','$pass2')";
mysqli_query($con ,"$c");
$redirect = true;
$redirect_page = 'login.html';
header('Location: '.$redirect_page);
?>