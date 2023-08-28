<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');
                  //Import PHPMailer classes into the global namespace
              //These must be at the top of your script, not inside a function
              use PHPMailer\PHPMailer\PHPMailer;
              use PHPMailer\PHPMailer\SMTP;
              use PHPMailer\PHPMailer\Exception;

              //Load Composer's autoloader
              require 'vendor/autoload.php';

              //Instantiation and passing `true` enables exceptions
connectme();
	$id = $_GET['id'];
	$message1 = "Account has been verified!";
	$message2 = "Failed to accept!";
	$result = mysqli_query($conn,"SELECT * FROM spesaccount where spes_id='$id'"); 
	while($row=mysql_fetch_array($result)) 
	{
    $uName = $row['username'];
    $pass = $row['password'];
    $sName = $row['surName'];
    $fName = $row['firstName'];
    $mName = $row['mName'];
    $stat = $row['status'];
    $sex = $row['gender'];
    $dob = $row['doBirth'];
    $pob = $row['poBirth'];
    $cship = $row['cShip'];
    $gsis = $row['gsisBeneficiary'];
    $relation = $row['relationship'];
    $pAdd = $row['pAdd'];
    $cAdd = $row['cAdd'];
    $phone = $row['mNo'];
    $email = $row['email'];
    $socialmedia = $row['socialAcc'];
    $pstat = $row['pStatus'];
    $father = $row['fatherName'];
    $fcnumber = $row['fCNo'];
    $fpstat = $row['fStatus'];
    $foccupation = $row['fOccu'];
    $fsalary = $row['fSalary'];
    $mother = $row['motherName'];
    $mcnumber = $row['mCNo'];
    $mpstat = $row['mStatus'];
    $moccupation = $row['mOccu'];
    $msalary = $row['mSalary'];
    $eSn = $row['elemSName'];
    $eDec = $row['elemDegree'];
    $eYl = $row['elemYearLvl'];
    $eDa = $row['elemDEnd'];
    $sSm = $row['secondSName'];
    $sDec = $row['secondDegree'];
    $sYl = $row['secondYearLvl'];
    $sDa = $row['secondDEnd'];
    $tSm = $row['tertSName'];
    $tDec = $row['tertDegree'];
    $tYl = $row['tertYearLvl'];
    $tDa = $row['tertDEnd'];
    $tecSm = $row['tecSName'];
    $tecDec = $row['tecDegree'];
    $tecYl = $row['tecYearLvl'];
    $tecDa = $row['tectDEnd'];
    $spesAvail = $row['historySpes'];
    $spesYear = $row['historyYear'];
    $spesID = $row['spesID'];


              $mail = new PHPMailer(true);
               try {
                  //Server settings
                  $mail->isSMTP();                                            //Send using SMTP
                  $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                  $mail->Username   = 'emhzwantyou@gmail.com';                     //SMTP username
                  $mail->Password   = 'ed25_dj11';                               //SMTP password
                  $mail->SMTPSecure = 'ssl'; //tls         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                  $mail->Port       = 465; //587                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                  //Recipients
                  $mail->setFrom('emhzwantyou@gmail.com', 'PESO Paranaque');
                  $mail->addAddress($email);     //Add a recipient

                  //Attachments
                  //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
                  $body = '<p><b>Good Day!</b><br><br>
                                    Your account has been verified by the PESO staff, and can now access your account on the SPES website. This does not mean you are already in the SPES program but you are now eligible to complete these requirements: <br><br>
                                    1.   Resume with recent 2×2 picture <br>
                                    2.   Personal Assessment Form (SPES 02) <br>
                                    3.   Photocopy PSA Birth Certificate <br>
                                    4.   Copy of Form 138 for High School and Senior High School <br>
                                    5.   Recent grades and School Registration preferably in the Second Semester <br>
                                    6.   Certificate of Barangay Indigency <br>
                                    7.   Certificate of Non-Filing of ITR <br>
                                    8.   Certificate of Low Income <br>
                                    9.   Certificate of Tax Exemption <br>
                                    10. Application Form SPES Form 02 <br>
                                    11. Filled up Oath of Undertaking SPES Form 2-A</p>';
                  //Content
                  $mail->isHTML(true);                                  //Set email format to HTML
                  $mail->Subject = 'Qualified for SPES application';
                  $mail->Body    = $body;
                  $mail->AltBody = strip_tags($body);

                  $mail->send();
                  echo 'Message has been sent';
              } catch (Exception $e) {
                  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
              }

	$query = "INSERT INTO spesaccount(id,username,password,surName,firstName,mName,status,gender,doBirth,poBirth,cShip,gsisBeneficiary,relationship,pAdd,cAdd,mNo,email,socialAcc,pStatus,fatherName,fCNo,fStatus,fOccu,fSalary,motherName,mCNo,mStatus,mOccu,mSalary,elemSName,elemDegree,elemYearLvl,elemDEnd,secondSName,secondDegree,secondYearLvl,secondDEnd,tertSName,tertDegree,tertYearLvl,tertDEnd,tecSName,tecDegree,tecYearLvl,tectDEnd,historySpes,historyYear,spesID) VALUES(NULL,'$uName','$pass','$sName','$fName','$mName','$stat','$sex','$dob','$pob','$cship','$gsis','$relation','$pAdd','$cAdd','$phone','$email','$socialmedia','$pstat','$father','$fcnumber','$fpstat','$foccupation','$fsalary','$mother','$mcnumber','$mpstat','$moccupation','$msalary','$eSn','$eDec','$eYl','$eDa','$sSm','$sDec','$sYl','$sDa','$tSm','$tDec','$tYl','$tDa','$tecSm','$tecDec','$tecYl','$tecDa','$spesAvail','$spesYear','$spesID')";
	$msql = "DELETE FROM spesrequest WHERE spesrequest.id = '$id'";
	if(mysqli_query($conn,$query)){
	  echo "<script type='text/javascript'>alert('$message1');
	      window.location='SPESpending.php';
	     </script>";
	 if(mysqli_query($conn,$msql)){
	  }
	}
	  echo "<script type='text/javascript'>alert('$message2');
	  window.location='SPESpending.php';</script>";

	}
?>
