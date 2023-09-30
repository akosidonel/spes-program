<?php
session_start();
include('../dbconnection/dbconnection.php');
$message1 = "added to blacklisted";
if(isset($_GET["blacklistid"]))
{
	$vuserid = $_GET["blacklistid"];
    $blacklisted = 1;
	$setblacklisted = mysqli_query($conn, "UPDATE spesaccount SET is_blacklist = '$blacklisted' WHERE spes_id = '$vuserid' ");
?>
	<script>
	    window.location.href="adminIndex.php";
    </script>
	<?php
}