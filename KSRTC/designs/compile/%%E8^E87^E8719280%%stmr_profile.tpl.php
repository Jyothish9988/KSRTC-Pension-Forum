<?php /* Smarty version 2.6.26, created on 2022-09-24 11:01:34
         compiled from stmr_profile.tpl */ ?>





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

<?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>


<tr><td><b>Name</b></td><td><input type="text" name="Name" class="form-control form-control-custom" value="<?php echo $this->_tpl_vars['j']['Name']; ?>
"></td></tr>

<tr><td><b>Address</b></td><td><textarea name="Address"  class="form-control form-control-custom" name="Address"><?php echo $this->_tpl_vars['j']['Address']; ?>
</textarea></td></tr>

<tr><td><b>Pincode</b></td><td><input type="text" name="Pincode" class="form-control form-control-custom" placeholder="Pincode" required value="<?php echo $this->_tpl_vars['j']['Pincode']; ?>
"></td></tr>
 <div>
 <tr><td><b>District</b></td><th><select name="District" class="custom-select form-control form-control-custom">
                                    <option><?php echo $this->_tpl_vars['j']['District']; ?>
</option>
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

     <?php if ($this->_tpl_vars['j']['Gender'] == 'Male'): ?>
     <td>
      <input type="radio"  name="Gender"  value="Male" checked >Male
            <input type="radio"  name="Gender" value="Female" >Female</td>
      <?php else: ?>
      <td>
      <input type="radio"  name="Gender" value="Male">Male
      <input type="radio"  name="Gender" value="Female" checked>Female</td>

<?php endif; ?>
</tr>


<tr>
      <td><b>D.O.B</b></td>
      <td><input type="date" value="<?php echo $this->_tpl_vars['j']['DOB']; ?>
"  name="DOB" class="form-control form-control-custom" ></td>
</tr>

<tr><td><b>Depo</b></td><td><input type="text" name="Depo" class="form-control form-control-custom" value="<?php echo $this->_tpl_vars['j']['Depo']; ?>
"></td></tr>

<tr><td><b>Contact number</b></td><td><input type="tel" placeholder="+91" name="Contactno" class="form-control form-control-custom" value="<?php echo $this->_tpl_vars['j']['Contactno']; ?>
"></td></tr>


<tr><td><b>Email</b></td><td><input type="Email" placeholder="example@example.com" name="Email" class="form-control form-control-custom" value="<?php echo $this->_tpl_vars['j']['Email']; ?>
"></td></tr>

<tr><td></td><th><button type="submit" class="btn-first btn-submit">SUBMIT</button></th></tr>             

<?php endforeach; endif; unset($_from); ?>
           
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