<!DOCTYPE html>
<html>
<head>
	<title>wew</title>
</head>
<body>
<form action="sample.php" method="POST">
<label>User</label>
<input type="text" name="uName">
<label>Pass</label>
<input type="password" name="pass">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("login") or die (mysql_error());
$message1 = "Created Account Successfully!";
$message2 = "Failed to create account!";

 if(isset($_POST['submit'])){
	$uName = $_POST['uName'];
    $pass = $_POST['pass'];

	$query = "INSERT INTO users (username,password) values('$uName','$pass')";
 if(mysql_query($query)){
    echo "<script type='text/javascript'>alert('$message1');</script>";
  } 
}
?>
