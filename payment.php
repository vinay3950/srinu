<?php
 
session_start();
 require("common/connection.php");


 $payment_no = $_REQUEST['payment_no'];
 $patient_name = $_REQUEST['patient_name'];
 $doctor_name =$_REQUEST['doctor_name'];
 $payment_date =$_REQUEST['payment_date'];
 $total_amount = $_REQUEST['total_amount'];
 $discount = $_REQUEST['discount'];
 $payment_method =$_REQUEST['payment_method'];
 $payment_status=$_REQUEST['payment_status'];
 
 

 $query = "INSERT INTO `payments`( `payment_no`, `patient_name`, `doctor_name`, `payment_date`, `total_amount`, `discount`,`payment_method`, `payment_status`) 
 VALUES ('$payment_no','$patient_name','$doctor_name','$payment_date','$total_amount','$discount','$payment_method','$payment_status')";

 $result=mysqli_query($conn,$query);

 if($result){
    // echo "jgtfhgf";
  header('Location:all-payments.php');
 }
 else{
    "appointment cancelled";
 }



?>