<?php /* Smarty version 2.6.26, created on 2022-04-25 12:11:27
         compiled from pension.tpl */ ?>
<html>
<head>
<title>Pension</title>
</head>
<body>
	<center><h2><u><b>Pension form</b></u></h2>
		<form method="POST" action="">	<input type="hidden" name="hide" value='h'>
		<table align="center">
			<tr><td>Name</td><td><input type="text" name="Name"></td></tr>
			<tr><td>Address</td><td><textarea name="Address"></textarea></td></tr>
			<tr><td>Pincode</td><td><input type="number" name="Pincode"></td></tr>
			<tr><td>District</td><td><select name="District">
						<option>Thriuvananthapuram</option>
						<option>Kollam</option>
						<option>Pathanamthitta</option>
						<option>Alapuzha</option>
						<option>Kottayam</option>
						<option>Idukki</option>
						<option>Ernamkulam</option>
						<option>Thrissur</option>
						<option>Palakkad</option>
						<option>Malapuram</option>
						<option>Kozhikod</option>
						<option>Wayanad</option>
						<option>Kannur</option>
						<option>Kasargod</option>
					</select></td></tr>
			<tr><td>Gender</td><td><input type="radio" value="male" name="Gender">Male
				<input type="radio" value="female" name="Gender">Female</td></tr>
			<tr><td>D.O.B</td><td><input type="date" name="DOB"></td></tr>
			<tr><td>Retirement Date</td><td><input type="date" name="Retirementdate"></td></tr>
			<tr><td>Adhaar number</td><td><input type="number" name="Adharno"></td></tr>
			<tr><td>Contact number</td><td><input type="tel" placeholder="+91" name="Contactno"></td></tr>
			<tr><td>Photo</td><td><input type="file" name="Photo"></td></tr>
			<tr><td>Email</td><td><input type="email" name="Email"></td></tr>
			<tr><td>Password</td><td><input type="password" name="Password"></td></tr>
			<table align="center">
				<tr><td><input type="submit" value="submit"></td></tr>
		</table>
	</form>
</table>
</center>
</body>
</html>