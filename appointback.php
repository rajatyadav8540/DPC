<?php
require 'common.php';
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$time=$_POST['time'];
$date=$_POST['date'];
$problem=$_POST['problem'];
// $name=$_POST['name'];
// echo $name.$address.$email.$contact.$time.$date.$problem;
$qr="INSERT INTO patients(name,contact,address,email,day,time,problem) VALUES ('$name','$contact','$address','$email','$date','$time','$problem')";
$qrr=mysqli_query($con,$qr) or die(mysqli_error($con));

if($qrr){
    echo 'success';
    header("Location:appointmentform.php");
}
else{
    echo "data is not inserted";
}
