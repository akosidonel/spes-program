<?php
  session_start();
  include('../dbconnection/dbconnection.php');
  $message1 = "Profile Updated!";
  $message2 = "Failed to update account!";
  
  if(isset($_POST['profileSubmit'])){
    $id=$_SESSION['ulogin'];
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

    $query = "UPDATE spesaccount SET username='$username',password='$pass',surName='$sName',firstName='$fName',mName='$mName',status='$stat',gender='$sex',doBirth='$dob',poBirth='$pob',cShip='$cship',gsisBeneficiary='$gsis',relationship='$relation',pAdd='$pAdd',cAdd='$cAdd',mNo='$phone',email='$email',socialAcc='$socialmedia',pStatus='$pstat',fatherName='$father',fCNo='$fcnumber',fStatus='$fpstat',fOccu='$foccupation',fSalary='$fsalary',motherName='$mother',mCNo='$mcnumber',mStatus='$mpstat',mOccu='$moccupation',mSalary='$msalary',elemSName='$eSn',elemDegree='$eDec',elemYearLvl='$eYl',elemDEnd='$eDa',secondSName='$sSm',secondDegree='$sDec',secondYearLvl='$sYl',secondDEnd='$sDa',tertSName='$tSm',tertDegree='$tDec',tertYearLvl='$tYl',tertDEnd='$tDa',tecSName='$tecSm',tecDegree='$tecDec',tecYearLvl='$tecYl',tectDEnd='$tecDa',historySpes='$spesAvail',historyYear='$spesYear',spesID='$spesID' WHERE spes_id='$id'";
  if(mysqli_query($conn,$query)){
  echo "<script type='text/javascript'>alert('$message1');
    window.location='profile.php';
    </script>";
  } else {
  echo "<script type='text/javascript'>alert('$message2');</script>";
}
}
?>