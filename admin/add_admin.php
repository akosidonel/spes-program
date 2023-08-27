<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="uuStyle.css">

<?php
   include 'connectDb.php';
   session_start();
?>

</head>
<body> 
<div class="form-group">
<div class="container">    
    <h1>Add Admin Account</h1>
      <form action="add_adminuser.php" method="POST">
        <!-- <h6>Personal Information</h6> -->
        <br>
        <div class="form-row">
        <div class="col-sm-3">
          <label class="col-form-label" for="uname">Username:</label>
          <input type="text" class="form-control" name="uname">
        </div>
        <div class="col-sm-3">
          <label class="col-form-label" for="pass">Password:</label>
          <input type="text" class="form-control" name="pass">
        </div>
        <div class="col-sm-3">
          <label class="col-form-label" for="fname">Full Name:</label>
          <input type="text" class="form-control" name="fname">
        </div>
        <div class="col-sm-3">
          <label class="col-form-label" for="pos">Position:</label>
          <input type="text" class="form-control" name="pos">
        </div>
		</div>
        <hr>
        <div class="form-row">
        <div class="col-auto">
          <center><input type="submit" class="form-control" name="profileSubmit">
          <button name="discard" id="discard" class="btn" onclick="window.close();">Discard</button></center>
        </div>
        </form>
    </div>
</div>
</body>
</script>
</html>