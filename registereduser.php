<?php
include "conn.php";
include "access.php";
$sql="Select id,fname,lname,mobilenum,collegename from users";
$res=$db->query($sql);
include "dashup.php";




?>

    <div class="container-fluid mt--7">
        <!-- Dark table -->
        <div class="row mt-5">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">Card tables</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">User Id</th>
                                    <th scope="col">Participant Name</th>
                                    <th scope="col">Phone No.</th>
                                    <th scope="col">College</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                if($res->num_rows>0){ 
                                foreach ($res as $row){
                                    ?>

                                <tr>
                                    <td scope="row">
                                        <div class="media-body">
                                            <span class="mb-0 text-sm">
                                                <?php echo $row['id'];?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo $row['fname'].$row['lname'];?>
                                    </td>
                                    <td>

                                        <?php echo $row['mobilenum'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['collegename'];?>
                                    </td>

                                </tr>
                                <?php 
                                    }}
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include "dashdown.php";
?>