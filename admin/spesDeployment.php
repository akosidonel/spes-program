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
    <h3>Deployment</h3>
    <form action="" method="POST">
    <div class="row mb-4">
      <div class="col-12">
            <input type="text" name="search" id="search" class="form-control" placeholder="Search" >
          </div>
      </form>
    </div>
    <form method="post" action="../view/view.php">
        <div class="row mb-4">
          <div class="col-6">
          <select class="form-control" name='dept' required>
              <option >Departments:</option>    
                      <?php 
                      $query=mysqli_query($conn,"SELECT * FROM department"); 
                            while($row=mysqli_fetch_array($query)){?>
                            <option value="<?php echo htmlentities($row['dept_id']);?>"><?php echo htmlentities($row['department_name']);?></option>
                      <?php }?>
            </select>
          </div>
          <div class="col-2">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
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