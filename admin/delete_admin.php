<?php
session_start();
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("spesdb") or die (mysql_error());
$message1 = "Profile Successfuly Deleted!";

      

if(isset($_GET["deluserids"]))
{
	$vuserid = $_GET["deluserids"];
	$setprodtype = "DELETE FROM pesoadmin WHERE userId = '$vuserid' ";
  	mysql_query($setprodtype);
  	?>
	<script>
	    window.location.href="adminindex2.php";
    </script>
	<?php
}