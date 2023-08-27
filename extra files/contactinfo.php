<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<script>
	function copyAddress() {
	  if (address.checked == true){
	  	cAdd.value=pAdd.value;
	  } else {
	  	cAdd.value=" ";
	  }
	}
</script>
	<form action="contactinfo.php" method="post">
		<div class="container">
			<form id="personalinfo">
				<p><b>Contact Information</b></p>
					<label>Permanent Address:</label><br>
					<textarea id="pAdd" rows="2" cols="100" style="background: transparent; color: white; font-size: 14px; border: none; border-bottom: 1px solid #fff;"></textarea>
					<br><br>
					<input type="checkbox" id="address" name="address" onclick="copyAddress()">
					<font size="2px"><label for="address"> Check this box if Permanent address and Current address are the same.</font></label><br><br>
					<label>Current Address:</label><br>
					<textarea id="cAdd" rows="2" cols="100" style="background: transparent; color: white; font-size: 14px; border: none; border-bottom: 1px solid #fff;"></textarea>
					<br><br>
					<label>Mobile No.:</label>
					<input type="text" name="phone" id="phone">&nbsp
					<label>Email:</label>
					<input type="email" name="email" id="email">&nbsp
					<label>Social Media Account:</label>
					<input type="text" name="socialmedia" id="socialmedia">
					<br><br><br>
					<center><a href="#" onclick="history.go(-1)">&laquo; Prev</a>
					<a href="parents.php" class="next">Next &raquo;</a></center>
			</form>	
		</div>
	</form>
</body>
</html>