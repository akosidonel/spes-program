<?php
  session_start();
  mysql_connect("localhost","root","") or die (mysql_error());
  mysql_select_db("spesdb") or die (mysql_error());
  $message1 = "Profile Successfuly Added!";
  $message2 = "Failed to Add Profile!";
  
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

    $query = "INSERT INTO spesaccounts(username,password,surName,firstName,mName,status,gender,doBirth,poBirth,cShip,gsisBeneficiary,relationship,pAdd,cAdd,mNo,email,socialAcc,pStatus,fatherName,fCNo,fStatus,fOccu,fSalary,motherName,mCNo,mStatus,mOccu,mSalary,elemSName,elemDegree,elemYearLvl,elemDEnd,secondSName,secondDegree,secondYearLvl,secondDEnd,tertSName,tertDegree,tertYearLvl,tertDEnd,tecSName,tecDegree,tecYearLvl,tectDEnd,historySpes,historyYear,spesID) VALUES('$uName','$pass','$sName','$fName','$mName','$stat','$sex','$dob','$pob','$cship','$gsis','$relation','$pAdd','$cAdd','$phone','$email','$socialmedia','$pstat','$father','$fcnumber','$fpstat','$foccupation','$fsalary','$mother','$mcnumber','$mpstat','$moccupation','$msalary','$eSn','$eDec','$eYl','$eDa','$sSm','$sDec','$sYl','$sDa','$tSm','$tDec','$tYl','$tDa','$tecSm','$tecDec','$tecYl','$tecDa','$spesAvail','$spesYear','$spesID')";
  if(mysql_query($query)){
  echo "<script type='text/javascript'>alert('$message1');
        window.opener.location.reload();
        window.close();
        </script>";

  } else {
  echo "<script type='text/javascript'>alert('$message2');</script>";
}
}
?>
