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
   <h2>Job Application</h2>
   <br>


   <div class="table-responsive-md">
  <table class="table">
  <thead class="bg-success">
    <tr>
      <th scope="col">Batch No.</th>
      <th scope="col">Program</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Mark</td>
      <td>Otto</td>
      <td><a href='#'><i class="fa-solid fa-file-pen text-success"></i></a></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jacob</td>
      <td>tdornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
  </table>
</div>

</div>

<?php include('../include/spesfooter')?>
  
</body>
</html>

<?php }?>