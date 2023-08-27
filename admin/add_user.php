<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');

 if(!isset($_SESSION['login'])){
   header('Location:adminLogin.php');
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
<div class="form-group">
<div class="container">    
    <h1>Add SPES Applicant</h1>
      <form action="add_SPES.php" method="POST">
        <!-- <h6>Personal Information</h6> -->
        <br>
        <div class="form-row">
        <div class="col-sm-3">
          <label class="col-form-label" for="sName">Surname:</label>
          <input type="text" class="form-control" name="sName">
        </div>
        <div class="col-sm-3">
          <label class="col-form-label" for="fName">First Name:</label>
          <input type="text" class="form-control" name="fName">
        </div>
        <div class="col-sm-3">
          <label class="col-form-label" for="mName">Middle Name:</label>
          <input type="text" class="form-control" name="mName">
        </div>
        <div class="col-sm-2">
            <label class="col-form-label" for="stat">Status:</label>
            <select name="stat"  class="form-control">
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="widow">Widow/er</option>
            <option value="seperated">Seperated</option>
          </select>
        </div>
        <div class="col-sm-1">
          <label class="col-form-label" for="sex">Gender:</label>
          <select name="sex"  class="form-control">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        </div>

        <div class="form-row">
        <div class="col-sm-3">
          <label class="col-form-label" for="uName">Username:</label>
          <input type="text" class="form-control" name="uName">
        </div>
        <div class="col-sm-3">
          <label class="col-form-label" for="pass">Password:</label>
          <input type="password" class="form-control" name="pass">
        </div>
        <div class="col-sm-3">
          <label class="col-form-label" for="dob">Date of Birth:</label>
          <input type="date" class="form-control" name="dob">
        </div>
        <div class="col-sm-3">
          <label class="col-form-label" for="pob">Place of Birth:</label>
          <input type="text" class="form-control" name="pob">
        </div>
        </div>

        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="cship">Citizenship:</label>
          <input type="text" class="form-control" name="cship">
        </div>
        <div class="col-sm-4">
          <label class="col-form-label" for="gsis">GSIS Beneficiary:</label>
          <input type="text" class="form-control" name="gsis">
        </div>
        <div class="col-sm-4">
          <label class="col-form-label" for="relation">Relationship:</label>
          <input type="text" class="form-control" name="relation">
        </div>
        </div>

        <br><br> 
        <!-- <h6>Contact Information</h6> -->
        <div class="form-row">
        <div class="col-sm-6">
          <label class="col-form-label" for="pAdd">Permanent Address:</label>
          <textarea class="form-control" name="pAdd" rows="1" style="background: transparent; font-size: 14px; border: none; border-bottom: 2px solid #000;"></textarea>
        </div>
        <div class="col-sm-6">
          <label class="col-form-label" for="cAdd">Current Address:</label>               
          <textarea class="form-control" name="cAdd" rows="1"style="background: transparent; font-size: 14px; border: none; border-bottom: 2px solid #000;"></textarea>
        </div>
        </div>

        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="phone">Mobile No.:</label>
          <input type="text" class="form-control" name="phone">
        </div>
        <div class="col-sm-4">
          <label class="col-form-label" for="email">Email:</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="col-sm-4">
          <label class="col-form-label" for="socialmedia">Social Media Account:</label>
          <input type="text" class="form-control" name="socialmedia"> 
        </div>
        </div>

        <br><br> 
        <!-- <h6>Parents Information</h6> -->
        <hr>
        <div class="form-row">
        <div class="col-sm-3">
            <label class="col-form-label" for="pstat">Parent status:</label>
            <select name="pstat" class="form-control">
            <option value="living">Living Together</option>
            <option value="solo">Solo Parent</option>
            <option value="seperate">Seperated</option>
            </select>
        </div>
        </div>
        <hr>
        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="father">Father's Name:</label>
          <input type="text" class="form-control" name="father">
        </div>
        <div class="col-sm-4">
          <label class="col-form-label" for="fcnumber">Contact #:</label>
          <input type="text" class="form-control" name="fcnumber">
        </div>
        <div class="col-sm-4">
          <label class="col-form-label" for="fpstat">Status:</label>
            <select name="fpstat" class="form-control">
            <option value="fnone">-------------------------</option>
            <option value="fpwd">Person With Disability</option>
            <option value="fsenior">Senior Citizen</option>
            <option value="fip">Indigeneous People</option>
            <option value="fdw">Displaced Worker</option>
            </select>
        </div>
        <div class="col-sm-6">
          <label class="col-form-label" for="foccupation">Occupation:</label>
          <input type="text" class="form-control" name="foccupation">
        </div>
        <div class="col-sm-6">
          <label class="col-form-label" for="fsalary">Salary:</label>
          <input type="text" class="form-control" name="fsalary" >
        </div>
        </div>

        <hr>
        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="mother">Mother's Name:</label>
          <input type="text" class="form-control" name="mother">
        </div>
        <div class="col-sm-4">
          <label class="col-form-label" for="mcnumber">Contact #:</label>
          <input type="text" class="form-control" name="mcnumber">
        </div>
        <div class="col-sm-4">
          <label class="col-form-label" for="mpstat">Status:</label>
            <select name="mpstat" class="form-control">
            <option value="mnone">-------------------------</option>
            <option value="mpwd">Person With Disability</option>
            <option value="msenior">Senior Citizen</option>
            <option value="mip">Indigeneous People</option>
            <option value="mdw">Displaced Worker</option>
            </select>
        </div>
        <div class="col-sm-6">
          <label class="col-form-label" for="moccupation">Occupation:</label>
          <input type="text" class="form-control" name="moccupation">
        </div>
        <div class="col-sm-6">
          <label class="col-form-label" for="msalary">Salary:</label>
          <input type="text" class="form-control" name="msalary">
        </div>
        </div>

        <hr>
        <!-- <h6>Educational Information</h6> -->
        <div class="form-row">
        <div class="col-sm-1">
          <label>Elementary:</label>
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="eSn" placeholder="School Name">
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="eDec" placeholder="Degree Earned/Course">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="eYl" placeholder="Year/Level">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="eDa" placeholder="Date attended">
        </div>
        </div>
        <hr>
        <div class="form-row">
        <div class="col-sm-1">
          <label>Secondary: </label>
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="sSm" placeholder="School Name">
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="sDec" placeholder="Degree Earned/Course">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="sYl" placeholder="Year/Level">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="sDa" placeholder="Date attended">
        </div>
        </div>
        <hr>
        <div class="form-row">
        <div class="col-sm-1">
          <label>Tertiary : </label>
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="tSm" placeholder="School Name">
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="tDec" placeholder="Degree Earned/Course">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="tYl" placeholder="Year/Level">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="tDa" placeholder="Date attended">
        </div>
        </div>
        <hr>
        <div class="form-row">
        <div class="col-sm-1">
          <label>Tech-Voc: </label>
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="tecSm" placeholder="School Name">
        </div>
        <div class="col-sm-3">
          <input type="text" class="form-control" name="tecDec" placeholder="Degree Earned/Course">
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="tecYl" placeholder="Year/Level">   
        </div>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="tecDa" placeholder="Date attended">
        </div>
        </div>

        <br><br>
        <div class="form-row">
        <div class="col-sm-4">
          <label class="col-form-label" for="spesAvail">History of SPES Availment:</label>
          <select name="spesAvail" class="form-control">
          <option value="one">1st Availment</option>
          <option value="two">2nd Availment</option>
          <option value="three">3rd Availment</option>
          <option value="four">4th Availment</option>
          </select>
        </div>
        <div class="col-sm-4">
          <label class="col-form-label" for="spesYear">Year:</label>
          <input type="text" class="form-control" name="spesYear">
        </div>
        <div class="col-sm-4">
          <label class="col-form-label" for="spesID">SPES ID No.:</label>
          <input type="text" class="form-control" name="spesID">
        </div>
        </div>
        <hr>
        <div class="form-row">
        <div class="col-sm-5">
        </div>
        <div class="col-auto">
          <input type="submit" class="form-control" name="profileSubmit">
        </div>
        <div class="col-sm-5">
        </div>
        </div>

        </form>
</body>
</script>
</html>

<?php }?>