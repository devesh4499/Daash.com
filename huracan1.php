<?php
$con=mysqli_connect("localhost","root","","user");
$a="create table huracan(month varchar(20),sales int)";
mysqli_query($con,"$a");
$b="insert into huracan values('2015-01-01', 52)";
mysqli_query($con,"$b");
$b="insert into huracan values('2016-01-01', 28)";
mysqli_query($con,"$b");
$b="insert into huracan values('2017-01-01', 33)";
mysqli_query($con,"$b");

$b="insert into huracan values('2015-02-01', 37)";
mysqli_query($con,"$b");
$b="insert into huracan values('2016-02-01', 26)";
mysqli_query($con,"$b");
$b="insert into huracan values('2017-02-01', 37)";
mysqli_query($con,"$b");

$b="insert into huracan values('2015-03-01', 64)";
mysqli_query($con,"$b");
$b="insert into huracan values('2016-03-01', 48)";
mysqli_query($con,"$b");
$b="insert into huracan values('2017-03-01', 59)";
mysqli_query($con,"$b");

$b="insert into huracan values('2015-04-01',69 )";
mysqli_query($con,"$b");
$b="insert into huracan values('2016-04-01', 61)";
mysqli_query($con,"$b");
$b="insert into huracan values('2017-04-01', 75)";
mysqli_query($con,"$b");

$b="insert into huracan values('2015-05-01', 54)";
mysqli_query($con,"$b");
$b="insert into huracan values('2016-05-01', 51)";
mysqli_query($con,"$b");
$b="insert into huracan values('2017-05-01', 67)";
mysqli_query($con,"$b");

$b="insert into huracan values('2015-06-01',63)";
mysqli_query($con,"$b");
$b="insert into huracan values(2016-06-01, 91)";
mysqli_query($con,"$b");
$b="insert into huracan values('2017-06-01', 72)";
mysqli_query($con,"$b");

$b="insert into huracan values('2015-07-01', 47)";
mysqli_query($con,"$b");
$b="insert into huracan values('2016-07-01', 61)";
mysqli_query($con,"$b");
$b="insert into huracan values('2017-07-01', 57)";
mysqli_query($con,"$b");

$b="insert into huracan values('2015-08-01', 37)";
mysqli_query($con,"$b");
$b="insert into huracan values('2016-08-01', 44)";
mysqli_query($con,"$b");
$b="insert into huracan values('2017-08-01', 32)";
mysqli_query($con,"$b");

$b="insert into huracan values('2015-09-01', 29)";
mysqli_query($con,"$b");
$b="insert into huracan values('2016-09-01', 55)";
mysqli_query($con,"$b");
$b="insert into huracan values('2017-09-01', 65)";
mysqli_query($con,"$b");

$b="insert into huracan values('2015-10-01', 24)";
mysqli_query($con,"$b");
$b="insert into huracan values('2016-10-01', 40)";
mysqli_query($con,"$b");
$b="insert into huracan values('2017-10-01', 80)";
mysqli_query($con,"$b");

$b="insert into huracan values('2015-11-01', 16)";
mysqli_query($con,"$b");
$b="insert into huracan values('2015-11-01', 27)";
mysqli_query($con,"$b");
$b="insert into huracan values('2015-11-01', 46)";
mysqli_query($con,"$b");

$b="insert into huracan values('2015-12-01', 10)";
mysqli_query($con,"$b");
$b="insert into huracan values('2015-12-01', 15)";
mysqli_query($con,"$b");
$b="insert into huracan values('2015-12-01', 38)";
mysqli_query($con,"$b");
