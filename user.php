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
    #pass{
        text-align:right; margin-top:30px; margin-right:200px; color:white;
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
    #email
    {
        margin-right:150px;
        margin-top:30px;
    }
</style>
</head>
<body>
<h1 style="text-align:right; margin-top:60px; margin-right:320px; color:white;"><?php echo "Name:"." ". $_SESSION["a"]; ?></h1>
<h1 style="text-align:right; margin-top:30px; margin-right: 50px; color:white;"><?php
$con=mysqli_connect("localhost","root","","user");

 $d=$_SESSION['a'];
$b="select * from information where Name='$d' ";
$c=mysqli_query($con,"$b");
while($row = mysqli_fetch_array($c))
{
    echo "<div id='pass'> Password:"." ".$row["password"]."</div>";
    echo "<div id=email> Email:" ." ". $row["Email"]."</div>"."<br>"."<br>";
    
}


?>
    </h1>


<ul style="color:white; font-size:30px; list-style:none; ">
    <li style="border:5px solid red; width:150px; border-radius:12px; padding:10px; margin-top:-150px;">  Your Profile</li><br><br><br><br><br>
   <a href="TxnStatus.php"> <li style="border:5px solid red; width:150px; border-radius:12px; padding:10px; margin-top:20px;"> Past Orders</li> </a>
</ul>
</body>
</html>
