<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');
 if(!isset($_SESSION['ulogin'])){
   header('Location:index.php');
   exit();
 }else { $id = $_SESSION['ulogin'];?>

  
<?php $title = 'Application'; include('../include/spesheader.php');?>

<?php 
$sql = mysqli_query($conn, "SELECT COUNT(dep_status) as total FROM deployment_history WHERE dep_status = 1");
$query = mysqli_fetch_array($sql);
$total = $query['total'];
?>

<hr>
<div class="container">
  
<div class="card mb-4">
  <h5 class="card-header">Bulletin board</h5>
  <div class="card-body">
        <?php
        $result = mysqli_query($conn, "SELECT status, capacity FROM program");
        if(mysqli_num_rows($result)){
          foreach($result as $row){ 
          if($row['status']==1){
            if($total<=$row['capacity']){
              $spesid = mysqli_query($conn, "SELECT dep_status FROM deployment_history WHERE spes_id = '$id' ");
              $query = mysqli_fetch_array($spesid);  
              $spesStat = $query['dep_status'];
              if($spesStat==''){?>
                <table class="table mt-2">
                        <tr>
                          <th>Program</th>
                          <th></th>
                        </tr>
                          <tbody>
                        <tr>
                            <td> <p class="card-text">Special Program for Employment of Students (SPES) is now open.</p></td>
                            <td><a href="#" class="btn btn-primary">Apply</a></td>
                        </tr>
                        </tbody>
                  </table>
            <?php } else if($spesStat==0) {?>
                  <td>
                    <p class="card-text text-secondary">Your application is now processing..</p>
                  </td>
            <?php } else if($spesStat==1) {?>
                  <td>
                    <p class="card-text text-primary">Your application is ready for deployment soon...</p>
                  </td>
            <?php } else if($spesStat==2) {?>
                  <td>
                    <p class="card-text text-success">You are deployed..</p>
                  </td>
            <?php } } else  {?>
              <tr>
                <td><p class="card-text">Special Program for Employment of Students (SPES) is ongoing. </p><span class="card-text text-danger">No slot is available at this moment</span></td>
              </tr>
            <?php  } } else {?>
            <tr>
              <td><p class="card-text text-danger">Special Program for Employment of Students (SPES) is not yet open! wait for further announcement on our peso official facebook page..</p></td>
            </tr>
          <?php } } }?>
  </div>
</div>
<h5>History</h5>
<br>
   <div class="table-responsive-md">
  <table class="table">
  <thead class="bg-success">
    <tr>
      <th scope="col">Batch No.</th>
      <th scope="col">Program</th>
      <th scope="col">Year</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>YFD-2023AUG</td>
      <td>Special Program for Employment of Students (SPES)</td>
      <td>2023</td>
      <td>Completed</td>
    </tr>
    <tr>
      <td>YFD-2020JUNE</td>
      <td>Special Program for Employment of Students (SPES)</td>
      <td>2020</td>
      <td>Completed</td>
    </tr>
  </tbody>
  </table>
</div>

</div>

<?php include('../include/spesfooter')?>
  
</body>
</html>

<?php }?>