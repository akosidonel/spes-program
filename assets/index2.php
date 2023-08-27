<!DOCTYPE html>
<?php
if (isset($_POST['submit'])) {
	$user = $_POST['uname'];
	$pass = $_POST['pwd'];
	$message1 = "Login success!";
	$message2 = "Incorrect!";
	if ($user=='admin' && $pass=='admin') {
		echo "<script type='text/javascript'>alert('$message1');</script>";
	}else{
		echo "<script type='text/javascript'>alert('$message2');</script>";

	}
}
?>
<html>
<head>
<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="loginbox">
	<img src="avatar.png" class="avatar">
		<h1>Login Here</h1>
		<form name="loginForm" method="post" action="home.html">
			<p>Username</p>
			<input type="text" name="uname" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="pwd" placeholder="Enter Password">
			<input type="submit" value="submit" name="submit">
			<a href="#">Forgot Password?</a><br>
			<a href="personalinfo.php">Create Account?</a>
		</form>
	</div>	
</body>
</head>
</html>
