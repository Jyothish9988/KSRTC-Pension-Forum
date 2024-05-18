<?php /* Smarty version 2.6.26, created on 2022-04-25 11:49:12
         compiled from registrationform.tpl */ ?>
<html>
<head>
	<title>Registration form</title>
</head>
<body>
	<center><h2><u><b>Registration form</b></u></h2>
		<table align="center">
			<form method="POST" action="">
				<input type="hidden" name="hide" value="h">
				<tr><td>Name</td><td><input type="text" name="Name"></td></tr>
				<tr><td>Address</th><td><textarea name="Address"></textarea></td></tr>
				<tr><td>Pincode</td><td><input type="number" name="Pincode"></td></tr>
				<tr><td>District</td>
					<td><select name="District">
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
				<tr><td>Gender</td>
					<td><input type="radio" name="Gender" value="Male">Male
						<input type="radio" name="Gender" value="Female">Female</td></tr>	
					<tr><td>D.O.B</td><td><input type="date" name="DOB"></td></tr>
				<tr><td>Depo</td><td><input type="text" name="Depo"></td></tr>
				<tr><td>Contact Number</td><td><input type="tel" placeholder="+91" name="Number"></td></tr>
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
