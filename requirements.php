<!doctype html>
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
      <link rel="stylesheet" href="requireStyle.css">


    <title>SPES Home</title>
  </head>
  <body>
      <div class="footer">
        <img src="top-banner.jpg">
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
                <a class="nav-link"  data-toggle="modal" data-target="#signinModal">Sign In</a>
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
                            <center><img class="img-fluid" src="3Logo.png"></center>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <div class="modalFormWrapper">
                        <form action="loginProcess.php" method="POST">
                          <div class="form-group">
                            <label for="formUname">Username</label>
                            <input type="text" class="form-control" name="uname" id="uname" placeholder="Username">
                          </div>
                          <div class="form-group">
                            <label for="formPass">Password</label>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
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
    <div class="overlay-image" style="background-image: url(spes1.jpg)">
      <div class="container">
        <h1><em>Qualifications (SPES)</em></h1>
        <p>1. Grade 12, diploma course up to 3rd to 4th year college but not a graduating diploma course or college student. <br>
           2. 17 - 30 years of age (30 years old prior to the end of SPES period. <br>
           3. Not enrolled in trimester course(s), No OJT, No summer class, and No other activities in conflict with the SPES program/duration. <br>
           4. SPES baby who has no violation on the previous SPES availment. <br>
           5. One member/child per family. <br>
           6. Parañaque City resident - Filipino Citizen <br>
           7. Belongs to indigent family. <br>
           8. Male/Female <br>
           9. With passing general average of the previos year/semester. <br>
          10. No classes (school vacation) at the start of the SPES on April 8, 2021 <br>
          11. Compliant to the required documents.</p> <br>
          <h1><em>If Qualified and accepted</em></h1>
        <p>1. SPES beneficiary and parent(s) or guardian will sign the Employment Contract. <br>
           2. SPES beneficiary will sign the Oath of Undertaking. <br>
           3. Will accomplish SPES Pre-Survey Questionaire prior to the start of the program. <br>
           4. Will accomplish SPES POST-Survey Questionaire after the duration-end of the program. <br>
           5. Will receive two(2) prescribed uniforms (t-shirts). <br>
           6. Will receive one(1) LGU-SPES ID and DOLE-SPES ID <br>
           7. Will sign the terminal report.
        </p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="overlay-image" style="background-image: url(spes2.jpg)">
      <div class="container">
        <h1><em>Qualifications (SPES)</em></h1>
        <p>1. Grade 12, diploma course up to 3rd to 4th year college but not a graduating diploma course or college student. <br>
           2. 17 - 30 years of age (30 years old prior to the end of SPES period. <br>
           3. Not enrolled in trimester course(s), No OJT, No summer class, and No other activities in conflict with the SPES program/duration. <br>
           4. SPES baby who has no violation on the previous SPES availment. <br>
           5. One member/child per family. <br>
           6. Parañaque City resident - Filipino Citizen <br>
           7. Belongs to indigent family. <br>
           8. Male/Female <br>
           9. With passing general average of the previos year/semester. <br>
          10. No classes (school vacation) at the start of the SPES on April 8, 2021 <br>
          11. Compliant to the required documents.</p> <br>
          <h1><em>If Qualified and accepted</em></h1>
        <p>1. SPES beneficiary and parent(s) or guardian will sign the Employment Contract. <br>
           2. SPES beneficiary will sign the Oath of Undertaking. <br>
           3. Will accomplish SPES Pre-Survey Questionaire prior to the start of the program. <br>
           4. Will accomplish SPES POST-Survey Questionaire after the duration-end of the program. <br>
           5. Will receive two(2) prescribed uniforms (t-shirts). <br>
           6. Will receive one(1) LGU-SPES ID and DOLE-SPES ID <br>
           7. Will sign the terminal report.
        </p>
      </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="overlay-image" style="background-image: url(spes3.jpg)">
      <div class="container">
        <h1><em>Qualifications (SPES)</em></h1>
        <p>1. Grade 12, diploma course up to 3rd to 4th year college but not a graduating diploma course or college student. <br>
           2. 17 - 30 years of age (30 years old prior to the end of SPES period. <br>
           3. Not enrolled in trimester course(s), No OJT, No summer class, and No other activities in conflict with the SPES program/duration. <br>
           4. SPES baby who has no violation on the previous SPES availment. <br>
           5. One member/child per family. <br>
           6. Parañaque City resident - Filipino Citizen <br>
           7. Belongs to indigent family. <br>
           8. Male/Female <br>
           9. With passing general average of the previos year/semester. <br>
          10. No classes (school vacation) at the start of the SPES on April 8, 2021 <br>
          11. Compliant to the required documents.</p> <br>
          <h1><em>If Qualified and accepted</em></h1>
        <p>1. SPES beneficiary and parent(s) or guardian will sign the Employment Contract. <br>
           2. SPES beneficiary will sign the Oath of Undertaking. <br>
           3. Will accomplish SPES Pre-Survey Questionaire prior to the start of the program. <br>
           4. Will accomplish SPES POST-Survey Questionaire after the duration-end of the program. <br>
           5. Will receive two(2) prescribed uniforms (t-shirts). <br>
           6. Will receive one(1) LGU-SPES ID and DOLE-SPES ID <br>
           7. Will sign the terminal report.
        </p>
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

<!-- <?php require_once 'loginProcess.php'; ?> -->