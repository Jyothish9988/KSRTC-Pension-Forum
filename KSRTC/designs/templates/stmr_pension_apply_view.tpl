<html>
<head>
	<title>Pension Apply View</title>
</head>
<body>
	<center><h2><u><b>Pension Apply View</b></u></h2>
		<center>
		<table >
 
 {foreach from=$view2 item="f"}
			<form method="POST" action="">
				<input type="hidden" name="hide" value="h">
			</center>
				<!-- <tr><td align="right-side"><b>Photo</b></td><td><input type="file" name="Photo" value="{$f.Photo}" readonly></td></tr> -->
				<center>
				<tr><td><b>Name</b></td><td><input type="text" name="Name" value="{$f.Name}" readonly></td></tr>

	<tr>
      <td>
            <b>Gender</b>
      </td>

     {if $f.Gender=='Male'}
     <td>
      <input type="radio"  name="Gender"  value="Male" checked >Male
            <input type="radio"  name="Gender" value="Female" >Female</td>
      {else}
      <td>
      <input type="radio"  name="Gender" value="Male">Male
      <input type="radio"  name="Gender" value="Female" checked>Female</td>

{/if}

               </tr>
				<tr><td><b>Father Name</b></td><td><input type="text" name="fathername" value="{$f.fathername}"></td></tr>
				<tr><td><b>Mother Name</b></td><td><input type="text" name="mothername" value="{$f.mothername}"></td></tr>
				<tr><td><b>Maritial Status</b></td><td><select name="marital">
						<option>{$f.marital}</option>
						<option>Married</option>
						<option>Unmarried</option>
						<option>Other</option>
					</select>
				</td>
			</tr>
			<tr><td><b>Nationality</b></td><td><input type="text" name="nationality" value="{$f.nationality}"></td></tr>
			<tr><td><b>State</b></td><td><input type="text" name="state" value="{$f.state}"></td></tr
			<tr>
      <td><b>D.O.B</b></td>
      <td><input type="date" name="DOB"  value="{$f.DOB}" readonly></td>
           </tr>
      <tr><td><b>Religion</b></td><td><input type="text" name="religion" value="{$f.religion}"></td></tr>
      <tr><td><b>Category</b></td><td><input type="text" name="category" value="{$f.category}"></td></tr>
      <tr><td><b>Address</b></td><td><textarea name="Address">{$f.Address}</textarea></tr>

<tr>
      <td><b>Retirement Date</b></td>
      <td><input type="date" name="Retirementdate" value="{$f.Retirementdate}" readonly></td>
</tr>

<tr><td><b>Aadhar Number</b></td><td><input type="number" name="Adharno" value="{$f.Adharno}" readonly></td></tr>

<tr><td><b>Contact Number</b></td><td><input type="number" name="Contactno" placeholder="+91" value="{$f.Contactno}" readonly></td></tr>

<tr><td><b>Email</b></td><td><input type="Email" placeholder="example@example.com" name="Email" value="{$f.Email}" readonly></td></tr>

<tr><th><button type="submit" class="btn-first btn-submit">SUBMIT</button></th></tr> 


</form>
</table>

{/foreach}
</center>
</body>
</html>