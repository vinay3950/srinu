<?php
 
session_start();
 require("common/connection.php");


 $first_name = $_REQUEST['first_name'];
 $last_name = $_REQUEST['last_name'];
 $date_of_birth =$_REQUEST['dob'];
 $gender =$_REQUEST['gender'];
 $service = $_REQUEST['service'];
 $date_time = $_REQUEST['date_time'];
 $email =$_REQUEST['email'];
 $phone_number=$_REQUEST['phone_no'];
 $description = $_REQUEST['description'];
 

 $query = "INSERT INTO `appointment`( `first_name`, `last_name`, `dob`, `gender`, `service`, `date_time`,`email`, `phone_no`, `description`) 
 VALUES ('$first_name','$last_name','$date_of_birth','$gender','$service','$date_time','$email','$phone_number','$description')";

 $result=mysqli_query($conn,$query);

 if($result){
    // echo "jgtfhgf";
  header('Location:doctor-schedule.php');
 }
 else{
    "appointment cancelled";
 }



?>