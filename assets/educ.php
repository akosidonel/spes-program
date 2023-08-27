<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<form action="parents_educ.php" method="post">
		<div class="container">
			<form id="educ">
				<p><b>Educational Information</b></p>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<label>School Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<label>Degree Earned/Course</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<label>Year/Level</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<label>Date attended</label><br>
					<label>Elementary: </label>&nbsp&nbsp<input type="text" name="esm" id="esm">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="text" name="dec" id="dec">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="text" name="yl" id="yl" size="10">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp					
					<input type="text" name="da" id="da" size="15">
					<br><br>
					<label>Secondary : </label>&nbsp&nbsp<input type="text" name="esm" id="esm">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="text" name="dec" id="dec">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="text" name="yl" id="yl" size="10">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp					
					<input type="text" name="da" id="da" size="15">
					<br><br>
					<label>Tertiary : </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="esm" id="esm">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="text" name="dec" id="dec">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="text" name="yl" id="yl" size="10">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp					
					<input type="text" name="da" id="da" size="15">
					<br><br>
					<label>Tech-Voc : </label>&nbsp&nbsp&nbsp&nbsp<input type="text" name="esm" id="esm">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="text" name="dec" id="dec">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="text" name="yl" id="yl" size="10">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp					
					<input type="text" name="da" id="da" size="15">
					<br><br><br>
					<center><a href="#" onclick="history.go(-1)">&laquo; Prev</a>
					<a href="skill_history.php" class="next">Next &raquo;</a></center>
			</form>	
		</div>
	</form>
</body>
</html>