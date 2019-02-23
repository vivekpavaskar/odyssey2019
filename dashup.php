<?php
include "components/head.php";
 if($_SESSION['acctype']=="c")
 {
   include "components/sidenavc.php";
 }
 else if($_SESSION['acctype']=="u")
 {
  include "components/sidenavu.php";
 }
 else{
   include "components/sidenavr.php";
 }
?>
  
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    <?php
    include "components/topnav.php";
    ?>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->

        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">