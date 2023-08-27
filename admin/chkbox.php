<?php
session_start();
error_reporting(0);
include('function.php');
  if(isset($_POST['submit'])){
    if(isset($_POST['checkBoxId'])){
      foreach($_POST['checkBoxId'] as $checkboxid){
        $dept = mysqli_real_escape_string($conn, $_POST['dept']);
        $deploymentStatus=1;
        $update = mysqli_query($conn, "UPDATE deployment_history SET dept_id='$dept',dep_status='$deploymentStatus' WHERE spes_id ='$checkboxid' ");
      }
    }
  }
  
?>