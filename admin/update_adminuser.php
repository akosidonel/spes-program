<?php
session_start();
error_reporting(0);
include('../dbconnection/function.php');
 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else {?>
<?php $title = 'Update Administrator'; include('../include/header.php');?>
<?php
  $id = $_GET['userId'];
  $result = mysqli_query($conn,"SELECT * FROM pesoadmin where id='$id'"); 
  $row=mysqli_fetch_array($result);

  if(isset($_POST['profileSubmit'])){
    $id = $_POST['userid'];
    $vUname = $_POST['Uname'];
    $vPasss = $_POST['Pass'];
    $vFname = $_POST['Fname'];
    $vPosition = $_POST['Position'];

    $query = "UPDATE pesoadmin SET username='$vUname',password='$vPasss',full_name='$vFname',position='$vPosition' WHERE id='$id'";
    if(mysql_query($query)){
      echo "<script>
          alert('Successfully updated record.');
          window.opener.location.reload();
          window.close();    
        </script>";
      } else {
      echo "<script type='text/javascript'>alert('$message2');</script>";
    }
}
?>
<!--FORM-->
<hr>
<div class="container">
  <form action="update_adminuser.php" method="post" >
    <div class="wrap">
      <div class="row">
        <h3>Update Admin Account</h3>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <label>Username</label>
          <input type="text" name="Uname" id="Uname" class="form-control" value="<?php echo $row['username']; ?>">
          <input type="hidden" name="userid" id="userid" value="<?php echo $id; ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <label>Password</label>
          <input type="password" name="Pass" id="Pass" class="form-control" value="<?php echo $row['password']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <label>Full Name</label>
          <input type="text" name="Fname" id="Fname" class="form-control" value="<?php echo $row['full_name']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <label>Position</label>
          <input type="text" name="Position" id="Position" class="form-control" value="<?php echo $row['position']; ?>">
        </div>
      </div>
      <div class="row">
        <h8>&nbsp;</h8>
      </div>
      <div class="row">
        <br>
        <div class="col-auto mb-3">
          <button type="submit" class="btn btn-success" name="profileSubmit">Submit</button>
          <button name="discard" id="discard" class="btn btn-danger" onclick="window.close();">Discard</button>
        </div>
      </div>
    </div>
  </form>
</div>
<!--    </form>-->
</body>
<?php include('../include/footer.php');?>
</html>
<?php }?>