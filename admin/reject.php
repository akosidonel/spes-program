<?php
    include('function.php');
    connectme();
                      //Import PHPMailer classes into the global namespace
              //These must be at the top of your script, not inside a function
              use PHPMailer\PHPMailer\PHPMailer;
              use PHPMailer\PHPMailer\SMTP;
              use PHPMailer\PHPMailer\Exception;

              //Load Composer's autoloader
              require 'phpmailer/vendor/autoload.php';

              //Instantiation and passing `true` enables exceptions
    $message1 = "Account has been rejected.";
	$message2 = "Unknown error occured. Please try again.";
    $id = $_GET['id'];
    $result = mysqli_query("SELECT * FROM spesrequest where id='$id'"); 
    while($row=mysqli_fetch_array($result)) 
    {
    $email = $row['email'];

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

    $query = "DELETE FROM spesrequest WHERE spesrequest.id = '$id'";
        if(mysql_query($query)){
            echo "<script type='text/javascript'>alert('$message1');
			      window.location='SPESpending.php';
			     </script>";
        }else{
            echo "<script type='text/javascript'>alert('$message2');
				  window.location='SPESpending.php';</script>";
        }
}

?>