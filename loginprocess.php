<?php
   include("conn.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      if(isset($_POST['email'])){
         $myusername = $_POST['email'];
      }
      
      if(isset($_POST['password'])){
         $mypassword = $_POST['password'];
      }

      $sql = "SELECT id FROM users WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];      
      $count = mysqli_num_rows($result);
      if($count == 1) {
         $_SESSION['email'] = $myusername;         
         header("location: dashboard.php");
      }
      else {
         $_SESSION["ERROR"]="Either your Username or Password is wrong";
         header("location:login.php");
      }
   }
?>