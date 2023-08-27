<?php
  session_start();
  mysql_connect("localhost","root","") or die (mysql_error());
  mysql_select_db("spesdb") or die (mysql_error());
  $message1 = "Profile Successfuly Added!";
  $message2 = "Failed to Add Profile!";

  if(isset($_POST['profileSubmit'])){
    $uName = $_POST['uname'];
    $pass = $_POST['pass'];
    $fName = $_POST['fname'];
    $pos = $_POST['pos'];

    $query = "INSERT INTO pesoadmin(userId, adminUName, adminPass, fullName, possition) VALUES (NULL,'$uName','$pass','$fName','$pos')";
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