<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');
 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else {?>

<?php $batchid = $_GET['batch_id']; 
$title = 'Generate Report for '.$batchid ; 
include('../include/header.php');?>

	<div class="form-row">
		<div class="container">
		<div class="content">
    <h3>Generate Report for Batch <span><?php echo $batchid?></span></h3>
			<form name="form1" method="post" action="adminIndex.php">
        <div class="table-responsive">
        <table id="example" class="display table-striped" style="width:100%; height: 100%;">
          			<thead>		       
						<tr>
							<th>Name</th>
							<th>Age</th>
							<th>Gender</th>
							<th>Course</th>
							<th>Barangay</th>
							<th>Deployed At</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$sql = mysqli_query($conn,"SELECT DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), s.doBirth)), '%Y') + 0 AS age,h.spes_id,h.dept_id,h.batch_number,s.spes_id,s.firstName,s.mName,s.surName,s.gender,s.tertDegree,s.barangay,d.dept_id,d.department_name
					FROM deployment_history as h JOIN spesaccount as s ON h.spes_id = s.spes_id JOIN department as d ON h.dept_id=d.dept_id WHERE h.batch_number='$batchid'");
					if(mysqli_num_rows($sql)){
					foreach($sql as $row){?>
					<tr>
						<td><?=$row['firstName']." ".$row['surName']?></td>
						<td><?=$row['age']?></td>
						<td><?=$row['gender']?></td>
						<td><?=$row['tertDegree']?></td>
						<td><?=$row['barangay']?></td>
						<td><?=$row['department_name']?></td>
					</tr>
					<?php }}?>
					</tbody>
					</table>
        </div>
			</form>
		</div>
	</div>
</div>
</body>
<?php include('../include/footer.php');?>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script>

$(document).ready(function() {
    $('#example').DataTable( { 
        "order": [[ 0, "desc" ]],
        scrollY:        '66vh',
        scrollCollapse: true,
        paging:         false,
        "scrollX": true,
        "dom": '<"toolbar">frtip',
		dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
</html>

<?php }?>