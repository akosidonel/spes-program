<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');

 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else { $id = $_SESSION['login']; ?>

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
							<th>First Name</th>
							<th>Gender</th>
							<th>Date of Birth</th>
							<th>Course</th>
							<th>No. of Availment</th>
						</tr>
					  </thead>
					<tbody>
						<?php
						$result = mysqli_query($conn, "SELECT  (SELECT COUNT(dep_status) FROM deployment_history WHERE dep_status=5 GROUP BY spes_id) as avail, s.spes_id,s.surName,s.firstName,s.email,s.gender,s.doBirth,s.tertDegree,d.spes_id 
						FROM deployment_history as d JOIN spesaccount as s ON d.spes_id=s.spes_id WHERE d.dep_status=1 GROUP BY d.spes_id"); 
						while($row=mysqli_fetch_array($result)) 
						{ 					
							$name = $row['firstName'].' '.$row['surName'];
              				$email = $row['email'];
							$gender = $row['gender'];
							$dob = $row['doBirth'];
							$tdegree = $row['tertDegree'];
							$avail = $row['avail'];

							?>
							<tr>
								<td>
								<a href='accept.php?email=<?php echo $row['email'] ?>'><i class="fa-solid fa-check text-success"></i></a>
                |
								<a href='reject.php?email=<?php echo $row['email'] ?>'> <i class="fa-solid fa-xmark text-danger"></i></a>
								</td>
								<td><?php echo $name; ?></td>					
								<td><?php echo $gender; ?></td>
								<td><?php echo $dob; ?></td>
								<td><?php echo $tdegree; ?></td>
								<td><?php echo $avail; ?></td>
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