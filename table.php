<?php
$con=mysqli_connect("localhost","root","","user")
$a="create table AventadorS (month varchar(20),sales2015 integer,sales2016 integer,sales2017 integer,sales2018 integer)";
mysqli_query($con,"$a");

