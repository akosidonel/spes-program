<?php
session_start();
unset($_SEESION['ulogin']);
header('location:index.php');
die();
?>