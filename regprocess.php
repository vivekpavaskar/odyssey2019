<?php
include("conn.php");
if($db->connect_error)
{
    die("Connection failed : ".$db->connect_error);
}
$id=$_POST["id"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mobilenum=$_POST["mobilenum"];
$usn=$_POST["usn"];
$sem=$_POST["sem"];
$collegename=$_POST["collegename"];
$email=$_POST["email"];
$password=$_POST["password"];
$acctype="u";
$ins=mysqli_query($db,"insert into users values('$id','$fname','$lname','$mobilenum','$usn','$sem','$collegename','$email','$password')");
header("location:login.php");
?>