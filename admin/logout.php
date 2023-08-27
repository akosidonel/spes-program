<?php
session_start();
unset($_SEESION['login']);
header('location:index.php');
die();
?>