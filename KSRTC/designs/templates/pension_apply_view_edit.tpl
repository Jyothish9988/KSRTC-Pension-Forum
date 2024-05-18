<html>
<head>
	<title>Pension Updation</title>
</head>
<body>

	<!-- .................................................................. -->
<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Pension Updation</h1>
<ul class="custom-flex justify-content-center">
<li class="fw-500">
<!-- <a href="user/index.html" class="text-custom-white"></a> -->
</li>
 <li class="active fw-500">

</li>
</ul>
</div>
</div>
</div>
</div>

<!-- .................................................................. -->
	<center><h2><u><b></b></u></h2>
		<center> 
		<table >

 {foreach from=$view2 item="f"}
			<form method="POST" action="">
				<input type="hidden" name="hide" value="h">
			</center>
				<!-- <tr><td align="right-side"><b>Photo</b></td><td><input type="file" name="Photo" value="{$f.Photo}" readonly></td></tr> -->
				<center>
				<tr><td><b>Name</b></td><td><input type="text" name="Name" value="{$f.Name}" readonly class="form-control"></td></tr>

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
                              <tr><td><b>Depo</b></td><td><input type="text" name="Depo" value="{$f.Depo}" readonly class="form-control"></td></tr>

				<tr><td><b>Father Name</b></td><td><input type="text" name="fathername"class="form-control" value="{$f.fathername}" ></td></tr>
				<tr><td><b>Mother Name</b></td><td><input type="text" name="mothername" class="form-control" value="{$f.mothername}"></td></tr>
				<tr><td><b>Maritial Status</b></td><td><select name="marital" class="form-control" >
						<option>{$f.marital}</option>
						<option>Select</option>
						<option>Married</option>
						<option>Unmarried</option>
						<option>Other</option>
					</select>
				</td>
			</tr>
			<tr><td><b>Nationality</b></td><td><input type="text" name="nationality"  class="form-control" value="{$f.nationality}"></td></tr>
			<tr><td><b>State</b></td><td><input type="text" name="state" value="{$f.state}" class="form-control" ></td></tr>
			<tr>
      <td><b>D.O.B</b></td>
      <td><input type="date" name="DOB"  value="{$f.DOB}" readonly class="form-control" ></td>
           </tr>
      <tr><td><b>Religion</b></td><td><input type="text" name="religion" value="{$f.religion}" class="form-control" ></td></tr>
      <tr><td><b>Category</b></td><td><input type="text" name="category" value="{$f.category}" class="form-control"></td></tr>
      <tr><td><b>Address</b></td><td><textarea name="Address" class="form-control" >{$f.Address}</textarea></tr>

<tr>
      <td><b>Retirement Date</b></td>
      <td><input type="date" name="Retirementdate" value="{$f.Retirementdate}" readonly class="form-control" ></td>
</tr>

<tr><td><b>Aadhar Number</b></td><td><input type="number" name="Adharno" value="{$f.Adharno}" readonly class="form-control" ></td></tr>

<tr><td><b>Contact Number</b></td><td><input type="number" name="Contactno" class="form-control" placeholder="+91" value="{$f.Contactno}" readonly></td></tr>

<tr><td><b>Email</b></td><td><input type="Email" placeholder="example@example.com" class="form-control" name="Email" value="{$f.Email}" readonly></td></tr>



      <tr>
      <td>
            <b>Qualifying Service Period </b>
      </td>

     {if $f.qsvcp=='10-20'}
     <td>
      <input type="radio"  name="qsvcp"  value="10-20" checked >10-20 yrs
            <input type="radio"  name="qsvcp" value=">20" >>20 yrs</td>
      {else}
      <td>
      <input type="radio"  name="qsvcp" value="10-20">10-20 yrs
      <input type="radio"  name="qsvcp" value=">20" checked>>20 yrs</td>

{/if}

               </tr>

<tr>
      <td><b>Last Basic Pay</b></td>
      <td><input type="text" name="lbp" class="form-control" value="{$f.lbp}"></td>
</tr>

<tr>
      <td><b>Daily Allowance</b></td>
      <td><input type="text" name="da" class="form-control" value="{$f.da}"></td>
</tr>

<tr>
      <td><b>Provident Fund</b></td>
      <td><input type="text" name="pf" class="form-control" value="{$f.pf}"></td>
</tr>



<tr>
      <td><b>Qualifying Service Period</b></td>
      <td><input type="text" name="qsvcpy" class="form-control" value="{$f.qsvcpy}"></td>
</tr>


<tr><th><button type="submit" class="btn-first btn-submit" class="form-control">SUBMIT</button></th></tr> 


</form>
</table>

{/foreach}
</center>
</body>
</html>