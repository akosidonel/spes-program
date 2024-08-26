<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');
 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else {?>

<?php $title = 'Dashboard'; include('../include/header.php');?>

<?php 
$deploymentCount = mysqli_query($conn, "SELECT COUNT(CASE WHEN dep_status = 1 THEN 1 ELSE NULL END) as total FROM deployment_history ");
$query = mysqli_fetch_array($deploymentCount);
$total = $query['total'];
?>

<?php 
$sql = mysqli_query($conn, "SELECT capacity FROM program WHERE status = 1");
$result = mysqli_fetch_array($sql);
$capacity = $result['capacity'];
?>


<!-- Modal -->
<div class="modal fade" id="programModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Program</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form id="pgram_form" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>Batch No.</label>
					<input type="text" class="form-control" name="batch_number"  id="batch_number" placeholder="Create Batch Number">
				</div>
				<div class="form-group">
					<label>Programs & Project</label>
					<input type="text" class="form-control" name="program" id="program" placeholder="Enter Programs & Project">
				</div>
				<div class="form-group">
					<label>Capacity</label>
					<input type="number" class="form-control" name="capacity" id="capacity" placeholder="Enter Capacity">
				</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
		</form>
      </div>
    </div>
  </div>
</div>


<div class="container">
<div class="content">
    
	<h4 class="mb-3" >Dashboard</h4>

	<div class="row">
	<div class="col-md-4">
	<form name="form1" method="post">
		<a href='#' class="btn btn-primary" data-toggle="modal" data-target="#programModal"><i class="fa-solid fa-laptop-file"></i> Add Program</a>
	</form>
	</div>
	<div class="col">
	<h5 class="mb-4">Slot :  
		<?php if ($total<=0){	echo ' Not Available'; }else{ echo htmlentities($capacity-$total); } ?></h5>
	</div>
	</div>
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
									<a href='#' class="editbtn"><i class="fa-sharp fa-solid fa-pen-to-square fa-lg text-primary"></i></a>
									|
									<a href="javascript:confirmDelete(<?=$row['id']?>)"><i class="fa-sharp fa-solid fa-trash fa-lg text-danger"></i></a>
								</td>
								<td class="batch_number"><?=$row['batch_number']?></td>
								<td><?=$row['program']?></td>
								<td><?=$row['capacity']?></td>
								<td><?=$row['year']?></td>
								<td><?php $stat = $row['status'];
								 if($stat==1){?>
									<span class="badge badge-primary">ONGOING</span>
									<?php }else if($stat==0){?>
									<span class="badge badge-success">FINISHED</span>
									<?php }else if($stat==2){?>
									<span class="badge badge-danger">ONHOLD</span>
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
        "order": [[ 4, "desc" ]],
        scrollY:        '66vh',
        scrollCollapse: true,
        paging:         false,
        "scrollX": true,
        "dom": '<"toolbar">frtip'
    } );
	$('.editbtn').on('click', function (){
		$('#editmodal').modal('show');

		var data = $(this).closest('tr').find('.batch_number').text();
		$.ajax({
			method:'POST',
			url:'../view/view.php',
			data:{
				'click_edit':true,
				'batch_number':data,
			},
			success: function (response){
				console.log(response);
			}
		});
	});

} );
$(document).on('submit', '#pgram_form', function(e){
    e.preventDefault();
    var fd = new FormData(this);
    fd.append("save_pgram",true);
    $.ajax({
      type:"POST",
      url: "../view/view.php",
      data: fd,
      processData: false,
      contentType: false,
      success:function(response){
        var res = jQuery.parseJSON(response);
        if(res.status == 200){
              $('#programModal').modal('hide');
              location.reload();
        }
      }
    });
   });

</script>
</html>

<?php }?>


<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Program</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
	  <form id="update_pgram" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>Batch No.</label>
					<input type="text" class="form-control" name="batch_number"  id="batch_number" placeholder="Create Batch Number">
				</div>
				<div class="form-group">
					<label>Programs & Project</label>
					<input type="text" class="form-control" name="program" id="program" placeholder="Enter Programs & Project">
				</div>
				<div class="form-group">
					<label>Capacity</label>
					<input type="number" class="form-control" name="capacity" id="capacity" placeholder="Enter Capacity">
				</div>
				<div class="form-group">
					<label>Program status</label>
					<select class="form-control" name="status" >
							<option value="1">On-going</option>
							<option value="2">Hold</option>
							<option value="0">Finish</option>
					</select>
				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary updatebtn">Update</button>
		</form>
      </div>
    </div>
  </div>
</div>