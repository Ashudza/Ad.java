	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<title>job application registration</title>
	<style>
	body{
		background-image: url('nature.avif');
		background-size: cover;
		background-position: center;
	}
</style>
	</head>
	<body>
		<div>
		<form action="config.php" method="post">
			<div class="container">
				<h1><center>Job registration form</center></h1>
				<center><p><b>Fill up the form</b></p></center>
				<center><label for="fname" style="color:ghostwhite; font-size:160%;">First name &nbsp;</label>
				<input type="text" name="fname"required></center><br><br>
				<center><label for="lname" style="color:ghostwhite; font-size:160%;">Last name &nbsp;</label>
				<input type="text" name="lname"required></center><br><br>
				<center><label for="email" style="color:ghostwhite; font-size:160%;">Email id &nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="email" name="email"required><br><br></center>
				<center>
					<!--<div class="wrap-input100 validate-input" data-validate = "Enter Contact" style="color:ghostwhite; font-size:160%;">-->
						<label for="email" style="color:ghostwhite;font-size:160%;"> 
						Phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input100" type="text" name="phone" maxlength="10" pattern="^\d{10}$" title="please Enter 10  digits contact number" required="">
						<!--<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>--> </center><br><br>
				<center><label for="designation" style="color:ghostwhite; font-size:140%;">Designation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<select id="designation" name="designation">
					<option value="developer" style="color:blue;">Developer</option>
					<option value="testing" style="color:blue;">Testing</option>
					<option value="analyst" style="color:blue;">Analyst</option>
					<option value="design" style="color:blue;">Design</option>
				</select><br><br></center>
				<center><label for="dob" style="color:ghostwhite;font-size:160%;">Dob&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</label>
				<input type="date"name="dob"required><br><br></center>
				<center><label for="password" style="color:ghostwhite;font-size:160%;">Password &nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="password" name="password"required=""><br><br></center>
				 <center><label for="myfile" style="color:ghostwhite; font-size:160%;">Select a file &nbsp;&nbsp;</label>
				<input type="file" name="myfile" style="color:ghostwhite;" required=""><br><br></center>
				 <center><input type="Submit" name="create"value="Signup">
				<input type="Reset"value="Reset"><br></center>
				</div>
		 </form>
		</div>
</body>
</html>





