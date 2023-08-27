<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<form action="skill_history.php" method="post">
		<div class="container">
			<form id="parents">
				<p><b>Skills</b></p>
					<input type="checkbox" id="skill1" name="skill1">
					<label for="skill1"> Dance</label>&nbsp&nbsp&nbsp&nbsp
					<input type="checkbox" id="skill2" name="skill2">
					<label for="skill2"> Sing</label>&nbsp&nbsp&nbsp&nbsp
					<input type="checkbox" id="skill3" name="skill3">
					<label for="skill3"> Act</label>&nbsp&nbsp&nbsp&nbsp
					<input type="checkbox" id="skill4" name="skill4">
					<label for="skill4"> Cook</label>&nbsp&nbsp&nbsp&nbsp
					<input type="checkbox" id="skill5" name="skill5">
					<label for="skill5"> Program</label>&nbsp&nbsp&nbsp&nbsp
					<input type="checkbox" id="skill5" name="skill5">
					<label for="skill5"> Writing</label>&nbsp&nbsp&nbsp&nbsp
					<input type="checkbox" id="skill6" name="skill6">
					<label for="skill6"> Reporting</label>&nbsp&nbsp&nbsp&nbsp



					<br><br><br>
					
					<label>History of SPES Availment:</label>&nbsp&nbsp
						<select id="spesAvail">
						<option value="one">1st Availment</option>
						<option value="two">2nd Availment</option>
						<option value="three">3rd Availment</option>
						<option value="four">4th Availment</option>
						</select>
					<label>Year:</label>
					<input type="text" name="spesYear" id="spesYear">&nbsp&nbsp
					<label>SPES ID No.:</label>
					<input type="text" name="spesID" id=m"spesID">
					<br><br><br>
					<center><a href="#" onclick="history.go(-1)">&laquo; Prev</a>
					<input type="submit" name="okreg" id="ok"></center>
			</form>	
		</div>
	</form>
</body>
</html>