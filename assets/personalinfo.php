<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<form action="personalinfo.php" method="post">
		<div class="container">
			<form id="personalinfo">
				<p><b>Personal Information</b></p>
					<label>Username:</label>
					<input type="text" name="uName" id="uName">&nbsp&nbsp
					<label>Password:</label>
					<input type="Password" name="pass" id="pass">&nbsp&nbsp
					<label>Status:</label>
						<select id="stat">
						<option value="single">Single</option>
						<option value="married">Married</option>
						<option value="widow">Widow/er</option>
						<option value="seperated">Seperated</option>
					</select>&nbsp&nbsp
					<label>Gender:</label>
					<select id="sex">
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>&nbsp&nbsp
					<br><br>
					<label>Surname:</label>
					<input type="text" name="sName" id="name">&nbsp&nbsp
					<label>First Name:</label>
					<input type="text" name="fName" id="name">&nbsp&nbsp
					<label>Middle Name:</label>
					<input type="text" name="mName" id="name">
					<br><br>
					<label>Date of Birth:</label>
					<input type="Date" name="dob" id="dob">&nbsp&nbsp
					<label>Place of Birth:</label>
					<input type="text" name="pob" id="pob">&nbsp&nbsp
					<label>Citizenship:</label>
					<input type="text" name="cship" id="cship">
					<br><br>
					<label>GSIS Beneficiary:</label>
					<input type="text" name="gsis" id="gsis">&nbsp&nbsp
					<label>Relationship:</label>
					<input type="text" name="relation" id="relation">
					<br><br><br>
					<center><a href="contactinfo.php" class="next">Next &raquo;</a></center><br>
					<a href="index2.html" class="cancel">Back to login</a>
			</form>	
		</div>
	</form>
</body>
</html>