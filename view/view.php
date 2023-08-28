<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');

if(isset($_POST['action'])){
    // fetch data from deployment history
    if($_POST['action'] =='fetchData'){
        $sql= "SELECT deployment_history.spes_id,deployment_history.dep_status,
        spesaccount.spes_id,spesaccount.surName,spesaccount.firstName,spesaccount.tertDegree,spesaccount.email,spesaccount.gender
        FROM deployment_history JOIN spesaccount ON deployment_history.spes_id=spesaccount.spes_id
        WHERE deployment_history.dep_status=0";
        getData($sql);
    }
    //spes deployment dynamic search
    if($_POST['action'] =='searchRecord'){
        $search = $_POST['search'];
        $sql = "SELECT * FROM spesaccount JOIN deployment_history ON spesaccount.spes_id=deployment_history.spes_id
        WHERE surName LIKE '%$search%' OR firstName LIKE '%$search%' OR tertDegree LIKE '%$search%'
        AND dep_status=0 ORDER BY spesaccount.spes_id DESC";
        getData($sql);
    }
}
//to update deployment table
if(isset($_POST['submit'])){
    if(isset($_POST['checkBoxId'])){
      foreach($_POST['checkBoxId'] as $checkboxid){
        $dept = mysqli_real_escape_string($conn, $_POST['dept']);
        $deploymentStatus=1;
        $update = mysqli_query($conn, "UPDATE deployment_history SET dept_id='$dept',dep_status='$deploymentStatus' WHERE spes_id ='$checkboxid' ");
      }
    }
  }
  //function to output the fetch data to spes deployment table
  function getData($sql){
    include('../dbconnection/dbconnection.php');
    $output="";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        foreach($query as $row){
            $output .= '<tr>
            <td ><input type="checkbox" name="checkBoxId[]" value="'.$row['spes_id'].'"></td>
            <td>'.$row['spes_id'].'</td>
            <td>'.$row['surName'].'</td>
            <td>'.$row['firstName'].'</td>
            <td>'.$row['tertDegree'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['gender'].'</td>
          </tr>'; 
        }
    }else{
        $output="<tr><td colspan='7'>No pending records</td></tr>";
    }
    echo $output;
}