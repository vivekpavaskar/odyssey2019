<?php
include "access.php";
  include "dashup.php";
?>
<?php 
if(isset($_SESSION['error'])){


?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
          <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
          <span class="alert-inner--text"><strong>Success!</strong> This is a success alert—check it out!</span>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

<?php
}
  include "dashdown.php";
?>