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
      
      <link rel="stylesheet" href="contactStyle.css">


    <title>SPES Home</title>
  </head>
  <body>
      <div class="footer">
        <img src="top-banner.jpg">
      </div>
                <?php
                if(isset($_POST['logout'])){
                    session_destroy();
                    header('location:index.php');
                }
    
                ?>
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
<section>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d341.46560078833113!2d121.02211728765148!3d14.47077313714293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ce50065226d9%3A0x1044592c6073a043!2sCity%20Government%20of%20Para%C3%B1aque%20-%20Barangay%20Operation%20Office!5e0!3m2!1sen!2sph!4v1583749824828!5m2!1sen!2sph" width="100%" height="765" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

 </section>
  <div class="container-fluid">
   <!--  <p>Address: PESO-Parañaque Office, 4th floor, Left Wing</p>
    <p>Cityhall Bldg., Valley I, Barangay San Antonio, Parañaque City</p> -->
    <div class="row">
    <div class="col-sm-6">
      <p>Address: PESO-Parañaque Office, 4th floor, Left Wing</p>
      <p>Cityhall Bldg., Valley I, Barangay San Antonio, Parañaque City</p>
    </div>
    <div class="col-sm-6">
      <p>Contact us @: tel#: 829-6886/771-1078 || email: pesoparanaqueemployment@gmail.com</p>
      <p>Facebook Page: <a href="https://www.facebook.com/pesoparanaque">PESO Paranaque</a></p>
    </div>
    </div>
  </div>

<!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
-->
    <script src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>

  </body>
</html>