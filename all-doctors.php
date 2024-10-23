<?php

require('components/header.php');
require("common/connection.php");



// Use a prepared statement to prevent SQL injection
$query = "SELECT * FROM `add_doctor`";

$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
?>


        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>All Doctors</h2>
                    <small class="text-muted">Welcome to Swift application</small>
                </div>
                <div class="row clearfix">

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>

                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="body">
                                    <div class="member-card verified">
                                        <div class="thumb-xl member-thumb">
                                            <img src="http://via.placeholder.com/130x130" class="img-thumbnail rounded-circle" alt="profile-image">
                                        </div>

                                        <div class="">
                                            <td><?php echo $row["first_name"] ?>.<?php echo $row["last_name"] ?> </td>
                                            <p class="text-muted"><?php echo $row ['speciality']?><span> <a href="javascript:void(0);" class="text-pink"><?php echo $row ['website_url']?></a> </span></p>
                                        </div>

                                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                        <a href="doctor-profile.php?id=<?php echo $row['id']?>" class="btn btn-raised btn-sm">View Profile</a>
                                        <ul class="social-links list-inline m-t-10">
                                            <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>



                </div>
                <div class="row clearfix">
                    <div class="col-sm-12 text-center">
                        <a href="add-patients.php" class="btn btn-raised g-bg-cyan">Add Doctor</a>
                    </div>
                </div>
            </div>
        </section>
<?php
    }
}


$conn->close();
?>