<?php

require('components/header.php');

require("common/connection.php");



// Use a prepared statement to prevent SQL injection
$query = "SELECT * FROM `payments`";

$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
?>


<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Payments</h2>
            <small class="text-muted">Welcome to Swift application</small>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Hospital Payments</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>payment_no</th>
                                                <th>patient name</th>
                                                <th>Doctor name</th>
                                                <th>payment date</th>
                                                <th>total amount</th>
                                                <th>Discount</th>
                                                <th>method</th>
                                                <th>status</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>

                                                <tr>
                                                <td><?php echo $row["id"] ?> </td>
                                                    <td><?php echo $row["payment_no"] ?> </td>
                                                    <td><?php echo $row["patient_name"] ?> </td>
                                                    <td><?php echo $row["doctor_name"] ?> </td>
                                                    <td><?php echo $row["payment_date"] ?> </td>
                                                    <td><?php echo $row["total_amount"] ?> </td>
                                                    <td><?php echo $row["discount"] ?> </td>
                                                    <td><?php echo $row["payment_method"] ?> </td>
                                                    <td><?php echo $row["payment_status"] ?> </td>
                                                   

                                                </tr>
                                            <?php
                                            }
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    }
}


$conn->close();
?>