<html>
<head>
	<title>Registration form</title>
	{literal}
	<script>    
				function registration()
	{
		
		var name= document.getElementById("t1").value;
		var email= document.getElementById("t2").value;
		var pwd= document.getElementById("t3").value;
		var contact=document.getElementById("t4").value;
		var pincode=document.getElementById("t5").value;  
		var address=document.getElementById("t6").value;
		var dis=document.getElementById("t7").value;
		var dob=document.getElementById("t9").value;
		var depo=document.getElementById("t10").value;
		var male=document.getElementById("male");
		var female=document.getElementById("female");
		// var gen=document.getElementById("t11").value
		  // var genderM=form.gender_male;
    // var genderF=form.gender_female;

		
				//email id expression code
	var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
		var letters = /^[A-Za-z]+$/;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var number= /^[0-9]+$/;
		
		if(name=='')
		{
			alert('Please enter your name');
			return false;
		}
		else if(!letters.test(name))
		{
			alert('Name field required only alphabet characters');
			return false;
		}
		if(address=="")
		{
		 alert("Please enter your address.");
		return false;
		}
		if(pincode=='')
		{
			alert('Please enter your pincode');
			return false;
		}
		else if(!number.test(pincode))
		{
			alert('Pincode field required only numbers');
			return false;
		}
		if(document.getElementById("t5").value.length != 6)
		{
			alert ('Pincode minimum length is 6');
			return false;
		}
		if(dis=='Select')
		{
			alert('District should not be empty');
			return false;
		}


		if ( ( male.checked == false ) && ( female.checked == false ) ) 
  {
  alert ( "Please choose your Gender: Male or Female" ); 
  return false;
  }

   


		if(dob=='')
		{
			alert('DOB IS EMPTY');
			return false;
		}
	
		 
		 	if(depo=='Select')
		{
			alert('Depo should not be empty');
			return false;
		}


		 if(contact=='')
		
		{
			alert('Please enter your contact');
			return false;
		}
		else if(!number.test(contact))
		{
			alert('Contact Number field required only numbers ');
			return false;
		}
		if(document.getElementById("t4").value.length < 10)
		{
			alert ('Contact Number minimum length is 10');
			return false;
		}
		else if(document.getElementById("t4").value.length > 10)
		{
			alert ('Contact Number minimum length is 10');
			return false;
		}
		
		if(email=='')
		{
			alert('Please enter your user email id');
			return false;
		}
		else if(!filter.test(email))
		{
			alert('Invalid email');
			return false;
		}
	
		 if(pwd=='')
		{
			alert('Please enter Password');
			return false;
		}
		 else if(!pwd_expression.test(pwd))
		{
			alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
			return false;
		}
		
		if(document.getElementById("t3").value.length < 6)
		{
			alert ('Password minimum length is 6');
			return false;
		}
		else if(document.getElementById("t3").value.length > 12)
		{
			alert ('Password max length is 12');
			return false;
		}
		 else{
			return true;
		}

 

 
	}

		</script> 
		{/literal}
</head>
<body>

	<!-- ............................... -->
<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Stationmaster Registration</h1>
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
	<!-- .................................... -->
	<center><!-- <h2><u><b>Registration form</b></u></h2> -->
		<table align="center" >
			<form method="POST" action="" onsubmit="return registration()">
				<input type="hidden" name="hide" value="h">
				<tr><td>Name</td><td><input type="text" name="Name" id="t1" class="form-control"></td></tr>
				<tr><td>Address</th><td><textarea name="Address" class="form-control" id="t6"></textarea></td></tr>
				<tr><td>Pincode</td><td><input type="number" name="Pincode" class="form-control" id="t5"></td></tr>
				<tr><td>District</td>
					<td><select name="District" class="form-select" id="t7">
						<option>Select</option>
						<option>Thriuvananthapuram</option>
						<option>Kollam</option>
						<option>Pathanamthitta</option>
						<option>Alapuzha</option>
						<option>Kottayam</option>
						<option>Idukki</option>
						<option>Ernamkulam</option>
						<option>Thrissur</option>
						<option>Palakkad</option>
						<!-- <option>Malapuram</option> -->
						<option>Kozhikod</option>
						<option>Wayanad</option>
						<option>Kannur</option>
						<option>Kasargod</option>
					</select></td></tr>
				<tr class="form-select"><td>Gender</td>
					<td><input type="radio" name="Gender" value="Male" id="male">Male
						<input type="radio" name="Gender" value="Female" id="female">Female</td></tr>	
					<tr><td>D.O.B</td><td><input type="date" name="DOB" class="form-control" id="t9"></td></tr>
				<!-- <tr><td>Depo</td><td><input type="text" name="Depo" class="form-control"></td></tr> -->
<tr><td>Depo</td>
					<td><select name="Depo" class="form-control" id="t10">
						<option>Select</option>
<option>ADOOR </option>
<option>ALAPPUZHA </option>
<option>ALUVA</option>
<option>ANAYARA </option>
<option>ANKAMALI </option>
<option>ARYANAD </option>
<option>ARYANKAVU</option>
<option>ATTINGAL</option>
<option>BANGALORE</option>
<option>CHADAYAMANGALAM</option>
<option>CHALAKUDY</option>
<option>CHANGANASSERY </option>
<option>CHATHANNUR </option>
<option>CHENGANOOR </option>
<option>CHERTHALA</option>
<option>CHITOOR</option>
<option>EDATHUVA</option>
<option>EENCHAKKAL </option>
<option>EERATTUPETTAH </option>
<option>ERNAKULAM</option>
<option>ERUMELY</option>
<option>GURUVAYOOR </option>
<option>HARIPPAD </option>
<option>IRINJALAKKUDA </option>
<option>KALPETTA </option>
<option>KANHANGAD </option>
<option>KANIYAPURAM </option>
<option>KANNUR </option>
<option>KARUNAGAPALLY </option>
<option>KASARAGOD </option>
<option>KATTAKADA</option>
<option>KATTAPPANA </option>
<option>KILIMANOOR</option>
<option>KODUNGALOOR </option>
<option>KONNI </option>
<option>KOOTHATTUKULAM </option>
<option>KOTHAMANGALAM </option>
<option>KOTTARAKKARA </option>
<option>KOTTAYAM </option>
<option>KOZHIKODE</option>
<option>KULATHUPUZHA </option>
<option>KUMALY </option>
<option>MALA</option>
<option>MALAPPURAM </option>
<option>MALLAPALLY </option>
<option>MANANTHAVADY </option> 
<option>MANNARGHAT</option>
<option>MAVELIKARA</option>
<option>MOOLAMATTOM </option>
<option>MOOVATTUPUZHA</option>
<option>MUNNAR </option>
<option>NEDUMANGAD</option> 
<option>NEDUMKANDAM </option>
<option>NEYYATINKARA </option>
<option>NILAMBUR</option>
<option>NORTH PARAVUR </option>
<option>PALA </option>
<option>PALAKKAD </option>
<option>PALODE </option>
<option>PAMBA </option>
<option>PANDALAM </option>
<option>PAPPANAMCODE </option>
<option>PARASSALA</option>
<option>PATHANAMTHITTA</option>
<option>PATHANAPURAM </option>
<option>PAYYANUR </option>
<option>PERINTHAMANNA </option>
<option>PEROORKADA</option>
<option>PERUMBAVOOR </option>
<option>PIRAVOM </option>
<option>PONKUNNAM </option>
<option>POOVAR </option>
<option>PUNALUR </option>
<option>PUTHUKKADU </option>
<option>RANNI </option>
<option>SULTHAN BATHERY</option>
<option>THALASSERY </option>
<option>THAMARASSERY</option>
<option>THIRUVALLA</option>
<option>THIRUVAMBADY </option>
<option>THODUPUZHA </option>
<option>THOTTILPALAM </option>
<option>THRISSUR </option>
<option>TVM CITY </option>
<option>VADAKARA </option>
<option>VADAKKANCHERY </option>
<option>VAIKOM </option>
<option>VELLANAD </option>
<option>VELLARADA </option>
<option>VENJARAMOODU</option> 
<option>VIKASBHAVAN </option>
<option>VIZHINJAM </option>
					</select></td></tr>
				<tr><td>Contact Number</td><td><input type="tel" placeholder="+91" name="Contactno" class="form-control" id="t4"></td></tr>
				<tr><td>Email</td><td><input type="email" name="Email" id="t2" class="form-control"></td></tr>
				<tr><td>Password</td><td><input type="password" name="Password" id="t3" class="form-control"></td></tr>
				<table align="center">
					<tr>
						<td><input type="submit" value="submit" class="btn btn-success" ></td>
						<!-- <td><a href="home.php">GO TO HOME</a></td> -->
					</tr>
				</table>
			</form>
		</table>
	</center>
</body>
</html>