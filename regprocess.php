<?php
include("conn.php");
if($db->connect_error)
{
    die("Connection failed : ".$db->connect_error);
}
//$id=$_POST["id"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mobilenum=$_POST["mobilenum"];
$usn=$_POST["usn"];
$sem=$_POST["sem"];
$collegename=$_POST["collegename"];
$email=$_POST["email"];
$password=$_POST["password"];
$confpassword=$_POST["confpassword"];
$acctype="u";
$sql="Select email from users where email='$email'";
$res=$db->query($sql);
if($res->num_rows>0){
    echo "<script>alert('Email already Exists');
         window.location='reg.php';
         </script>";
}
else{
if($password==$confpassword){
    $ins=mysqli_query($db,"insert into users(fname,lname,mobilenum,usn,sem,collegename,email,password,acctype) values('$fname','$lname','$mobilenum','$usn','$sem','$collegename','$email','$password','$acctype')");
    echo "<script>alert('Register Successfully');
    window.location='login.php';
    </script>";
}
else{
    echo "<script>alert('Password not Matching');
         window.location='reg.php';
         </script>";
         }
        }
?>