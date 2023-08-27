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

<link rel="stylesheet" href="../include/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../include/bootstrap-4.5.3-dist/css/bootstrap.css">
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
		<div class="container-fluid">
		<div class="content">
			<form name="form1" method="post" action="SPESpending.php">
				<h3>Accounts</h3>
<!-- 				<a href='add_user.php' id="wew" target="_blank" onclick="window.open('add_user.php','pagename','resizable,height=960,width=1280'); return false;">Add Account</a> -->
            <div class="table-responsive">
            <table id="example" class="display table-striped" style="width:100%; height: 100%;">
            <thead>		       
						<tr>
							<th>Action</th>
							<th>Spes ID#</th>
							<th>Surname</th>
							<th>First Name</th>
							<th>Username</th>
							<th>Password</th>
              <th>Email</th>
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
						$result = mysqli_query($conn,"SELECT * FROM spesrequest"); 
						while($row=mysqli_fetch_array($result)) 
						{ 

							$userid = $row['id'];
							// $sid = $row['spesID'];							
							$sname = $row['surName'];
							$fname = $row['firstName'];
							$username = $row['username'];
							$userpass = $row['password'];
              $email = $row['email'];
							$stat = $row['status'];
							$gender = $row['gender'];
							$dob = $row['doBirth'];
							$hspes = $row['historySpes'];
							$hyear = $row['historyYear'];
							$tdegree = $row['tertDegree'];

							?>
							<tr>
								<td>
								<a href='accept.php?id=<?php echo $row['id'] ?>'><img src="images2/icon_accept.png" height='18px'></a>
                |
								<a href='reject.php?id=<?php echo $row['id'] ?>'><img src="images2/icon_reject.png" height='18px'></a>
								</td>
								<td><?php echo $userid; ?></td>
								<td><?php echo $sname; ?></td>
								<td><?php echo $fname; ?></td>
								<td><?php echo $username; ?></td>
								<td><?php echo $userpass; ?></td>
                <td><?php echo $email; ?></td>
								<td><?php echo $stat; ?></td>								
								<td><?php echo $gender; ?></td>
								<td><?php echo $dob; ?></td>
								<td><?php echo $hspes; ?></td>
								<td><?php echo $hyear; ?></td>
								<td><?php echo $tdegree; ?></td>
							</tr>

							<?php
						}
					?>
					</tbody>
					</table>
                </div>
                <!-- <input type="hidden" name="vftrmonth" id="vftrmonth" value="<?php echo $vftrmonth; ?>">
                <input type="hidden" name="vftryear" id="vftryear" value="<?php echo $vftryear; ?>"> -->
			</form>
		</div>
	</div>
</div>

    
    <script src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
</body>
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
    
    $("div.toolbar").html("<a href='javascript:void(0)' onclick='centerPopupWindow(500,550,20,add_user.php,demowin);'><img src='images2/clip_add.png' title='Add' height='30px'>");
} );

</script>
    <script src="../include/bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../include/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/1cd75bd212.js" crossorigin="anonymous"></script>
<!--   <script type="text/javascript">
    function sendEmail() {
      $.ajax({
        url: 'SPESpending.php';
        method: 'POST';
        dataType: 'json';
        data {
          name: name.val(),
          email: email.val(),
          subject: name.val(),
          name: name.val();
        }
      });
    }
  </script> -->
</html>

<?php }?>