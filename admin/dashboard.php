<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');
 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else {?>

<?php $title = 'Dashboard'; include('../include/header.php');?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Program</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form>
				<div class="form-group">
					<label>Programs & Project</label>
					<input type="text" class="form-control" id="program" placeholder="Enter Programs & Project">
				</div>
				<div class="form-group">
					<label>Capacity</label>
					<input type="number" class="form-control" id="capacity" placeholder="Enter Capacity">
				</div>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
		</form>
      </div>
    </div>
  </div>
</div>


<div class="container">
<div class="content">
    
	<h4 class="mb-4" >Dashboard</h4>
	
	<form name="form1" method="post">
		<a href='#' class="btn btn-primary my-2" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-laptop-file"></i> Add Program</a>
	</form>
        <div class="table-responsive">
        <table id="example" class="display table-striped" style="width:100%; height: 100%;">
          <thead>		       
						<tr>
							<th>Action</th>
							<th>Batch No.</th>
							<th>Program</th>
							<th>Capacity</th>
							<th>Year</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$sql = mysqli_query($conn, "SELECT * FROM program");
							if(mysqli_num_rows($sql)){
							foreach($sql as $row){?>
							<tr>
								<td>
									<a href='#' target="_blank" onclick="window.open('.php?programId=<?=$row['id']?>','pagename','resizable,height=540,width=540'); return false;"><i class="fa-sharp fa-solid fa-pen-to-square fa-lg text-primary"></i></a>
									|
									<a href="javascript:confirmDelete(<?=$row['id']?>)"><i class="fa-sharp fa-solid fa-trash fa-lg text-danger"></i></a>
								</td>
								<td><?=$row['batch_number']?></td>
								<td><?=$row['program']?></td>
								<td><?=$row['capacity']?></td>
								<td><?=$row['year']?></td>
								<td><?php $stat = $row['status'];
								 if($stat==1){?>
									<span class="text-primary">Ongoing</span>
									<?php }else if($stat==0){?>
									<span class="text-success">Completed</span>
									<?php }?>
							</td>
							</tr>
						<?php } }?>
					</tbody>
					</table>
        </div>
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