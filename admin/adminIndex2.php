<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');

 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else { ?>
<?php $title = 'Admin Control page'; include('../include/header.php');?>
	<div class="form-row">
		<div class="container">
		<div class="content">
			<form name="form1" method="post" action="adminIndex2.php">
				<!-- <h3>Accounts</h3> -->
				<a href='add_admin.php' id="wew" target="_blank" onclick="window.open('add_admin.php','pagename','resizable,height=400,width=500'); return false;" class="btn btn-primary my-2"><i class="fa-solid fa-user-plus"></i> Add Account</a>
                <div class="table-responsive">
                	<table id="example" class="display table-striped" style="width:100%; height: 100%;">
            		<thead>		       
						<tr>
							<th>Action</th>
							<th>Username</th>
							<th>Password</th>
							<th>Full Name</th>
							<th>Position</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$sql = mysqli_query($conn, "SELECT * FROM pesoadmin");
            if(mysqli_num_rows($sql)){
              foreach($sql as $row){?>
            <tr>
                <td>
								<a href='update_adminuser.php' target="_blank" onclick="window.open('update_adminuser.php?userId=<?=$row['id']?>','pagename','resizable,height=540,width=540'); return false;"><i class="fa-solid fa-file-pen"></i></a>
								 |
								<a href="javascript:confirmDelete(<?=$row['id']?>)"><i class="fa-solid fa-trash text-danger"></i></a>
								</td>
                <td><?=$row['username']?></td>
                <td><?=$row['password']?></td>
                <td><?=$row['full_name']?></td>
                <td><?=$row['position']?></td>
            </tr>
          <?php } }?>
					</tbody>
					</table>
                </div>
                <input type="hidden" name="vftrmonth" id="vftrmonth" value="<?php echo $vftrmonth; ?>">
                <input type="hidden" name="vftryear" id="vftryear" value="<?php echo $vftryear; ?>">
			</form>
      
		</div>
	</div>
</div>
</div>
<?php include('../include/footer.php');?>
</body>
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