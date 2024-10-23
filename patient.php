<?php
 
session_start();
 require("common/connection.php");


 $first_name = $_REQUEST['first_name'];
 $last_name = $_REQUEST['last_name'];
 $phone=$_REQUEST['phone'];
 $date_of_birth =$_REQUEST['dob'];
 $age=$_REQUEST['age'];
 $gender =$_REQUEST['gender'];
 $email =$_REQUEST['email'];
 $img_url = $_REQUEST['img_url'];
 $description = $_REQUEST['description'];
 $doctor_name = $_REQUEST['doctor_name'];
 $staff_on_duty = $_REQUEST['staff_on_duty'];
 $ward_no = $_REQUEST['ward_no'];
 $date_time = $_REQUEST['date_time'];

 
 $query = "INSERT INTO `add_patient`( `first_name`, `last_name`,`phone`, `dob`,`age`, `gender`,  `email`, `img_url`, `description`, `doctor_name`, `staff_on_duty`, `ward_no`, `date_time`) 
 VALUES ('$first_name','$last_name','$phone','$date_of_birth','$age','$gender','$email','$img_url','$description','$doctor_name','$staff_on_duty','$ward_no','$date_time')";

$result=mysqli_query($conn,$query);

if($result){
   // echo "jgtfhgf";
 header('Location:all-patients.php');
}
else{
   "no doctor";
}



?>