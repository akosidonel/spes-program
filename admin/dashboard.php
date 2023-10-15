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
					<input type="text" class="form-control" id="" placeholder="Enter Programs & Project">
				</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
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
							<i class="fa-sharp fa-solid fa-pen-to-square fa-lg text-primary"></i> | <i class="fa-sharp fa-solid fa-trash fa-lg text-danger"></i>
							</td>
						</tr>
					
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