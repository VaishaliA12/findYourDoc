<?php 
include "conn.php";
if(isset($_POST["btn-submit"])) {
    $name=$_POST["txt-full-name"];
    $user=$_POST["txt-user"];
    $mobile=$_POST["txt-mobile-number"];
    $age=$_POST["txt-age"];
    $doctor=$_POST["doctors"];
    $date=$_POST["txt-date"];
    $time=$_POST["appointment-time-selection"];
    $fee=250;
    $sql="INSERT INTO appointment(apptname,apptusername,apptmobile,apptage,apptdoctor,apptdate,appttime,apptfee) values('$name','$user',$mobile, $age,'$doctor','$date','$time',$fee)";
if(mysqli_query($conn, $sql)) {
    echo "Appointment added successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  //close connection
  mysqli_close($conn);
?>