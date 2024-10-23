<?php
 
session_start();
 require("common/connection.php");


 $first_name = $_REQUEST['first_name'];
 $last_name = $_REQUEST['last_name'];
 $date_of_birth =$_REQUEST['dob'];
 $gender =$_REQUEST['gender'];
 $speciality = $_REQUEST['speciality'];
 $phone=$_REQUEST['phone'];
 $email =$_REQUEST['email'];
 $website_url = $_REQUEST['website_url'];
 $img_url = $_REQUEST['img_url'];
 $description = $_REQUEST['description'];
 $user_name = $_REQUEST['user_name'];
 $password = $_REQUEST['password'];
 $confirm_password = $_REQUEST['confirm_password'];


 $query = "INSERT INTO `add_doctor`( `first_name`, `last_name`, `dob`, `gender`, `speciality`, `phone`,`email`, `website_url`,`img_url`, `description`, `user_name`, `password`, `confirm_password`) 
 VALUES ('$first_name','$last_name','$date_of_birth','$gender','$speciality','$phone','$email','$website_url','$img_url','$description','$user_name','$password','$confirm_password')";

$result=mysqli_query($conn,$query);

if($result){
   // echo "jgtfhgf";
 header('Location:all-doctors.php');
}
else{
   "appointment cancelled";
}



?>