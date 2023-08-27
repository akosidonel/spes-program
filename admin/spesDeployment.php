<?php
session_start();
error_reporting(0);
include('function.php');

 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else { ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SPES Deployment</title>
<link rel="stylesheet" href="../assets/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/bootstrap-4.5.3-dist/css/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/css/adminStyle.css">
 
 </head>
 <body>
       <div class="form-group">
      <div class="footer">
        <img src="../top-banner.jpg">
        </div>
         <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="adminIndex.php"><b>SPES Admin</b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="adminIndex.php">SPES Accounts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminIndex2.php">Admin Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="SPESpending.php">SPES Pending Accounts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="spesDeployment.php">SPES Deployment</a>
              </li>   
              </ul>
              <ul class="nav justify-content-end">
              <li class="nav-item"> 
                <a href="logout.php" class="btn btn-danger my-2">Log Out</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
<div class="form-row">
    <div class="container">
    <div class="content">
    <h3>Deployment</h3>
      <form method="post" action="chkbox.php">
        <div class="row mb-4">
          <div class="col-5">
          <select class="form-control col-md-12" name='dept' required>
              <option >Departments:</option>    
                      <?php 
                      $query=mysqli_query($conn,"SELECT * FROM department"); 
                            while($row=mysqli_fetch_array($query)){?>
                            <option value="<?php echo htmlentities($row['dept_id']);?>"><?php echo htmlentities($row['department_name']);?></option>
                      <?php }?>
            </select>
          </div>
          <div class="col-6">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
          
            <div class="table-responsive">
                  <table id="example" class="display table-striped" style="width:100%; height: 100%;">
                <thead>          
              <tr class="header">
              <th class="text-center"><input type="checkbox" id="checkAll" required></th>
              <th class="text-center">Spes ID#</th>
              <th class="text-center">Surname</th>
              <th class="text-center">First Name</th>
              <th class="text-center">Course</th>
              <th class="text-center">Email</th>
              <th class="text-center">Gender</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = mysqli_query($conn,"SELECT deployment_history.spes_id,deployment_history.dep_status,
            spesaccount.spes_id,spesaccount.surName,spesaccount.firstName,spesaccount.tertDegree,spesaccount.email,spesaccount.gender
            FROM deployment_history JOIN spesaccount ON deployment_history.spes_id=spesaccount.spes_id
            WHERE deployment_history.dep_status=0"); 
            if(mysqli_num_rows($query)>0){ 
              foreach($query as $row) {
                ?>
                <tr>
                  <td ><input type="checkbox" name="checkBoxId[]" value="<?=$row['spes_id'];?>"></td>
                  <td><?= $row['spes_id'];?></td>
                  <td><?= $row['surName'];?></td>
                  <td><?= $row['firstName'];?></td>
                  <td><?= $row['tertDegree'];?></td>
                  <td><?= $row['email'];?></td>
                  <td><?= $row['gender'];?></td>
                </tr>
                <?php
              }
            }
            else {
              ?>
                <tr>
                  <td colspan="7">No pending records</td>
                </tr>
                <?php
            }
            ?>
          </tbody>
          </table>
          </div>
      </form>
    </div>
  </div>
</div>
<script src="../assets/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/1cd75bd212.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
      //check all/uncheck all
      $('#checkAll').change(function(){
          if($(this).is(':checked')){
              $('input[name="checkBoxId[]"]').prop('checked',true);
          }else{
              $('input[name="checkBoxId[]"]').each(function(){
                  $(this).prop('checked',false);
              }); 
            }
        });
        // checkbox click
        $('input[name="checkBoxId[]"]').click(function(){
            var total_checkboxes = $('input[name="checkBoxId[]"]').length;
            var total_checkboxes_checked = $('input[name="checkBoxId[]"]:checked').length;

            if(total_checkboxes_checked == total_checkboxes){
                $('#checkAll').prop('checked',true);
            }else{
                $('#checkAll').prop('checked',false);
            }
        });
    })
</script>
 </body>
</html>

<?php }?>