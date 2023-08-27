<?php
    include("function.php");
    session_start();
    connectme();
    if($_SESSION['login']!==true){
        header('location:index.php');
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
      <link rel="stylesheet" href="indexStyle.css">


    <title>SPES Home</title>
  </head>
  <body>
    <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header('location:index.php');
                }
    
                ?>
      <div class="footer">
        <img src="top-banner.jpg">
      </div>

<!--NAV BAR-->
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="home.php"><b>SPES</b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
              </li>
<!--               <li class="nav-item">
                <a class="nav-link" href="#">Check Application</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="events.html">Events</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Downloadable Forms</a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">            
                      <li><a class="dropdown-item" href="/SPES/SPESforms" download="SPES FORM 2.pdf">SPES FORM 2</a></li>
                      <li><a class="dropdown-item" href="/SPES/SPESforms" download="NSRP.pdf">NSRP</a></li>
                      <li><a class="dropdown-item" href="/SPES/SPESforms" download="PESO AUTHORIZATION LETTER.pdf">PESO AUTHORIZATION LETTER</a></li>
                    </ul>
              </li>
              </ul>
              <ul class="nav justify-content-end">
              <li class="nav-item">
                <!-- <a class="nav-link"  data-toggle="modal" data-target="#signoutModal">Sign Out</a> -->
                <button name="logout" class="btn btn-danger my-2" data-toggle="modal" data-target="#signoutModal">Logout</button>
              </li>
            </ul>
          </div>
        </nav>
      </div>

<!-- Signin Modal -->
        <div class="modal fade" id="signoutModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="signinLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="signinlLabel">Are you sure to sign-out?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="modalFormWrapper">
                        <form action="logout.php" method="POST">
                          <button type="submit" class="btn btn-primary">Confirm</button>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
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
    <div class="overlay-image" style="background-image: url(spes1.jpg)">
      <div class="container">
        <h1><em>Special Program for Employment of Students (SPES)</em></h1>
        <p align="justify">The Special Program for Employment of Students is DOLE’s youth employment-bridging program which aims to provide temporary employment to poor but deserving students, out-of-school youth, and dependents of displaced or would-be displaced workers during summer and/or Christmas vacation or any time of the year to augment the family’s income to help ensure that beneficiaries are able to pursue their education.</p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="overlay-image" style="background-image: url(spes2.jpg)">
      <div class="container">
        <h1><em>Special Program for Employment of Students (SPES)</em></h1>
        <p align="justify">The Special Program for Employment of Students is DOLE’s youth employment-bridging program which aims to provide temporary employment to poor but deserving students, out-of-school youth, and dependents of displaced or would-be displaced workers during summer and/or Christmas vacation or any time of the year to augment the family’s income to help ensure that beneficiaries are able to pursue their education.</p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="overlay-image" style="background-image: url(spes3.jpg)">
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
        <span class="sr-only">Previous</span>
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
    </div>

    <script src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>

  </body>
</html>