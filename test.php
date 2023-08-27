<?php
header("Content-Type: text/html; charset=ISO-8859-1");
include("funcs.php");
connectme();
checkme();

$vuserid = $_SESSION['userid'];
$vusername= $_SESSION['username'];
$vmodaccess = $_SESSION['modaccess'];
$vusertype = $_SESSION['usertype'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title> 
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css2/bootstrap.css" rel="stylesheet">
    <link href="css2/bootstrap.min.css" rel="stylesheet">
    <link href="css2/mystyle.css" rel="stylesheet">

    <!-- DataTables Dependencies -->
    <link rel="stylesheet" href="css2/jquery.dataTables.min.css" />   
    <script src="js2/jquery-3.3.1.js"></script>   
    <script src="js2/jquery.dataTables.min.js"></script>
    <script src="js2/dataTables.buttons.min.js"></script>
    
    <style type="text/css">
    th, td { white-space: nowrap; text-align: center; }
    div.dataTables_wrapper {
        margin: 0 auto;
    }
 
    div.container {
        width: 100%;
    }

    .container-fluid {

    }

    .content {
        margin-right: 9px;
    }

    .toolbar {
        float: left;
   	}
   	
   	.se-pre-con {
		position: fixed;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		z-index: 9999;
		background: url(images2/page-loader.gif) center no-repeat #fff;
	}

    </style>
	<script>
	function centerPopupWindow(windowWidth, windowHeight, windowOuterHeight, url, wname, features) 
	{
	    var centerLeft = parseInt((window.screen.availWidth - windowWidth) / 2);
	    var centerTop = parseInt(((window.screen.availHeight - windowHeight) / 2) - windowOuterHeight);
	 
	    var misc_features;
	    if (features) 
	    {
	      misc_features = ', ' + features;
	    }
	    else 
	    {
	      misc_features = ', status=no, location=no, scrollbars=yes, resizable=yes';
	    }
	    var windowFeatures = 'width=' + windowWidth + ',height=' + windowHeight + ',left=' + centerLeft + ',top=' + centerTop + misc_features;
	    var win = window.open(url, wname, windowFeatures);
	    win.focus();
	    return win;
	}

	function confirmDelete(id)
	{
		if(confirm("Are you sure you want to delete this record?"))
		{
			window.location.href='delete_record.php?deluserid='+id;
			return true;
		}
	}

	</script>
</head>
<body>
<!--<div class="se-pre-con"></div>-->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          	</button>
          	<a class="navbar-brand" href="#"  style="color: #FFFFFF;">SPES ADMIN</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          	<li><a>Welcome <?php echo $vusername; ?>!</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
	</div>
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="sidenav">
			<ul class="nav nav-sidebar">
				<br>
				<li><h4>Menu</h4></li>
	            <li><a href="test.php">SPES Accounts</a></li>
	            <li class="active"><a href="test.php">User Accounts</a></li>
	        </ul>
	  	</div>
	</div>
	
	<div class="row">
		<div class="content">
			<form name="form1" method="post" action="test.php">
				<h3>Accounts</h3>
                <div class="table-responsive">
                	<table id="example" class="display table-striped" style="width:100%; height: 100%;">
            		<thead>		       
						<tr>
							<th>Action</th>
							<th>Surname</th>
							<th>First Name</th>
							<th>Username</th>
							<th>Password</th>
							<th>Status</th>
							<th>Gender</th>
							<th>Date of Birth</th>
							<th>Spes Availment</th>
							<th>Year Availed</th>
						</tr>
					</thead>
					<tbody>
						<?php

						// $getusers="SELECT 'spesID','username','password','surName','firstName','status','gender','doBirth','historySpes','historyYear' FROM pesodb.spesaccount";
						$result = mysql_query("SELECT * FROM spesaccount"); 
						// $result=mysql_query($getusers);

						while($row=mysql_fetch_array($result)) 
						{ 

							$userid = $row['id'];							
							$sname = $row['surName'];
							$fname = $row['firstName'];
							$username = $row['username'];
							$userpass = $row['password'];
							$stat = $row['status'];
							$gender = $row['gender'];
							$dob = $row['doBirth'];
							$hspes = $row['historySpes'];
							$hyear = $row['historyYear'];

							?>
							<tr>
								<td>
								<a href="javascript:void(0)" onclick="centerPopupWindow(500,540,20,'update_user.php?updateuserid=<?php echo $userid; ?>','demo_win');"><img src="images2/icon_view.png" height='18px'></a>
								 | 
								<a href="javascript:confirmDelete(<?php echo $userid; ?>)"><img src="images2/icon_delete.png" height='18px'></a>
								</td>
								<td><?php echo $sname; ?></td>
								<td><?php echo $fname; ?></td>
								<td><?php echo $username; ?></td>
								<td><?php echo $userpass; ?></td>								
								<td><?php echo $stat; ?></td>								
								<td><?php echo $gender; ?></td>
								<td><?php echo $dob; ?></td>
								<td><?php echo $hspes; ?></td>
								<td><?php echo $hyear; ?></td>
							</tr>
							<?php
						}
					?>
					</tbody>
					</table>
                </div>
                <input type="hidden" name="vftrmonth" id="vftrmonth" value="<?php echo $vftrmonth; ?>">
                <input type="hidden" name="vftryear" id="vftryear" value="<?php echo $vftryear; ?>">
			</form>
		</div>
	</div>

</div>
</body>
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
    
    $("div.toolbar").html("<a href='javascript:void(0)' onclick='centerPopupWindow(500,550,20,addurl,demowin);'><img src='images2/clip_add.png' title='Add' height='30px'><a href='' onclick='pageRefresh()'><img src='images2/clip_refresh.png' title='Refresh' height='28px'></a>");
} );

</script>
</html>