<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');
 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else {?>

<?php $title = 'Blacklisted'; include('../include/header.php');?>
	<div class="form-row">
		<div class="container">
		<div class="content">
    <h3>Blacklisted Accounts</h3>
			<form name="form1" method="post" action="adminIndex.php">
        <div class="table-responsive">
        <table id="example" class="display table-striped" style="width:100%; height: 100%;">
          			<thead>		       
						<tr>
							<th>Action</th>
							<th>Username</th>
							<th>Name</th>
							<th>Date of Birth</th>
							<th>Course</th>
						</tr>
					</thead>
					<tbody>
					<?php
            $sql =mysqli_query($conn, "SELECT * FROM spesaccount WHERE is_blacklist = '1' ");
            if(mysqli_num_rows($sql)){
              foreach($sql as $row){?>
              <tr>
					<td><a href="javascript:confirmDelete(<?=$row['spes_id'] ?>)"><i class="fa-solid fa-trash text-danger"></i></a></td>
					<td><?=$row['username']?></td>
					<td><?=$row['firstName'].' '.$row['surName']?></td>				
					<td><?=$row['doBirth']?></td>
					<td><?=$row['tecDegree']?></td>
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