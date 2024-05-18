




<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Stationmaster Profile</h1>
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


<section class="section-padding bg-light-white booking-form">
<div class="container">
<div class="row">
<div class="col-12">
<div class="tabs">
<ul class="custom-flex nav nav-tabs">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#hotel-booking">Profile Form</a>
<!---------------------------------------------------------------------------------------------------------------->
</li>
</ul>



<div class="tab-content bg-custom-white bx-wrapper padding-20">
<div class="tab-pane fade active show" id="hotel-booking">
<div class="tab-inner">
<div class="row">
<div class="col-lg-8">
<h2 class="text-custom-black"><b>Your Pension Information</b></h2>


<!----------------------------------------------------------------------------------------------------------------->
     
<form method="POST" action="">      
<input type="hidden" name="hide" value='h'>

<table align="center">

{foreach from=$view1 item="j"}


<tr><td><b>Name</b></td><td><input type="text" name="Name" class="form-control form-control-custom" value="{$j.Name}"></td></tr>

<tr><td><b>Address</b></td><td><textarea name="Address"  class="form-control form-control-custom" name="Address">{$j.Address}</textarea></td></tr>

<tr><td><b>Pincode</b></td><td><input type="text" name="Pincode" class="form-control form-control-custom" placeholder="Pincode" required value="{$j.Pincode}"></td></tr>
 <div>
 <tr><td><b>District</b></td><th><select name="District" class="custom-select form-control form-control-custom">
                                    <option>{$j.District}</option>
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
                              </select></th></tr>
                        </div>


<tr>
      <td>
            <b>Gender</b>
      </td>

     {if $j.Gender=='Male'}
     <td>
      <input type="radio"  name="Gender"  value="Male" checked >Male
            <input type="radio"  name="Gender" value="Female" >Female</td>
      {else}
      <td>
      <input type="radio"  name="Gender" value="Male">Male
      <input type="radio"  name="Gender" value="Female" checked>Female</td>

{/if}
</tr>


<tr>
      <td><b>D.O.B</b></td>
      <td><input type="date" value="{$j.DOB}"  name="DOB" class="form-control form-control-custom" ></td>
</tr>

<tr><td><b>Depo</b></td><td><input type="text" name="Depo" class="form-control form-control-custom" value="{$j.Depo}"></td></tr>

<tr><td><b>Contact number</b></td><td><input type="tel" placeholder="+91" name="Contactno" class="form-control form-control-custom" value="{$j.Contactno}"></td></tr>


<tr><td><b>Email</b></td><td><input type="Email" placeholder="example@example.com" name="Email" class="form-control form-control-custom" value="{$j.Email}"></td></tr>

<tr><td></td><th><button type="submit" class="btn-first btn-submit">SUBMIT</button></th></tr>             

{/foreach}
           
</table>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</body>
</html>


<!----------------------------------------------------------------------------------------------------->
<