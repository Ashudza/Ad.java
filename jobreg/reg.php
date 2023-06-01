	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>job application registration</title>
	</head>
	<body>
		<div>
		<form action="config.php" method="post">
			<div class="container">
				<h1>Job registration form</h1>
				<p>fill up the form</p>
				<label for="fname">First name</label>
				<input type="text" name="fname"required><br><br>
				<label for="lname">Last name</label>
				<input type="text" name="lname"required><br><br>
				<label for="email">Email Id</label>
				<input type="email" name="email"required><br><br>
				<label for="phone">Phone</label>
				<input type="number" name="phone"required><br><br>
				<label for="designation">Designation</label>
				<select id="designation" name="designation">
					<option value="developer">Developer</option>
					<option value="testing">Testing</option>
					<option value="analyst">Analyst</option>
					<option value="design">Design</option>
				</select><br><br>
				<label for="dob">DOB</label>
				<input type="date"name="dob"required><br><br>
				<label for="password">Password</label>
				<input type="password" name="password"required><br><br>
				<label for="myfile">select a file</label>
				<input type="file" name="myfile"required><br><br>
				<input type="Submit" name="create"value="signup">
				<input type="Reset"value="Reset"><br>
				</div>
		 </form>
		</div>
</body>
</html>





s