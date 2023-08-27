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
      
    <link rel="stylesheet" href="assets/css/supStyle.css">


    <title>Sign-up</title>
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
              <!-- <li class="nav-item">
                <a class="nav-link"  data-toggle="modal" data-target="#signinModal">Sign In</a>
              </li> -->
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
                        <form action="home.php" method="POST">
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
        
<!--sign in form-->
<hr>
<div class="form-group">
<div class="container">    
    <h1>Create Profile</h1>
    <br>
      <form action="signup.php" method="POST">
        <h6>Personal Information</h6>
        <div class="form-row">
        <div class="col-sm-3">
          <label class="col-form-label" for="sName">Surname:</label>
          <input type="text" class="form-control" name="sName" required>
        </div>
        <div class="col-sm-3">
          <label class="col-form-label" for="fName">First Name:</label>
          <input type="text" class="form-control" name="fName" required>
        </div>
        <div class="col-sm-3">
          <label class="col-form-label" for="mName">Middle Name:</label>
          <input type="text" class="form-control" name="mName" required>
        </div>
        <div class="col">
            <label class="col-form-label" for="stat">Status:</label>
            <select name="stat" id="stat"  class="form-control">
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="widow">Widow/er</option>
            <option value="seperated">Seperated</option>
          </select>
        </div>
        <div class="col">
          <label class="col-form-label" for="sex">Gender:</label>
          <select name="sex" id="sex"  class="form-control">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        </div>
        <div class="form-row">
        <div class="col-sm-3">
          <label class="col-form-label" for="uName">Username:</label>
          <input type="text" class="form-control" name="uName" required>
        </div>
        <div class="col-sm-3">
          <label class="col-form-label" for="pass">Password:</label>
          <input type="password" class="form-control" name="pass" pattern=".{6,}" title="Six or more characters" required>
        </div>
        <div class="col">
          <label class="col-form-label" for="dob">Date of Birth:</label>
          <input type="date" class="form-control" name="dob" required>
        </div>
        <div class="col">
          <label class="col-form-label" for="pob">Place of Birth:</label>
          <input type="text" class="form-control" name="pob" required>
        </div>
        </div>
        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="cship">Citizenship:</label>
          <input type="text" class="form-control" name="cship" required>
        </div>
        <div class="col">
          <label class="col-form-label" for="gsis">GSIS Beneficiary:</label>
          <input type="text" class="form-control" name="gsis" required>
        </div>
        <div class="col">
          <label class="col-form-label" for="relation">Relationship:</label>
          <input type="text" class="form-control" name="relation" required>
        </div>
        </div>
        <br><br> 
        <h6>Contact Information</h6>
        <div class="form-row">
        <div class="col-sm-6">
          <label class="col-form-label" for="pAdd">Permanent Address:</label>
          <textarea class="form-control" name="pAdd" id="pAdd" rows="1" style="background: transparent; font-size: 14px; border: none; border-bottom: 2px solid #000;"></textarea>
        </div>
        <div class="col-sm-6">
          <label class="col-form-label" for="cAdd">Current Address:</label>               
          <textarea class="form-control" name="cAdd" id="cAdd" rows="1"style="background: transparent; font-size: 14px; border: none; border-bottom: 2px solid #000;"></textarea>
        </div>
        </div>
        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="phone">Mobile No.:</label>
          <input type="text" class="form-control" name="phone" required>
        </div>
        <div class="col-sm-4">
          <label class="col-form-label" for="email">Email:</label>
          <input type="email" class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
        </div>
        <div class="col-sm-4">
          <label class="col-form-label" for="socialmedia">Social Media Account:</label>
          <input type="text" class="form-control" name="socialmedia" required> 
        </div>
        </div>
        <br><br> 
        <h6>Parents Information</h6>
        <div class="form-row">
        <div class="col-sm-2">
            <label class="col-form-label" for="pstat">Parent status:</label>
            <select id="pstat" name="pstat" class="form-control">
            <option value="living">Living Together</option>
            <option value="solo">Solo Parent</option>
            <option value="seperate">Seperated</option>
            </select>
        </div>
        </div>
        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="father">Father's Name:</label>
          <input type="text" class="form-control" name="father" required>
        </div>
        <div class="col-sm">
          <label class="col-form-label" for="fcnumber">Contact #:</label>
          <input type="text" class="form-control" name="fcnumber" required>
        </div>
        <div class="col-sm">
          <label class="col-form-label" for="fpstat">Status:</label>
            <select id="fpstat" name="fpstat" class="form-control">
            <option value="fnone">-------------------------</option>
            <option value="fpwd">Person With Disability</option>
            <option value="fsenior">Senior Citizen</option>
            <option value="fip">Indigeneous People</option>
            <option value="fdw">Displaced Worker</option>
            </select>
        </div>
        <div class="col">
          <label class="col-form-label" for="foccupation">Occupation:</label>
          <input type="text" class="form-control" name="foccupation" required>
        </div>
        <div class="col">
          <label class="col-form-label" for="fsalary">Salary:</label>
          <input type="text" class="form-control" name="fsalary" required>
        </div>
        </div>
        <br>
        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="mother">Mother's Name:</label>
          <input type="text" class="form-control" name="mother" required>
        </div>
        <div class="col-sm">
          <label class="col-form-label" for="mcnumber">Contact #:</label>
          <input type="text" class="form-control" name="mcnumber" required>
        </div>
        <div class="col-sm">
          <label class="col-form-label" for="mpstat">Status:</label>
            <select id="mpstat" name="mpstat" class="form-control">
            <option value="mnone">-------------------------</option>
            <option value="mpwd">Person With Disability</option>
            <option value="msenior">Senior Citizen</option>
            <option value="mip">Indigeneous People</option>
            <option value="mdw">Displaced Worker</option>
            </select>
        </div>
        <div class="col">
          <label class="col-form-label" for="moccupation">Occupation:</label>
          <input type="text" class="form-control" name="moccupation" required>
        </div>
        <div class="col">
          <label class="col-form-label" for="msalary">Salary:</label>
          <input type="text" class="form-control" name="msalary" required>
        </div>
        </div>
        <br><br>
        <h6>Educational Information</h6>
        <div class="form-row">
        <div class="col-sm-1">
          <label>Elementary:</label>
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="eSn" id="eSn" placeholder="School Name">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="eDec" id="eDec" placeholder="Degree Earned/Course">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="eYl" id="eYl" placeholder="Year/Level">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="eDa" id="eDa" placeholder="Date attended">
        </div>
        </div>
        <div class="form-row">
        <div class="col-sm-1">
          <label>Secondary: </label>
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="sSm" id="sSm" placeholder="School Name">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="sDec" id="sDec" placeholder="Degree Earned/Course">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="sYl" id="sYl" placeholder="Year/Level">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="sDa" id="sDa" placeholder="Date attended">
        </div>
        </div>
        <div class="form-row">
        <div class="col-sm-1">
          <label>Tertiary : </label>
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="tSm" id="tSm" placeholder="School Name">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="tDec" id="tDec" placeholder="Degree Earned/Course">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="tYl" id="tYl" placeholder="Year/Level">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="tDa" id="tDa" placeholder="Date attended">
        </div>
        </div>
        <div class="form-row">
        <div class="col-sm-1">
          <label>Tech-Voc : </label>
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="tecSm" id="tecSm" placeholder="School Name">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="tecDec" id="tecDec" placeholder="Degree Earned/Course">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="tecYl" id="tecYl" placeholder="Year/Level">   
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="tecDa" id="tecDa" placeholder="Date attended">
        </div>
        </div>
        <br><br>
        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="spesAvail">History of SPES Availment:</label>
          <select id="spesAvail" name="spesAvail" class="form-control">
          <option value="one">1st Availment</option>
          <option value="two">2nd Availment</option>
          <option value="three">3rd Availment</option>
          <option value="four">4th Availment</option>
          </select>
        </div>
        <div class="col">
          <label class="col-form-label" for="spesYear">Year:</label>
          <input type="text" class="form-control" name="spesYear" id="spesYear">
        </div>
        <div class="col">
          <label class="col-form-label" for="spesID">SPES ID No.:</label>
          <input type="text" class="form-control" name="spesID" id="spesID">
        </div>
        </div>
        <br>
        <div class="form-row">
        <div class="col-5">
        </div>
        <div class="col-auto">
          <input type="submit" class="form-control" name="profileSubmit">
        </div>
        <div class="col-5">
        </div>
        </div>
        </form>

    <script src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    
  </body>
</html>

 <?php
  include('dbconnection/function.php');
  $message1 = "Created Account Successfully!";
  $message2 = "Failed to create account!";

  if(isset($_POST['profileSubmit'])){
    $uName = $_POST['uName'];
    $pass = $_POST['pass'];
    $sName = $_POST['sName'];
    $fName = $_POST['fName'];
    $mName = $_POST['mName'];
    $stat = $_POST['stat'];
    $sex = $_POST['sex'];
    $dob = $_POST['dob'];
    $pob = $_POST['pob'];
    $cship = $_POST['cship'];
    $gsis = $_POST['gsis'];
    $relation = $_POST['relation'];
    $pAdd = $_POST['pAdd'];
    $cAdd = $_POST['cAdd'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $socialmedia = $_POST['socialmedia'];
    $pstat = $_POST['pstat'];
    $father = $_POST['father'];
    $fcnumber = $_POST['fcnumber'];
    $fpstat = $_POST['fpstat'];
    $foccupation = $_POST['foccupation'];
    $fsalary = $_POST['fsalary'];
    $mother = $_POST['mother'];
    $mcnumber = $_POST['mcnumber'];
    $mpstat = $_POST['mpstat'];
    $moccupation = $_POST['moccupation'];
    $msalary = $_POST['msalary'];
    $eSn = $_POST['eSn'];
    $eDec = $_POST['eDec'];
    $eYl = $_POST['eYl'];
    $eDa = $_POST['eDa'];
    $sSm = $_POST['sSm'];
    $sDec = $_POST['sDec'];
    $sYl = $_POST['sYl'];
    $sDa = $_POST['sDa'];
    $tSm = $_POST['tSm'];
    $tDec = $_POST['tDec'];
    $tYl = $_POST['tYl'];
    $tDa = $_POST['tDa'];
    $tecSm = $_POST['tecSm'];
    $tecDec = $_POST['tecDec'];
    $tecYl = $_POST['tecYl'];
    $tecDa = $_POST['tecDa'];
    $spesAvail = $_POST['spesAvail'];
    $spesYear = $_POST['spesYear'];
    $spesID = $_POST['spesID'];

    $query = mysqli_query($conn,"INSERT INTO spesrequest(username,password,surName,firstName,mName,status,gender,doBirth,poBirth,cShip,gsisBeneficiary,relationship,pAdd,cAdd,mNo,email,socialAcc,pStatus,fatherName,fCNo,fStatus,fOccu,fSalary,motherName,mCNo,mStatus,mOccu,mSalary,elemSName,elemDegree,elemYearLvl,elemDEnd,secondSName,secondDegree,secondYearLvl,secondDEnd,tertSName,tertDegree,tertYearLvl,tertDEnd,tecSName,tecDegree,tecYearLvl,tectDEnd,historySpes,historyYear,spesID) VALUES('$uName','$pass','$sName','$fName','$mName','$stat','$sex','$dob','$pob','$cship','$gsis','$relation','$pAdd','$cAdd','$phone','$email','$socialmedia','$pstat','$father','$fcnumber','$fpstat','$foccupation','$fsalary','$mother','$mcnumber','$mpstat','$moccupation','$msalary','$eSn','$eDec','$eYl','$eDa','$sSm','$sDec','$sYl','$sDa','$tSm','$tDec','$tYl','$tDa','$tecSm','$tecDec','$tecYl','$tecDa','$spesAvail','$spesYear','$spesID' ");

  if(mysql_query($query)){
  echo "<script type='text/javascript'>alert('$message1');
     window.location='index.php';
     </script>";
  } 
  echo "<script type='text/javascript'>alert('$message2');</script>";
}
?>