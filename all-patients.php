<?php

require('components/header.php');
require("common/connection.php");



// Use a prepared statement to prevent SQL injection
$query = "SELECT * FROM `add_patient`";

$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
?>

        <section class="content patients">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>All Patients</h2>
                    <small class="text-muted">Welcome to Swift application</small>
                </div>
                <div class="row clearfix">


                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card all-patients">
                                <div class="body">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 text-center m-b-0">
                                            <a href="patient-profile.php?id=<?php echo $row['id']?>" class="p-profile-pix"><img src="http://via.placeholder.com/130x130" alt="user" class="img-thumbnail img-fluid"></a>
                                        </div>
                                        <div class="col-md-8 col-sm-8 m-b-0">
                                            <h5 class="m-b-0"><td><?php echo $row["first_name"] ?>.<?php echo $row["last_name"] ?> </td> <a href="javascript:void(0);" class="edit"><i class="zmdi zmdi-edit"></i></a></h5>
                                             <p><td><?php echo $row["phone"] ?> </td></p>
                                            <address class="m-b-0">
                                                123 Folsom Ave, Suite 100 New York, CADGE 56824<br>
                                                <abbr title="Phone">P:</abbr> (123) 456-7890
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>


                </div>
            </div>
        </section>

<?php
    }
}


$conn->close();
?>