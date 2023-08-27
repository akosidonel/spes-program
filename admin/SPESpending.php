<?php
session_start();
error_reporting(0);
include('function.php');

 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else { ?>
<?php include('../include/header.php');?>
	<div class="form-row">
		<div class="container-fluid">
		<div class="content">
			<form name="form1" method="post" action="SPESpending.php">
				<h3>Accounts</h3>
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