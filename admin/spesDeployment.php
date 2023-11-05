<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');

 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else { ?>
<?php $title = 'Spes Deployment'; include('../include/header.php');?>
<div class="form-row">
    <div class="container">
    <div class="content">
      <?php 
      if(isset($_SESSION['status'])){?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['status']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
    <?php
        unset($_SESSION['status']);}?>
    <h3>Deployment</h3>
    <form action="" method="POST">
    <div class="row mb-4">
      <div class="col-12">
            <input type="text" name="search" id="search" class="form-control" placeholder="Search" >
          </div>
      </form>
    </div>
    <form method="post" action="../view/view.php">
            <div class="table-responsive">
                  <table id="example" class="display table-striped" style="width:100%; height: 100%;">
                <thead>          
              <tr class="header">
              <th class="text-center"><input type="checkbox" id="checkAll"></th>
              <th class="text-center">Spes ID#</th>
              <th class="text-center">Surname</th>
              <th class="text-center">First Name</th>
              <th class="text-center">Course</th>
              <th class="text-center">Email</th>
              <th class="text-center">Gender</th>
            </tr>
          </thead>
          <tbody id="deploymentTable">
                
          </tbody>
          </table>
          </div>
          <div class="row mb-3 mt-4">
            <?php 
             $result=mysqli_query($conn,"SELECT batch_number FROM program WHERE status=1"); 
             $row = mysqli_fetch_array($result);
             $batch_number = $row['batch_number'];
            ?>
          <div class="col-6">
            <input type="hidden" value="<?php echo htmlentities($batch_number)?>" name="batch_number" id="batch_number">
          <label class="col-form-label">Department</label>
          <select class="form-control" name='dept' required>
              <option value="">Select..</option>    
                      <?php 
                      $query=mysqli_query($conn,"SELECT * FROM department"); 
                            while($row=mysqli_fetch_array($query)){?>
                            <option value="<?php echo htmlentities($row['dept_id']);?>"><?php echo htmlentities($row['department_name']);?></option>
                      <?php }?>
            </select>
          </div>
          <div class="col-3">
          <label class="col-form-label">Date From</label>
          <input type="date" name="datefrom" class="form-control" placeholder="Date From" >
          </div>
          <div class="col-3">
          <label class="col-form-label">Date To</label>
          <input type="date" name="dateto" class="form-control" placeholder="Date To" >
          </div>
        </div>
        <div class="row">
        <div class="col-auto">
          <button type="submit" name="submit" class="btn btn-primary"><i class="fa-solid fa-file-export"></i> Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include('../include/footer.php');?>
<script>
  fetchData();
  // to fetch data on deployment table
  function fetchData(){
        var action = 'fetchData';
        $.ajax({
            url: "../view/view.php",
            method: "POST",
            data: {action:action},
            success: function(data){
                $('#deploymentTable').html(data);
            }
        })
    }
</script>
</body>
</html>
<?php }?>