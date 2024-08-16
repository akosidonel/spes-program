<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');
$stat=1;

if(isset($_POST['action'])){
    // fetch data from deployment history
    if($_POST['action'] =='fetchData'){
        $sql= "SELECT d.spes_id,d.dep_status,
        s.spes_id,s.surName,s.firstName,s.tertDegree,s.email,s.gender
        FROM deployment_history as d JOIN spesaccount as s ON d.spes_id=s.spes_id
        WHERE d.dep_status=2 ORDER BY s.spes_id ASC LIMIT 30";
        getData($sql);
    }
    //spes deployment dynamic search
    if($_POST['action'] =='searchRecord'){
        $search = $_POST['search'];
        $sql = "SELECT s.firstName,s.surName,s.tertDegree FROM spesaccount as s JOIN deployment_history as d ON s.spes_id=d.spes_id
        WHERE s.surName LIKE '%$search%' OR s.firstName LIKE '%$search%' OR s.tertDegree LIKE '%$search%'
        AND d.dep_status=2 ORDER BY s.spes_id DESC";
        getData($sql);
    }
}
//to update deployment table
if(isset($_POST['submit'])){
    if(isset($_POST['checkBoxId'])){
      foreach($_POST['checkBoxId'] as $checkboxid){
        $dateFrom = mysqli_real_escape_string($conn, $_POST['datefrom']);
        $dateTo = mysqli_real_escape_string($conn, $_POST['dateto']);
        $btchnumber = mysqli_real_escape_string($conn, $_POST['batch_number']);
        $dept = mysqli_real_escape_string($conn, $_POST['dept']);
        $deploymentStatus=4;
        $update = mysqli_query($conn, "UPDATE deployment_history SET dept_id='$dept',dep_status='$deploymentStatus', date_from='$dateFrom', date_to='$dateTo' WHERE spes_id ='$checkboxid' AND batch_number='$btchnumber' ");

                if($update){
                    $_SESSION['status'] = "Deployed Successfully";
                    header('location:../admin/spesDeployment.php');
                }
        $results = mysqli_query($conn, "SELECT no_avail FROM spes_availment WHERE spes_id ='$checkboxid' ");      
        $row=mysqli_fetch_assoc($results);
        $avail = $row['availment']+1;
        mysqli_query($conn, "UPDATE spes_availment SET no_avail ='$avail' WHERE spes_id ='$checkboxid' ");
        
      }
    }
  }
  //function to output the fetch data to spes deployment table
  function getData($sql){
    include('../dbconnection/dbconnection.php');
    $output="";
    $deploymentTable = "SELECT s.spes_id,s.surName,s.firstName,s.tertDegree,s.email,s.gender,d.spes_id,d.dep_status
    FROM spesaccount as s JOIN deployment_history as d ON s.spes_id=d.spes_id WHERE dep_status=2";
    $query = mysqli_query($conn,$deploymentTable);
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

//save spes application
if (isset($_POST['save_app'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $batchNumber = mysqli_real_escape_string($conn, $_POST['batch_number']);
  

    $sql = "INSERT INTO deployment_history (spes_id,batch_number,dep_status) VALUES('$id','$batchNumber','$stat')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $res = [
            'status' => 200,
            'message' => 'Added successfully!.',
        ];
        echo json_encode($res);
        return false;
    } else {
        $res = [
            'status' => 500,
            'message' => 'opps..something went wrong..',
        ];
        echo json_encode($res);
        return false;
    }
}

//save spes program
if (isset($_POST['save_pgram'])) {
    $batchNumber = mysqli_real_escape_string($conn, $_POST['batch_number']);
    $program = mysqli_real_escape_string($conn, $_POST['program']);
    $capacity = mysqli_real_escape_string($conn, $_POST['capacity']);
    $year=date("Y");

    $sql = "INSERT INTO program (batch_number,program,capacity,year,status) VALUES('$batchNumber','$program','$capacity','$year','$stat')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        $res = [
            'status' => 200,
            'message' => 'Added successfully!.',
        ];
        echo json_encode($res);
        return false;
    } else {
        $res = [
            'status' => 500,
            'message' => 'opps..something went wrong..',
        ];
        echo json_encode($res);
        return false;
    }
}