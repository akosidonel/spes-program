<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<form action="parents.php" method="post">
		<div class="container">
			<form id="parents">
				<p><b>Parents Information</b></p>
					<label>Parent status:</label>
						<select id="pstat">
						<option value="living">Living Together</option>
						<option value="solo">Solo Parent</option>
						<option value="seperate">Seperated</option>
						</select>
					<br><br>
					<label>Father's Name:</label>
					<input type="text" name="father" id="father">&nbsp&nbsp
					<label>Contact Number:</label>
					<input type="text" name="fcnumber" id="fcnumber">&nbsp&nbsp
					<label>Status:</label>
						<select id="fpstat">
						<option value="fnone">-------------------------</option>
						<option value="fpwd">Person With Disability</option>
						<option value="fsenior">Senior Citizen</option>
						<option value="fip">Indigeneous People</option>
						<option value="fdw">Displaced Worker</option>
						</select>
					<br>
					<label>Occupation:</label>
					<input type="text" name="foccupation" id="foccupation">&nbsp&nbsp
					<label>Salary:</label>
					<input type="text" name="fsalary" id="fsalary">&nbsp&nbsp
					<br><br><br>
					<label>Mother's Name:</label>
					<input type="text" name="mother" id="mother">&nbsp&nbsp
					<label>Contact Number:</label>
					<input type="text" name="mcnumber" id="mcnumber">&nbsp&nbsp
					<label>Status:</label>
						<select id="mpstat">
						<option value="mnone">-------------------------</option>
						<option value="mpwd">Person With Disability</option>
						<option value="msenior">Senior Citizen</option>
						<option value="mip">Indigeneous People</option>
						<option value="mdw">Displaced Worker</option>
						</select>
					<br>
					<label>Occupation:</label>
					<input type="text" name="moccupation" id="moccupation">&nbsp&nbsp
					<label>Salary:</label>
					<input type="text" name="msalary" id=m"salary">&nbsp&nbsp
					<br><br><br>
					<center><a href="#" onclick="history.go(-1)">&laquo; Prev</a>
					<a href="educ.php" class="next">Next &raquo;</a></center>
			</form>	
		</div>
	</form>
</body>
</html>