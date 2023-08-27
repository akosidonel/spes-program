<?php
session_start();
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("spesdb") or die (mysql_error());
$message1 = "Profile Successfuly Deleted!";

      

if(isset($_GET["deluserid"]))
{
	$vuserid = $_GET["deluserid"];
	$setprodtype = "DELETE FROM spesaccounts WHERE id = '$vuserid' ";
  	mysql_query($setprodtype);
  	?>
	<script>
	    window.location.href="adminIndex.php";
    </script>
	<?php
}