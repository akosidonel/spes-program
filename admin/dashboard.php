<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');
 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else {?>

<?php $title = 'Dashboard'; include('../include/header.php');?>
		<div class="container">
		<div class="content">
    <h3>Dashboard</h3>

	

				<a href='#' id="wew" target="_blank" onclick="window.open('add_user.php','pagename','resizable,height=1000,width=540'); return false;" class="btn btn-primary my-2"><i class="fa-solid fa-laptop-file"></i> Add Program</a>
			<form name="form1" method="post" action="adminIndex.php">
        <div class="table-responsive">
        <table id="example" class="display table-striped" style="width:100%; height: 100%;">
          <thead>		       
						<tr>
							<th>Batch No.</th>
							<th>Program</th>
							<th>Year</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>20230812</td>
							<td>2023SPESAUG</td>
							<td>2023</td>
							<td>Ongoing</td>
							<td>
							<i class="fa-sharp fa-solid fa-pen-to-square fa-lg text-success"></i> | <i class="fa-sharp fa-solid fa-trash fa-lg text-danger"></i>
							</td>
						</tr>
					
					</tbody>
					</table>
        </div>
			</form>
		</div>
	</div>

</body>
<?php include('../include/footer.php');?>

<script>
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