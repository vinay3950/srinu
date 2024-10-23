<?php

require('components/header.php');

require("common/connection.php");



// Use a prepared statement to prevent SQL injection
$query = "SELECT * FROM `appointment`";;

// Use the correct parameter type - assuming 'id' is an integer

$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
?>


        <section class="content page-calendar">
            <div class="container-fluid ">
                <div class="row ">
                    <div class="col-md-12 col-lg-4 col-xl-3">
                        <div class="card m-t-20">
                            <div class="body">
                                <button type="button" class="btn btn-raised btn-primary btn-sm m-t-0" data-toggle="modal" href="#cal-new-event"> <i class="zmdi zmdi-plus"></i> Events</button>
                                <div class="event-name b-greensea"> The Custom Event #1 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-lightred"> The Custom Event #2 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-amethyst"> The Custom Event #3 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-amethyst"> The Custom Event #4 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-success"> The Custom Event #5 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-lightred"> The Custom Event #6 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-greensea"> The Custom Event #7 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-success"> The Custom Event #8 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-success"> The Custom Event #9 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                                <div class="event-name b-primary"> The Custom Event #10 <a class="text-muted event-remove"><i class="zmdi zmdi-delete"></i></a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-xl-9">
                        <div class="card m-t-20">

                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <h5>Online Appointments</h5>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>first name</th>
                                                <th>last name</th>
                                                <th>Date of birth</th>
                                                <th>Gender</th>
                                                <th>Service</th>
                                                <th>Date & Time</th>
                                                <th>Email</th>
                                                <th>Phone no</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                <td><?php echo $row["id"] ?> </td>
                                                    <td><?php echo $row["first_name"] ?> </td>
                                                    <td><?php echo $row["last_name"] ?> </td>
                                                    <td><?php echo $row["dob"] ?> </td>
                                                    <td><?php echo $row["gender"] ?> </td>
                                                    <td><?php echo $row["service"] ?> </td>
                                                    <td><?php echo $row["date_time"] ?> </td>
                                                    <td><?php echo $row["email"] ?> </td>
                                                    <td><?php echo $row["phone_no"] ?> </td>
                                                    <td><?php echo $row["description"] ?> </td>

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