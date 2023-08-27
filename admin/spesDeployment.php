<?php
session_start();
error_reporting(0);
include('../dbconnection/function.php');

 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else { ?>
<?php $title = 'Spes Deployment'; include('../include/header.php');?>
<div class="form-row">
    <div class="container">
    <div class="content">
    <h3>Deployment</h3>
      <form method="post" action="chkbox.php">
        <div class="row mb-4">
          <div class="col-6">
            <input type="text" class="form-control" placeholder="Search" >
          </div>
          <div class="col-4">
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
                <?php } }
            else {?>
                <tr><td colspan="7">No pending records</td></tr>
                <?php }?>
          </tbody>
          </table>
          </div>
      </form>
    </div>
  </div>
</div>
<?php include('../include/footer.php');?>
</body>
</html>
<?php }?>