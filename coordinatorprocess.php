<?php
include "conn.php";
include ("access.php");
if($db->connect_error)
{
    die("Connection failed : ".$db->connect_error);
}
//$id=$_POST["id"];
$eid=$_POST["eid"];
$ename=$_POST["ename"];
$edesc=$_POST["description"];
$ins=mysqli_query($db,"insert into announcement(eid,ename,description) values('$eid','$ename','$edesc')");
echo "<script>alert('Successfully Posted');
    window.location='login.php';
    </script>";
?>