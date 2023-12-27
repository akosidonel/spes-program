<?php
session_start();
error_reporting(0);
include('../dbconnection/dbconnection.php');
 if(!isset($_SESSION['login'])){
   header('Location:index.php');
   exit();
 }else {?>

<?php $title = 'SPES Records'; include('../include/header.php');?>
	<div class="form-row">
		<div class="container">
		<div class="content">
    <h3>SPES Records</h3>
			<form name="form1" method="post" action="adminIndex.php">
        <div class="table-responsive">
        <table id="example" class="display table-striped" style="width:100%; height: 100%;">
          			<thead>		       
						<tr>
							<th>BATCH NUMBER</th>
							<th>DATE</th>
						</tr>
					</thead>
					<tbody>
					<?php
            $sql = mysqli_query($conn,"SELECT batch_number,created_at FROM deployment_history ");
            if(mysqli_num_rows($sql)){
              foreach($sql as $row){?>
              <tr>
                <td><a href="generate_report.php?batch_id=<?=$row['batch_number']?>"><?=$row['batch_number']?></a></td> 
                <td><?php echo date("F j, Y",$date=strtotime($row['created_at'])); ?></td>
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