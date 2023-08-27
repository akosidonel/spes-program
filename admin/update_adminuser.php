<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="uuStyle.css">


</head>

<body>

<?php
  include('function.php');
  connectme();
  $id = $_GET['userId'];
  $result = mysql_query("SELECT * FROM pesoadmin where userId='$id'"); 
  $row=mysql_fetch_array($result);

  if(isset($_POST['profileSubmit'])){
    $id = $_POST['userid'];
    $vUname = $_POST['Uname'];
    $vPasss = $_POST['Pass'];
    $vFname = $_POST['Fname'];
    $vPosition = $_POST['Position'];

    $query = "UPDATE pesoadmin SET adminUName='$vUname',adminPass='$vPasss',fullName='$vFname',possition='$vPosition' WHERE userId='$id'";
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
          <input type="text" name="Uname" id="Uname" class="form-control" value="<?php echo $row['adminUName']; ?>">
          <input type="hidden" name="userid" id="userid" value="<?php echo $id; ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <label>Password</label>
          <input type="password" name="Pass" id="Pass" class="form-control" value="<?php echo $row['adminPass']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <label>Full Name</label>
          <input type="text" name="Fname" id="Fname" class="form-control" value="<?php echo $row['fullName']; ?>">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <label>Position</label>
          <input type="text" name="Position" id="Position" class="form-control" value="<?php echo $row['possition']; ?>">
        </div>
      </div>
      <div class="row">
        <h8>&nbsp;</h8>
      </div>
      <div class="row">
        <br>
        <div class="col-auto">
          <input type="submit" class="form-control" name="profileSubmit">
          <button name="discard" id="discard" class="btn" onclick="window.close();">Discard</button>
        </div>
      </div>
    </div>
  </form>
</div>
<!--    </form>-->

<!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
-->
    <script src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>

  </body>
</html>