<?php
$con=mysqli_connect("localhost","root","","user");
$a="create table xyz(month varchar(12), sales int)";
mysqli_query($con,"$a");
$b="insert into xyz values('2015-01-01', 52)";
mysqli_query($con,"$b");
$b="insert into xyz values('2015-02-01', 62)";
mysqli_query($con,"$b");
$b="insert into xyz values('2015-03-01', 58)";
mysqli_query($con,"$b");
$b="insert into xyz values('2016-01-01',78 )";

mysqli_query($con,"$b");
$b="insert into xyz values('2017-03-01', 80)";
mysqli_query($con,"$b");

 
?>