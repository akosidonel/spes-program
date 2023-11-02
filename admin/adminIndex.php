<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');
 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else {?>

<?php $title = 'Spes Account'; include('../include/header.php');?>
	<div class="form-row">
		<div class="container">
		<div class="content">
    <h3>SPES Accounts</h3>
				<a href='add_user.php' id="wew" target="_blank" onclick="window.open('add_user.php','pagename','resizable,height=1000,width=540'); return false;" class="btn btn-primary my-2"><i class="fa-solid fa-user-plus"></i> Add Account</a>
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
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					<?php
            $sql =mysqli_query($conn, "SELECT * FROM spesaccount WHERE is_blacklist = '0' ");
            if(mysqli_num_rows($sql)){
              foreach($sql as $row){?>
              <tr>
                <td>
								<a href='update_user.php' target="_blank" onclick="window.open('update_user.php?id=<?=$row['spes_id'] ?>'); return false;"><i class="fa-solid fa-file-pen text-success"></i></a>
								|
								<a href="javascript:confirmDelete(<?=$row['spes_id'] ?>)"><i class="fa-solid fa-trash text-secondary"></i></a>
								|
								<a href="javascript:confirmViolation(<?=$row['spes_id'] ?>)"><i class="fa-solid fa-bolt text-danger"></i></a>
								</td>
								<td><?=$row['username']?></td>
								<td><?=$row['firstName'].' '.$row['surName']?></td>				
								<td><?=$row['doBirth']?></td>
								<td><?=$row['tecDegree']?></td>
								<td><?=$row['status']?></td>
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
	function confirmDelete(id)
	{
		if(confirm("Are you sure you want to delete this record?"))
		{
			window.location.href='delete_record.php?deluserid='+id;
			return true;
		}
	}
	function confirmViolation(id)
	{
		if(confirm("Add this account to blacklisted?"))
		{
			window.location.href='blacklist.php?blacklistid='+id;
			return true;
		}
	}
	</script>
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