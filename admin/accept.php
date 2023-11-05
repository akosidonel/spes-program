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
require '../vendor/autoload.php';

//Instantiation and passing `true` enables exceptions

$id = $_GET['id'];
$message1 = "Account has been verified!";
$message2 = "Failed to accept!";
$sql = mysqli_query($conn,"SELECT s.spes_id,s.email,d.spes_id,d.batch_number,d.dep_status FROM spesaccount AS s JOIN deployment_history as d
ON s.spes_id=d.spes_id where s.spes_id='$id' AND d.dep_status=1"); 
$row = mysqli_fetch_array($sql);
$email = $row['email'];

$mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'spesparanaque.program@gmail.com';                     //SMTP username
    $mail->Password   = 'ikfmuufopgabkjmr';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('spesparanaque.program@gmail.com', 'PESO Paranaque');
    $mail->addAddress($email);     //Add a recipient
    $mail->addReplyTo('no-reply@gmail.com', 'No reply');
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
    $stat = 2;
    $update = mysqli_query($conn, "UPDATE deployment_history SET dep_status='$stat' WHERE spes_id='$id' AND dep_status=1 ");
    header('location:SPESpending.php');
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

?>
