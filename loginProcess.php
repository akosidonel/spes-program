<?php
  include("function.php") ;
  session_start();
  connectme() ;

  $username = $_POST['uname'];
  $password = $_POST['pass'];
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);

  $message1 = "Login success!";
  $message2 = "Failed to Login!";
  // mysql_connect("localhost", "root", "");
  // mysql_select_db("spesdb");

  $result = mysql_query("select * from spesaccount where username = '$username' and password = '$password'") or die("Failed to query database ".mysql_error());

  $row = mysql_fetch_array($result);
  $_SESSION["id"]=$row['id'];
  if($row['username'] == $username && $row['password'] == $password) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header("Location: home.php?id=$username");
     echo "<script type='text/javascript'>alert('$message1');
     window.location='home.php';
     </script>";
    // header("Location:home.php");
  } else {     
     // header("Location:index.php");
     echo "<script type='text/javascript'>alert('$message2');
     window.location='index.php';
     </script>";
  }
?>