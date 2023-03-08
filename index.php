
<?php
session_start();
//echo"<script>alert('welcome')</script>";

if($_POST["t1"]=="abcd"&&$_POST["t2"]=="123")
{
     $_SESSION['user']="Ankit Badhani";
    $con = mysqli_connect("localhost","root","","Petshop_management");
if(!$con)
{ 
die("Could not connect to database");
}
  
 else
 {
     echo"<script>location.href='home.html'</script>";  // Just to see if we can go to home.html directly.
 }
}
else
{
    //echo"<script>alert('invalid username or password')</script>";
    echo"<script>location.href='login.html'</script>";
}

?>

