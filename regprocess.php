<?php
$con=mysqli_connect("localhost","root","","odyssey19");
if($con->connect_error)
{
    die("Connection failed : ".$con->connect_error);
}
$id=$_POST["id"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mobilenum=$_POST["mobilenum"];
$usn=$_POST["usn"];
$sem=$_POST["sem"];
$collegename=$_POST["collegename"];
$email=$_POST["emailid"];
$password=$_POST["password"];
$acctype="u";
$count=mysqli_query($con,"insert into users values('$id','$fname','$lname','$mobilenum','$usn','$sem','$collegename','$email','$password','$acctype')");
?>