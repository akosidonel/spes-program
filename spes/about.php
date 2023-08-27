<?php
session_start();
error_reporting(0);
include('../dbconnection/function.php');
 if(!isset($_SESSION['ulogin'])){
   header('Location:index.php');
   exit();
 }else {?>
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
<link rel="stylesheet" href="../assets/css/eventsStyle.css">


    <title>SPES-PESO About</title>
  </head>
  <body>
      <div class="footer">
        <img src="../assets/img/top-banner.jpg">
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

<!--ABOUT PAGE-->
    <!-- <div class="container">
      <div class="row">
        <div class="col-4">
          <div class="box">
            <div class="icon">
                <img src="dole_logo.png">
            </div>
              <label>DOLE NCR</label>
              <p>The Department of Labor & Employment-National Capital Region (DOLE–NCR) is the premier Regional Office responsible for the implementation of policies and programs that promote gainful employment opportunities, develop human resources, protect the welfare and advancement of workers, and maintain harmonious industrial relations between and among the workers and employers in Metro Manila.</p>
          </div>

        </div>
        <div class="col-4">
          <div class="box">
            <div class="icon">
                <img src="peso_logo.png">
            </div>
              <label>PESO</label>
              <p>Is a multi-service facility established to provide employment and information to the job and manpower seekers and constituents of the City Government of Paranaque and DOLE clients. It makes available in one roof of the various employment programs and services to enable all types of clientele avail of such services and/or other specific assistance required.<br><br><br></p>
              <button type="button"><a href="https://www.facebook.com/pesoparanaque">Learn More</a></button>
          </div>
        </div>
        <div class="col-4">
          <div class="box">
            <div class="icon">
                <img src="PC-logo.png">                
            </div>
              <label>Parañaque City</label>
              <p>The City of Parañaque is the model for academic excellence, public health and safety, environmental preservation and good governance, providing equal opportunities for all, in a peaceful and business-friendly atmosphere through a God-centered leadership.<br><br><br><br></p>
              <button type="button"><a href="https://www.paranaquecity.gov.ph/">Learn More</a></button>
          </div>
        </div>
      </div>
    </div> -->
    <hr>
    <div class="container-fluid" id="conbox">
      <div class="row">
      <div class="col-7">
      <article>
      <p>The Department of Labor & Employment-National Capital Region (DOLE - NCR) is the premier Regional Office responsible for the implementation of policies and programs that promote gainful employment opportunities, develop human resources, protect the welfare and advancement of workers, and maintain harmonious industrial relations between and among the workers and employers in Metro Manila.</p>    
      </article>
      </div>
      <div class="col-5">
      <div class="spesIcon">
          <img src="../assets/img/dole_logo.png">
      </div>   
      </div>
    </div>
    </div>

    <hr>
    <div class="container-fluid" id="conbox">
      <div class="row">
      <div class="col-7">
      <article>
      <p>Is a multi-service facility established to provide employment and information to the job and manpower seekers and constituents of the City Government of Paranaque and DOLE clients. It makes available in one roof of the various employment programs and services to enable all types of clientele avail of such services and/or other specific assistance required.</p>    
      </article>
      </div>
      <div class="col-5">
      <div class="spesIcon">
          <img src="../assets/img/peso_logo.png">
      </div>   
      </div>
    </div>
    </div>
        <hr>
    <div class="container-fluid" id="conbox">
      <div class="row">
      <div class="col-7">
      <article>
      <p>The City of Paranaque is the model for academic excellence, public health and safety, environmental preservation and good governance, providing equal opportunities for all, in a peaceful and business-friendly atmosphere through a God-centered leadership.</p>    
      </article>
      </div>
      <div class="col-5">
      <div class="spesIcon">
          <img src="../assets/img/PC-logo.png">
      </div>   
      </div>
    </div>
    </div>
        <hr>
    <div class="container-fluid" id="conbox">
      <div class="row">
      <div class="col-7">
      <article>
      <p>The Special Program for Employment of Students is DOLE's youth employment-bridging program which aims to provide temporary employment to poor but deserving students, out-of-school youth, and dependents of displaced or would-be displaced workers during summer and/or Christmas vacation or any time of the year to augment the family's income to help ensure that beneficiaries are able to pursue their education. City Ordinance No. 14-014 (022) Series of 2013 an Ordinance Creating, Maintaining and Institutionalizing the Public Employment Service Office (PESO) in the City of Parañaque, Defining its Functions, Organizational Structure, and Appropriating Funds Thereof and for other Purposes.</p>    
      </article>
      </div>
      <div class="col-5">
      <div class="spesIcon">
          <img src="../assets/img/spes_logo.png">
      </div>   
      </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
-->
    <script src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>

  </body>
</html>
<?php }?>