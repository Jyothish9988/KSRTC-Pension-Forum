<html>
<head>
<title>Pension registration</title>
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
    var ret=document.getElementById("t11").value;
    var adh=document.getElementById("t12").value;
    var photo=document.getElementById("t13");
     var photoData=document.getElementById("t13").value;


let allowedMimes = ['png', 'jpg', 'jpeg']; //allowed image mime types
        let maxMb = 2; //maximum allowed size (MB) of image

        //email id expression code
  var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var number= /^[0-9]+$/;
    // var adhar= /^[2-9]{1}[0-9]{3}\s{1}[0-9]{4}\s{1}[0-9]{4}$/



    
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

   


   
  
     
      if(depo=='Select')
    {
      alert('Depo should not be empty');
      return false;
    }

 if(dob=='')
    {
      alert('DOB IS EMPTY');
      return false;
    }
  if(ret=='')
  {
    alert('Retirement date is empty');
    return false;
  }
  if(adh=='')
  {
    alert('Adhaar number is empty');
    return false;
  }
  else if((!number.test(adh))||(document.getElementById("t12").value.length!=12))
  {
    alert('Invalid Adhar number');
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

  


    if (photoData=='') 
    { // if the image input does not have value
      alert('No image selected');
      return false;            
    }

    else if(!allowedMimes.includes(photoData.split('.').pop()))
    {
      alert("Only png,jpg,jpeg alowed");
      return false;
    }

  else if ((photo.files[0].size / (1048576) > maxMb))
    { // if the file size is gratter than maxMb
     alert(`Image should be less than ${maxMb} MB`);       
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
    <div id="main">
    <!-- ................................................................................................ -->
    <div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Pension Registration</h1>
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

    <!-- ''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''' -->
    <!-- <center><h2><u><b>Pension form</b></u></h2> -->
        <center>
        <form method="POST" action="">  
            <input type="hidden" name="hide" value='h'>
        <table align="center">
            <tr><td>Name</td><td><input type="text" name="Name" class="form-control" id="t1" >
            <br>
            <span class='error_text' id='name_error'></span>
            </td></tr>
            <tr><td>Address</td><td><textarea name="Address" class="form-control" id="t6"></textarea></td></tr>
            <tr><td>Pincode</td><td><input type="number" name="Pincode" class="form-control" id="t5"></td></tr>
            <tr><td>District</td><td><select name="District" class="form-select" id="t7">
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
                        <option>Malapuram</option>
                        <option>Kozhikod</option>
                        <option>Wayanad</option>
                        <option>Kannur</option>
                        <option>Kasargod</option>
                    </select></td></tr>
            <tr><td>Gender</td><td><input type="radio" value="Male" name="Gender" id="male">Male
                <input type="radio" value="Female" name="Gender" id="female">Female</td></tr>
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
            <tr><td>D.O.B</td><td><input type="date" name="DOB" class="form-control" id="t9"></td></tr>
            <tr><td>Retirement Date</td><td><input type="date" name="Retirementdate" class="form-control" id="t11"></td></tr>
            <tr><td>Adhaar number</td><td><input type="text" name="Adharno" class="form-control" id="t12" ></td></tr>
            <tr><td>Contact number</td><td><input type="tel" placeholder="+91" name="Contactno" class="form-control" id="t4"></td></tr>
            <tr><td>Photo</td><td><input type="file" name="Photo" class="form-control" id="t13"></td></tr>
            <tr><td>Email</td><td><input type="email" name="Email" class="form-control" id="t2"></td></tr>
            <tr><td>Password</td><td><input type="password" name="Password" class="form-control" id="t3" ></td></tr>
            <center>
                <tr>
                    <td><input type="submit" value="Submit" onClick="return registration()" class="btn btn-success" ></td>
                    <!-- <td><a href="home.php" >GO TO HOME</a></td> -->
                </tr>
            </center>
    </table>
    
</form>
</center>
</div>
</body>
</html>