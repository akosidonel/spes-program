<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');
 if(!isset($_SESSION['ulogin'])){
   header('Location:index.php');
   exit();
 }else { $id = $_SESSION['ulogin'];?>
<?php $title = 'Contact'; include('../include/spesheader.php');?>
<link rel="stylesheet" href="../assets/css/contactStyle.css">
<!--CAROUSEL-->
<section>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d341.46560078833113!2d121.02211728765148!3d14.47077313714293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ce50065226d9%3A0x1044592c6073a043!2sCity%20Government%20of%20Para%C3%B1aque%20-%20Barangay%20Operation%20Office!5e0!3m2!1sen!2sph!4v1583749824828!5m2!1sen!2sph" width="100%" height="765" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

 </section>
  <div class="container-fluid">
   <!--  <p>Address: PESO-Parañaque Office, 4th floor, Left Wing</p>
    <p>Cityhall Bldg., Valley I, Barangay San Antonio, Parañaque City</p> -->
    <div class="row">
    <div class="col-sm-6">
      <p>Address: PESO-Parañaque Office, 4th floor, Left Wing</p>
      <p>Cityhall Bldg., Valley I, Barangay San Antonio, Parañaque City</p>
    </div>
    <div class="col-sm-6">
      <p>Contact us @: tel#: 829-6886/771-1078 || email: pesoparanaqueemployment@gmail.com</p>
      <p>Facebook Page: <a href="https://www.facebook.com/pesoparanaque">PESO Paranaque</a></p>
    </div>
    </div>
  </div>

    <script src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>

  </body>
</html>
<?php }?>