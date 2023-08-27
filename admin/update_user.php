<?php
session_start();
error_reporting(0);
include('function.php');

 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else { ?>


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

  $id = $_GET['id'];
  $result = mysqli_query("SELECT * FROM spesaccounts where spes_id='$id'"); 
  $row=mysqli_fetch_array($result);

  if(isset($_POST['profileSubmit'])){
    $id=$_POST['userid'];
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

    $query = "UPDATE spesaccounts SET username='$uName',password='$pass',surName='$sName',firstName='$fName',mName='$mName',status='$stat',gender='$sex',doBirth='$dob',poBirth='$pob',cShip='$cship',gsisBeneficiary='$gsis',relationship='$relation',pAdd='$pAdd',cAdd='$cAdd',mNo='$phone',email='$email',socialAcc='$socialmedia',pStatus='$pstat',fatherName='$father',fCNo='$fcnumber',fStatus='$fpstat',fOccu='$foccupation',fSalary='$fsalary',motherName='$mother',mCNo='$mcnumber',mStatus='$mpstat',mOccu='$moccupation',mSalary='$msalary',elemSName='$eSn',elemDegree='$eDec',elemYearLvl='$eYl',elemDEnd='$eDa',secondSName='$sSm',secondDegree='$sDec',secondYearLvl='$sYl',secondDEnd='$sDa',tertSName='$tSm',tertDegree='$tDec',tertYearLvl='$tYl',tertDEnd='$tDa',tecSName='$tecSm',tecDegree='$tecDec',tecYearLvl='$tecYl',tectDEnd='$tecDa',historySpes='$spesAvail',historyYear='$spesYear',spesID='$spesID' WHERE id='$id'";
  if(mysqli_query($query)){
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
<div class="form-group">
<div class="container">    
    <h1>Update Student Profile</h1>
    <br>
      <form action="update_user.php" method="POST">
        <h6>Personal Information</h6>
        <div class="form-row">
        <div class="col-sm-3">
          <label class="col-form-label" for="sName">Surname:</label>
          <input type="text" class="form-control" name="sName" value="<?php echo $row['surName']; ?>">
        </div>
        <div class="col-sm-3">
          <label class="col-form-label" for="fName">First Name:</label>
          <input type="text" class="form-control" name="fName" value="<?php echo $row['firstName']; ?>">
        </div>
        <div class="col-sm-3">
          <label class="col-form-label" for="mName">Middle Name:</label>
          <input type="text" class="form-control" name="mName" value="<?php echo $row['mName']; ?>">
        </div>
        <input type="hidden" name="userid" id="userid" value="<?php echo $id; ?>">
        <div class="col">
            <label class="col-form-label" for="stat">Status:</label>
            <select name="stat"  class="form-control" value="<?php echo $row['status']; ?>">
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="widow">Widow/er</option>
            <option value="seperated">Seperated</option>
          </select>
        </div>
        <div class="col">
          <label class="col-form-label" for="sex">Gender:</label>
          <select name="sex"  class="form-control" value="<?php echo $row['gender']; ?>">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        </div>
        <div class="form-row">
        <div class="col-sm-3">
          <label class="col-form-label" for="uName">Username:</label>
          <input type="text" class="form-control" name="uName" value="<?php echo $row['username']; ?>">
        </div>
        <div class="col-sm-3">
          <label class="col-form-label" for="pass">Password:</label>
          <input type="password" class="form-control" name="pass" value="<?php echo $row['password']; ?>">
        </div>
        <div class="col">
          <label class="col-form-label" for="dob">Date of Birth:</label>
          <input type="date" class="form-control" name="dob" value="<?php echo $row['doBirth']; ?>">
        </div>
        <div class="col">
          <label class="col-form-label" for="pob">Place of Birth:</label>
          <input type="text" class="form-control" name="pob" value="<?php echo $row['poBirth']; ?>">
        </div>
        </div>
        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="cship">Citizenship:</label>
          <input type="text" class="form-control" name="cship" value="<?php echo $row['cShip']; ?>">
        </div>
        <div class="col">
          <label class="col-form-label" for="gsis">GSIS Beneficiary:</label>
          <input type="text" class="form-control" name="gsis" value="<?php echo $row['gsisBeneficiary']; ?>">
        </div>
        <div class="col">
          <label class="col-form-label" for="relation">Relationship:</label>
          <input type="text" class="form-control" name="relation" value="<?php echo $row['relationship']; ?>">
        </div>
        </div>
        <br><br> 
        <h6>Contact Information</h6>
        <div class="form-row">
        <div class="col-sm-6">
          <label class="col-form-label" for="pAdd">Permanent Address:</label>
          <textarea class="form-control" name="pAdd" value="<?php echo $row['pAdd']; ?>" rows="1" style="background: transparent; font-size: 14px; border: none; border-bottom: 2px solid #000;"></textarea>
        </div>
        <div class="col-sm-6">
          <label class="col-form-label" for="cAdd">Current Address:</label>               
          <textarea class="form-control" name="cAdd" value="<?php echo $row['pAdd']; ?>" rows="1"style="background: transparent; font-size: 14px; border: none; border-bottom: 2px solid #000;"></textarea>
        </div>
        </div>
        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="phone">Mobile No.:</label>
          <input type="text" class="form-control" name="phone" value="<?php echo $row['mNo']; ?>">
        </div>
        <div class="col-sm-4">
          <label class="col-form-label" for="email">Email:</label>
          <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
        </div>
        <div class="col-sm-4">
          <label class="col-form-label" for="socialmedia">Social Media Account:</label>
          <input type="text" class="form-control" name="socialmedia" value="<?php echo $row['socialAcc']; ?>"> 
        </div>
        </div>
        <br><br> 
        <h6>Parents Information</h6>
        <div class="form-row">
        <div class="col-sm-2">
            <label class="col-form-label" for="pstat">Parent status:</label>
            <select name="pstat" class="form-control" value="<?php echo $row['pStatus']; ?>">
            <option value="living">Living Together</option>
            <option value="solo">Solo Parent</option>
            <option value="seperate">Seperated</option>
            </select>
        </div>
        </div>
        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="father">Father's Name:</label>
          <input type="text" class="form-control" name="father" value="<?php echo $row['fatherName']; ?>">
        </div>
        <div class="col-sm">
          <label class="col-form-label" for="fcnumber">Contact #:</label>
          <input type="text" class="form-control" name="fcnumber" value="<?php echo $row['fCNo']; ?>">
        </div>
        <div class="col-sm">
          <label class="col-form-label" for="fpstat">Status:</label>
            <select name="fpstat" class="form-control" value="<?php echo $row['fStatus']; ?>">
            <option value="fnone">-------------------------</option>
            <option value="fpwd">Person With Disability</option>
            <option value="fsenior">Senior Citizen</option>
            <option value="fip">Indigeneous People</option>
            <option value="fdw">Displaced Worker</option>
            </select>
        </div>
        <div class="col">
          <label class="col-form-label" for="foccupation">Occupation:</label>
          <input type="text" class="form-control" name="foccupation" value="<?php echo $row['fOccu']; ?>">
        </div>
        <div class="col">
          <label class="col-form-label" for="fsalary">Salary:</label>
          <input type="text" class="form-control" name="fsalary" value="<?php echo $row['fSalary']; ?>">
        </div>
        </div>
        <br>
        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="mother">Mother's Name:</label>
          <input type="text" class="form-control" name="mother" value="<?php echo $row['motherName']; ?>">
        </div>
        <div class="col-sm">
          <label class="col-form-label" for="mcnumber">Contact #:</label>
          <input type="text" class="form-control" name="mcnumber" value="<?php echo $row['mCNo']; ?>">
        </div>
        <div class="col-sm">
          <label class="col-form-label" for="mpstat">Status:</label>
            <select name="mpstat" class="form-control" value="<?php echo $row['mStatus']; ?>">
            <option value="mnone">-------------------------</option>
            <option value="mpwd">Person With Disability</option>
            <option value="msenior">Senior Citizen</option>
            <option value="mip">Indigeneous People</option>
            <option value="mdw">Displaced Worker</option>
            </select>
        </div>
        <div class="col">
          <label class="col-form-label" for="moccupation">Occupation:</label>
          <input type="text" class="form-control" name="moccupation" value="<?php echo $row['mOccu']; ?>">
        </div>
        <div class="col">
          <label class="col-form-label" for="msalary">Salary:</label>
          <input type="text" class="form-control" name="msalary" value="<?php echo $row['mSalary']; ?>">
        </div>
        </div>
        <br><br>
        <h6>Educational Information</h6>
        <div class="form-row">
        <div class="col-sm-1">
          <label>Elementary:</label>
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="eSn" placeholder="School Name" value="<?php echo $row['elemSName']; ?>">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="eDec" placeholder="Degree Earned/Course" value="<?php echo $row['elemDegree']; ?>">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="eYl" placeholder="Year/Level" value="<?php echo $row['elemYearLvl']; ?>">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="eDa" placeholder="Date attended" value="<?php echo $row['elemDEnd']; ?>">
        </div>
        </div>
        <div class="form-row">
        <div class="col-sm-1">
          <label>Secondary: </label>
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="sSm" placeholder="School Name" value="<?php echo $row['secondSName']; ?>">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="sDec" placeholder="Degree Earned/Course" value="<?php echo $row['secondDegree']; ?>">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="sYl" placeholder="Year/Level" value="<?php echo $row['secondYearLvl']; ?>">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="sDa" placeholder="Date attended" value="<?php echo $row['secondDEnd']; ?>">
        </div>
        </div>
        <div class="form-row">
        <div class="col-sm-1">
          <label>Tertiary : </label>
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="tSm" placeholder="School Name" value="<?php echo $row['tertSName']; ?>">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="tDec" placeholder="Degree Earned/Course" value="<?php echo $row['tertDegree']; ?>">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="tYl" placeholder="Year/Level" value="<?php echo $row['tertYearLvl']; ?>">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="tDa" placeholder="Date attended" value="<?php echo $row['tertDEnd']; ?>">
        </div>
        </div>
        <div class="form-row">
        <div class="col-sm-1">
          <label>Tech-Voc : </label>
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="tecSm" placeholder="School Name" value="<?php echo $row['tecSName']; ?>">
        </div>
        <div class="col-sm">
          <input type="text" class="form-control" name="tecDec" placeholder="Degree Earned/Course" value="<?php echo $row['tecDegree']; ?>">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="tecYl" placeholder="Year/Level" value="<?php echo $row['tecYearLvl']; ?>">   
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="tecDa" placeholder="Date attended" value="<?php echo $row['tectDEnd']; ?>">
        </div>
        </div>
        <br><br>
        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="spesAvail">History of SPES Availment:</label>
          <select name="spesAvail" class="form-control" value="<?php echo $row['historySpes']; ?>">
          <option value="one">1st Availment</option>
          <option value="two">2nd Availment</option>
          <option value="three">3rd Availment</option>
          <option value="four">4th Availment</option>
          </select>
        </div>
        <div class="col">
          <label class="col-form-label" for="spesYear">Year:</label>
          <input type="text" class="form-control" name="spesYear" value="<?php echo $row['historyYear']; ?>">
        </div>
        <div class="col">
          <label class="col-form-label" for="hspesID">SPES ID No.:</label>
          <input type="text" class="form-control" name="hspesID" value="<?php echo $row['spesID']; ?>">
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
<!--    </form>-->

<!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
-->
    <script src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>

  </body>
</html>

<?php }?>