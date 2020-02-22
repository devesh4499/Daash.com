<?php
$con=mysqli_connect("localhost","root","","user");
$a=$_POST["selection"];
$b =$_POST["given"];
$c=$_POST["a"];
$q = "select * from $a where month between '$b' and '$c' ";
  $r= mysqli_query($con,"$q");
 while($row = mysqli_fetch_array($r))
 {
     echo $row["month"]." "." "." "." "." "."-"." "." ".$row["sales"]."<br>";
 }
 $t = "select sum(sales) from $a where month between '$b' and '$c' ";
 $u= mysqli_query($con,"$t");
 while($result = mysqli_fetch_array($u))
 {
     echo "total sale of current period is". $result["sum(sales)"]."<br>";
 }

?>
<html>
    <head>
        <style>
            body{
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(222,168,248,1) 0%, rgba(168,222,248,1) 21.8%, rgba(189,250,205,1) 35.6%, rgba(243,250,189,1) 52.9%, rgba(250,227,189,1) 66.8%, rgba(248,172,172,1) 90%, rgba(254,211,252,1) 99.7% );;
            }
            #b1
{
border:none;

height:50px;
background-color:red;
color: #fff;

}

#b1:hover
{
background:#ffc107;

color:#000;
} 
        </style>
    </head>
        <body>
        <a href="mainwebsite2.php"><input type="button" value=" Go back" id="b1"></a>
    </body>

</html>


