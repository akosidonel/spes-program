<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');
 if(!isset($_SESSION['ulogin'])){
   header('Location:index.php');
   exit();
 }else {?>
  
<?php $title = 'Application'; include('../include/spesheader.php');?>


<hr>
<div class="container">
  
<div class="card mb-4">
  <h5 class="card-header">Application</h5>
  <div class="card-body">
     <table class="table mt-2">
     <tr>
      <th>Program</th>
      <th>Status</th>
     </tr>
      <tbody>
      <tr>
        <td> <p class="card-text">Special Program for Employment of Students (SPES) Batch YFD-2023AUG is now open.</p></td>
        <td><a href="#" class="btn btn-primary">Apply</a></td>
      </tr>
      </tbody>
     </table>
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