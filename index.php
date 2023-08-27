<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);
include("dbconnection/function.php") ;

  if(isset($_POST['ulogin'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = mysqli_query($conn, "SELECT * FROM spesaccount WHERE username='$username' AND password='$password' ");
    $result=mysqli_num_rows($sql);
    if($result>0){
        $row=mysqli_fetch_assoc($sql);
        $_SESSION['ulogin'] = $row['spes_id'];
        header('location:spes/home.php');
    }else{
        echo 'Invalid Username or Password!';
    }
  } 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
      
      <!-- STYLE -->
      <link rel="stylesheet" href="assets/css/indexStyle.css">


    <title>SPES Home</title>
  </head>
  <body>
      <div class="footer">
        <img src="assets/img/top-banner.jpg">
      </div>

<!--NAV BAR-->
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="index.php"><b>SPES</b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="requirements.php">SPES Qualifications</a>
              </li>
              </ul>
              <ul class="nav justify-content-end">
              <label class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
              </label>
              <li class="nav-item">
                <a href="#" class="nav-link"  data-toggle="modal" data-target="#signinModal">Sign In</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
<!-- Signin Modal -->
        <div class="modal fade" id="signinModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="signinLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="signinlLabel">SPES Sign-in</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <center><img class="img-fluid" src="assets/img/3Logo.png"></center>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="modalFormWrapper">
                        <form method="POST" action="">
                          <div class="form-group">
                            <label for="formUname">Username</label>
                            <input type="text" class="form-control" name="username" id="uname" placeholder="Username">
                          </div>
                          <div class="form-group">
                            <label for="formPass">Password</label>
                            <input type="password" class="form-control" name="password" id="pass" placeholder="Password">
                          </div>
                          <button type="submit" name="ulogin" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

<!--CAROUSEL-->
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="overlay-image" style="background-image: url(assets/img/spes1.jpg)">
      <div class="container">
        <h1><em>Special Program for Employment of Students (SPES)</em></h1>
        <p align="justify">The Special Program for Employment of Students is DOLE’s youth employment-bridging program which aims to provide temporary employment to poor but deserving students, out-of-school youth, and dependents of displaced or would-be displaced workers during summer and/or Christmas vacation or any time of the year to augment the family’s income to help ensure that beneficiaries are able to pursue their education.</p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="overlay-image" style="background-image: url(assets/img/spes2.jpg)">
      <div class="container">
        <h1><em>Special Program for Employment of Students (SPES)</em></h1>
        <p align="justify">The Special Program for Employment of Students is DOLE’s youth employment-bridging program which aims to provide temporary employment to poor but deserving students, out-of-school youth, and dependents of displaced or would-be displaced workers during summer and/or Christmas vacation or any time of the year to augment the family’s income to help ensure that beneficiaries are able to pursue their education.</p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="overlay-image" style="background-image: url(assets/img/spes3.jpg)">
      <div class="container">
        <h1><em>Special Program for Employment of Students (SPES)</em></h1>
        <p align="justify">The Special Program for Employment of Students is DOLE’s youth employment-bridging program which aims to provide temporary employment to poor but deserving students, out-of-school youth, and dependents of displaced or would-be displaced workers during summer and/or Christmas vacation or any time of the year to augment the family’s income to help ensure that beneficiaries are able to pursue their education.</p>
      </div>
    </div>
    </div>
    </div>
    <a href="#myCarousel" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a href="#myCarousel" class="carousel-control-next" role="button" data-slide="next">
        <span class="sr-only">Next</span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
    </div>

    <script src="assets/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>

  </body>
</html>