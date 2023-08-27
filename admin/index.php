<?php
session_start();
error_reporting(0);
include('function.php');

  if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = mysqli_query($conn, "SELECT * FROM pesoadmin WHERE username='$username' AND password='$password' ");
    $result=mysqli_num_rows($sql);
    if($result>0){
        $row=mysqli_fetch_assoc($sql);
        $_SESSION['login'] = $row['id'];
        header('location:adminIndex.php');
    }else{
        echo 'Invalid Username or Password!';
    }
  } 
?>
<!DOCTYPE html>
<html>
<head>
    <title>
    Admin Login Page
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/sampleStyle.css">
</head> 
<body>
    <div class="form-group">
    <div class="container">
        <!-- <form action="adminLoginProccess.php" method="POST"> -->
        <form method="post" action="">
        <div class="form-row">
        <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <center><img class="img-fluid" src="../assets/img/peso_logo.png">
                <br>
                <h5>PESO Admin Login Page</h5></center>
            </div>
        </div>
            <label for="adminUser">Username:</label>
            <input type="text" class="form-control" name="username">
            <br>
            <label for="adminPass">Password:</label>
            <input type="password" id="inputPassword" name="password" class="form-control" required>
            <br>
            <center><button name="login" id="submit" type="submit" class="btn btn-primary" >Sign in</button></center>
            </form>
        </div>
        </div> 
    </div>
    </div>
</body>
</html>
