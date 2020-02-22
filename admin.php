<?php
session_start();
?>
<html>
<head>
<style>
body
{
    background-image:url(x6_8.jpg);
    }
    a:link
    {
        color:white;
        text-decoration:none;
    }
    a:visited
    {  
        color:white;
     }
    
</style>
</head>
<body>
<h1 style="text-align:right; margin-top:60px; margin-right:190px; color:white;"><?php echo "Name:"." ". $_SESSION["a"]; ?></h1>
<h1 style="text-align:right; margin-top:60px; margin-right: 190px; color:white;"><?php
$con=mysqli_connect("localhost","root","","user");

 $d=$_SESSION['a'];
$b="select * from information where Name='$d' ";
$c=mysqli_query($con,"$b");
while($row = mysqli_fetch_array($c))
{
    echo "<div id='pass'> Password:"." ".$row["password"]."</div>"."<br>"."<br>";

    echo "Email:" ." ". $row["Email"];
    
}

?>
    </h1>


<ul style="color:white; font-size:30px; list-style:none; ">
    <li style="border:5px solid red; width:180px; border-radius:12px; padding:10px; text-align:center; margin-top:-240px;">  Your Profile</li><br><br><br><br><br>
    <li style="border:5px solid red; width:150px; border-radius:12px; padding:10px;text-align:center;"> <a href="admin1.html">Total Sales</a></li><br><br><br><br><br>
    <li style="border:5px solid red; width:150px; border-radius:12px; padding:10px; text-align:center; "> Sales</li>
   
</ul>
</body>
</html>