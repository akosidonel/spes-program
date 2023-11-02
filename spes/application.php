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
$sql = mysqli_query($conn, "SELECT COUNT(dep_status) as total FROM deployment_history WHERE dep_status = 1  ");
$query = mysqli_fetch_array($sql);
$total = $query['total'];
?>
<hr>
<div class="container">
  
<div class="card mb-4">
  <h5 class="card-header">Bulletin board <?php echo htmlentities($total)?></h5>
  <div class="card-body">
      <?php 
       $result = mysqli_query($conn, "SELECT status FROM program WHERE status=1");
       if(mysqli_num_rows($result)){
        foreach($result as $row){
              $spesid = mysqli_query($conn, "SELECT dep_status FROM deployment_history WHERE spes_id = '$id' ");
              $spesStatQuery = mysqli_fetch_array($spesid);  
              $spesStat = $spesStatQuery['dep_status'];
              if($spesStat==''){?>  
                          <p class="card-text">Special Program for Employment of Students (SPES) is now open.<a href="#" class="text-primary"> Click Here to apply</a></p>
                <?php } elseif($spesStat==1) { ?>
                          <p class="card-text text-secondary">Your application is now processing..</p>
                <?php } elseif($spesStat==2) {?>
                          <p class="card-text text-primary">Your application is has been approved...</p>
                <?php } elseif($spesStat==3) {?>
                          <p class="card-text text-success">Congratulations you are Hired..</p>
                <?php } elseif($spesStat==4) {?>
                          <p class="card-text text-danger">End contract..</p>
                <?php } ?>

                <?php } } else{?>
                          <p class="card-text text-secondary">Special Program for Employment of Students (SPES) are now closed / not yet open! please wait for further announcement on our Official Facebook page..</p>
        <?php }?>
  </div>
</div>
<h5>History</h5>
<br>
   <div class="table-responsive-md">
  <table class="table">
  <thead class="bg-success">
    <tr>
      <th >Batch No.</th>
      <th >Program</th>
      <th >Year</th>
      <th >Status</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $history = mysqli_query($conn, "SELECT d.dep_status,d.spes_id,d.batch_number,p.batch_number,p.year,p.program 
    FROM deployment_history AS d JOIN program AS p ON d.batch_number=p.batch_number WHERE d.spes_id = '$id' AND d.dep_status = 4 ");
    if(mysqli_num_rows($history)){
      foreach($history as $rows){?>
            <tr>
                <td><?=$rows['batch_number']?></td>
                <td><?=$rows['year']?></td>
                <td><?=$rows['program']?></td>
                <td><?=$rows['dep_status']?></td>
            </tr>
     <?php } } else {?>
      <tr><td>No data</td></tr>
     <?php } ?>
  </tbody>
  </table>
</div>
</div>
<?php include('../include/spesfooter')?>
</body>
</html>
<?php }?>