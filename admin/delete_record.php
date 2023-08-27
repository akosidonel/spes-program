<?php
session_start();
include('../dbconnection/dbconnection.php');
$message1 = "Profile Successfuly Deleted!";
if(isset($_GET["deluserid"]))
{
	$vuserid = $_GET["deluserid"];
	$setprodtype = mysqli_query($conn, "DELETE FROM spesaccount WHERE id = '$vuserid'");
?>
	<script>
	    window.location.href="adminIndex.php";
    </script>
	<?php
}