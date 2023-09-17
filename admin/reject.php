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

$email = $_GET['email'];
$message1 = "Account has been verified!";
$message2 = "Failed to accept!";
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
                                   Upon reviewing your profile, you did not met the criteria to be a SPES beneficiary. <br><br>
                                   Thank you for understanding.</p>';
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Qualification for the SPES application failed';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

    /*
    if(mysqli_query($conn,$query)){
      echo "<script type='text/javascript'>alert('$message1');
          window.location='SPESpending.php';
          </script>";
    }else{
      echo "<script type='text/javascript'>alert('$message2');
      window.location='SPESpending.php';</script>";
    }
    */
?>
