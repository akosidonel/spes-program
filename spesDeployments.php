<?php  
include("function.php");
connectme();
$result = mysql_query("SELECT * FROM spesdb.spesaccounts");


?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>SPES Deployment</title>

<link rel="stylesheet" href="bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="adminStyle.css">

<!-- <link rel="stylesheet" href="bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="depStyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
 
 </head>
 <body>
       <div class="form-group">
      <div class="footer">
        <img src="top-banner.jpg">
        </div>
         <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="adminIndex.php"><b>SPES Admin</b></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="adminIndex.php">SPES Accounts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminIndex2.php">Admin Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="SPESpending.php">SPES Pending Accounts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="spesDeployment.php">SPES Deployment</a>
              </li>   
              </ul>
              <ul class="nav justify-content-end">
              <li class="nav-item">
                <form method="post">
                <button name="logout" class="btn btn-danger my-2">Logout</button>
              </form>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      </div>

<div class="form-row">
    <div class="container">
    <div class="content">
      <form name="form1" method="post" action="SPESpending.php">
        <h3>Accounts</h3>
        <select>
          <option>Departments:</option>    
          <?php 

            $query=mysql_query("SELECT * FROM departments"); 
              while($row=mysql_fetch_array($query)){
                ?>
                  <option><?php echo $row['dptName']; ?></option>
                <?php
              }
          ?>
        </select>
        <select name="fetch" id="fetch">
          <option>Course:</option>    
          <?php 

            $query1=mysql_query("SELECT * FROM spesaccounts"); 
              while($row=mysql_fetch_array($query1)){
                $value=$row['tertDegree'];
                ?>
                  <option value="$value"><?php echo $row['tertDegree']; ?></option>
                <?php
              }
          ?>
        </select>
<!--         <script type="text/javascript" src="filter.js">
        </script> -->
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
        <input type="button" name="select" class="btn btn-primary" value="select">
                <div class="table-responsive">
                  <table id="example" class="display table-striped" style="width:100%; height: 100%;">
                <thead>          
            <tr class="header">
              <th>Action</th>
              <th>Spes ID#</th>
              <th>Surname</th>
              <th>First Name</th>
              <th>Course</th>
              <th>Email</th>
              <th>Mobile #</th>
              <th>Gender</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $result = mysql_query("SELECT * FROM spesaccounts"); 
            while($row=mysql_fetch_array($result)) 
            { 

              $userid = $row['id'];
              // $sid = $row['spesID'];             
              $sname = $row['surName'];
              $fname = $row['firstName'];
              $course = $row['tertDegree'];
              $email = $row['email'];
              $mNo = $row['mNo'];
              $gender = $row['gender'];
              
              ?>
              <tr>
                <td>
                <input type="checkbox" id="chkBox" name="chkBox" value="check">
                </td>
                <td><?php echo $userid; ?></td>
                <td><?php echo $sname; ?></td>
                <td><?php echo $fname; ?></td>
                <td><?php echo $course; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $mNo; ?></td>                
                <td><?php echo $gender; ?></td>
                

              <?php
            }
          ?>
          </tbody>
          </table>
          </div>
      </form>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

 </body>
</html>