<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');

 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else { ?>
<?php $title = 'Spes Pending'; include('../include/header.php');?>
	<div class="form-row">
		<div class="container">
		<div class="content">
			<form name="form1" method="post" action="SPESpending.php">
				<h3>SPES Application</h3>
            <div class="table-responsive">
            <table id="example" class="display table-striped" style="width:100%; height: 100%;">
            		<thead>		       
						<tr>
							<th>Action</th>
							<th>Surname</th>
							<th>First Name</th>
              				<th>Email</th>
							<th>Gender</th>
							<th>Date of Birth</th>
							<th>Spes Availment</th>
							<th>Course</th>
						</tr>
					  </thead>
					<tbody>
						<?php
						$result = mysqli_query($conn, "SELECT * FROM spesaccount"); 
						while($row=mysqli_fetch_array($result)) 
						{ 					
							$sname = $row['surName'];
							$fname = $row['firstName'];
              				$email = $row['email'];
							$gender = $row['gender'];
							$dob = $row['doBirth'];
							$hspes = $row['historySpes'];
							$tdegree = $row['tertDegree'];
							?>
							<tr>
								<td>
								<a href='accept.php?email=<?php echo $row['email'] ?>'><i class="fa-solid fa-check text-success"></i></a>
                |
								<a href='reject.php?email=<?php echo $row['email'] ?>'> <i class="fa-solid fa-xmark text-danger"></i></a>
								</td>
								<td><?php echo $sname; ?></td>
								<td><?php echo $fname; ?></td>
                				<td><?php echo $email; ?></td>								
								<td><?php echo $gender; ?></td>
								<td><?php echo $dob; ?></td>
								<td><?php echo $hspes; ?></td>
								<td><?php echo $tdegree; ?></td>
							</tr>

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
</body>
<?php include('../include/footer.php');?>
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