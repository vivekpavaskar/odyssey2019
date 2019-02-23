<?php
include "access.php";
include "conn.php";
if($db->connect_error)
{
    die("Connection failed : ".$db->connect_error);
}
//$id=$_POST["id"];
$eid=$_GET['eid'];
echo $eid;
 $sql="INSERT into registration(uid,eid,teammember,payment)values($_SESSION['id'],$eid,'solo','notconfirm')";
$res=$db->query($sql);
// if($res->num_rows>0){
//     echo "<script>alert('Email already Exists');
//          window.location='reg.php';
//          </script>";
// }
// else{
// if($password==$confpassword){
//     $ins=mysqli_query($db,"insert into users(fname,lname,mobilenum,usn,sem,collegename,email,password,acctype) values('$fname','$lname','$mobilenum','$usn','$sem','$collegename','$email','$password','$acctype')");
//     echo "<script>alert('Register Successfully');
//     window.location='login.php';
//     </script>";
// }
// else{
//     echo "<script>alert('Password not Matching');
//          window.location='reg.php';
//          </script>";
//          }
//         }
?>