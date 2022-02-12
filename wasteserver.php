<?php
/*
session_start();
$username="";
$address="";
$city="";
$state="";
$pincode="";
$userid="";
$aadharno="";
$mobileno="";
$gender="";
$vehicleno="";
$errors=array();
$_SESSION['success']="";
*/

$db= mysqli_connect('localhost', 'root', '', 'waste');
    echo "test";

if(isset($_POST[submit]))
{
    echo "hiiiii";
    $username = mysqli_real_escape_string($db,$_POST["username"]);
 $address = mysqli_real_escape_string($db,$_POST['address']);
 $city = mysqli_real_escape_string($db,$_POST['city']);
 $state = mysqli_real_escape_string($db,$_POST['state']);
 $pincode = mysqli_real_escape_string($db,$_POST['pincode']);
 $userid = mysqli_real_escape_string($db,$_POST['userid']);
 $aadharno = mysqli_real_escape_string($db,$_POST['aadharno']); 
 $mobileno = mysqli_real_escape_string($db,$_POST['mobileno']); 
 $gender = mysqli_real_escape_string($db,$_POST['gender']);
 $vehicleno = mysqli_real_escape_string($db,$_POST['vehicleno']);
    
 if(empty($username)) {array_push($errors,"Username is required");}
if(empty($address)) {array_push($errors,"Address is required");}
 if(empty($city)) {array_push($errors,"City is required");}
 if(empty($state)) {array_push($errors,"State is required");}
 if(empty($pincode)) {array_push($errors,"PIN Code is required");}
 if(empty($userid)) {array_push($errors,"User id is required");}
 if(empty($aadharno)) {array_push($errors,"Aadhar Number is required");}
 if(empty($mobileno)) {array_push($errors,"Mobile Number is required");}
if(empty($gender)) {array_push($errors,"Gender is required");}
    if(empty($vehicleno)) {array_push($errors,"Vehicle No. is required");}
$query="INSERT INTO  driver (username,address,city,state,pincode,userid,aadharno,mobileno,gender,vehicleno)
VALUES('$username','$address','$city','$state','$pincode','$userid','$aadharno','$mobileno','$gender','$vehicleno')";
 mysqli_query($db,$query);
      $_SESSION['success']= "You are successfully registered";
  
  }


?>