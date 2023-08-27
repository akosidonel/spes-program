<?php
session_start();
error_reporting(0);
include('function.php');

 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else { ?>
<!DOCTYPE html>
<html>
<head>
    <title>
    Admin Control Page
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="../include/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../include/bootstrap-4.5.3-dist/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="adminStyle.css">
</head> 

<body>
	<script>

	function confirmDelete(id)
	{
		if(confirm("Are you sure you want to delete this record?"))
		{
			window.location.href='delete_record.php?deluserid='+id;
			return true;
		}
	}
	</script>
</head>
<body>
     <div class="form-group">
    	<div class="footer">
        <img src="../top-banner.jpg">
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
			  <a href="logout.php" class="btn btn-danger my-2">Log Out</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      </div>
 </div>
	<div class="form-row">
		<div class="container-fluid">
		<div class="content">
    <h3>Accounts</h3>
				<a href='add_user.php' id="wew" target="_blank" onclick="window.open('add_user.php','pagename','resizable,height=1000,width=540'); return false;" class="btn btn-primary my-2"><i class="fa-solid fa-user-plus"></i> Add Account</a>
			<form name="form1" method="post" action="adminIndex.php">
                <div class="table-responsive">
                	<table id="example" class="display table-striped" style="width:100%; height: 100%;">
            		<thead>		       
						<tr>
							<th>Action</th>
							<th>Spes ID#</th>
							<th>Name</th>
							<th>Username</th>
							<th>Status</th>
							<th>Gender</th>
							<th>Date of Birth</th>
							<th>Spes Availment</th>
							<th>Year Availed</th>
							<th>Course</th>
						</tr>
					</thead>
					<tbody>
					<?php
            $sql =mysqli_query($conn, "SELECT * FROM spesaccount");
            if(mysqli_num_rows($sql)){
              foreach($sql as $row){?>
              <tr>
                <td>
								<a href='update_user.php' target="_blank" onclick="window.open('update_user.php?id=<?=$row['spes_id'] ?>'); return false;"><i class="fa-solid fa-file-pen"></i></a>
								 |
								<a href="javascript:confirmDelete(<?=$row['id'] ?>)"><i class="fa-solid fa-trash text-danger"></i></a>
								</td>
                <td><?=$row['spes_id']?></td>
								<td><?=$row['firstName'].' '.$row['surName']?></td>				
								<td><?=$row['username']?></td>
								<td><?=$row['status']?></td>
								<td><?=$row['gender']?></td>
								<td><?=$row['doBirth']?></td>
								<td><?=$row['historySpes']?></td>
								<td><?=$row['historyYear']?></td>
								<td><?=$row['tecDegree']?></td>
          </tr>
          <?php }}?>
					</tbody>
					</table>
                </div>
                <!-- <input type="hidden" name="vftrmonth" id="vftrmonth" value="<?php echo $vftrmonth; ?>">
                <input type="hidden" name="vftryear" id="vftryear" value="<?php echo $vftryear; ?>"> -->
			</form>
		</div>
	</div>
</div>
</body>
<script src="../include/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
<script src="../include/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/1cd75bd212.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="https:////cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script>
var addurl = 'add_user.php';
var demowin = 'demo_win';

$(document).ready(function() {
    $('#example').DataTable( { 
        "order": [[ 0, "desc" ]],
        scrollY:        '66vh',
        scrollCollapse: true,
        paging:         false,
        "scrollX": true,
        "dom": '<"toolbar">frtip'
    } );
} );

</script>
</html>

<?php }?>