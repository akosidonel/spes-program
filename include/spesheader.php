<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="../assets/js/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/pStyle.css">    <!-- STYLE -->
   
    <title><?php echo $title;?></title>
  </head>

  <!-- BODY -->
  <body>
      <div class="footer">
      <img src="../assets/img/top-banner.jpg">
      </div>
  <!--NAV BAR-->
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="dashboard.php"><b>Dashboard</b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
              </li>
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