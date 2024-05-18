<?php /* Smarty version 2.6.26, created on 2022-10-09 11:17:42
         compiled from pension_apply_view_edit.tpl */ ?>
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

 <?php $_from = $this->_tpl_vars['view2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['f']):
?>
			<form method="POST" action="">
				<input type="hidden" name="hide" value="h">
			</center>
				<!-- <tr><td align="right-side"><b>Photo</b></td><td><input type="file" name="Photo" value="<?php echo $this->_tpl_vars['f']['Photo']; ?>
" readonly></td></tr> -->
				<center>
				<tr><td><b>Name</b></td><td><input type="text" name="Name" value="<?php echo $this->_tpl_vars['f']['Name']; ?>
" readonly class="form-control"></td></tr>

	<tr>
      <td>
            <b>Gender</b>
      </td>

     <?php if ($this->_tpl_vars['f']['Gender'] == 'Male'): ?>
     <td>
      <input type="radio"  name="Gender"  value="Male" checked >Male
            <input type="radio"  name="Gender" value="Female" >Female</td>
      <?php else: ?>
      <td>
      <input type="radio"  name="Gender" value="Male">Male
      <input type="radio"  name="Gender" value="Female" checked>Female</td>

<?php endif; ?>

               </tr>
                              <tr><td><b>Depo</b></td><td><input type="text" name="Depo" value="<?php echo $this->_tpl_vars['f']['Depo']; ?>
" readonly class="form-control"></td></tr>

				<tr><td><b>Father Name</b></td><td><input type="text" name="fathername"class="form-control" value="<?php echo $this->_tpl_vars['f']['fathername']; ?>
" ></td></tr>
				<tr><td><b>Mother Name</b></td><td><input type="text" name="mothername" class="form-control" value="<?php echo $this->_tpl_vars['f']['mothername']; ?>
"></td></tr>
				<tr><td><b>Maritial Status</b></td><td><select name="marital" class="form-control" >
						<option><?php echo $this->_tpl_vars['f']['marital']; ?>
</option>
						<option>Select</option>
						<option>Married</option>
						<option>Unmarried</option>
						<option>Other</option>
					</select>
				</td>
			</tr>
			<tr><td><b>Nationality</b></td><td><input type="text" name="nationality"  class="form-control" value="<?php echo $this->_tpl_vars['f']['nationality']; ?>
"></td></tr>
			<tr><td><b>State</b></td><td><input type="text" name="state" value="<?php echo $this->_tpl_vars['f']['state']; ?>
" class="form-control" ></td></tr>
			<tr>
      <td><b>D.O.B</b></td>
      <td><input type="date" name="DOB"  value="<?php echo $this->_tpl_vars['f']['DOB']; ?>
" readonly class="form-control" ></td>
           </tr>
      <tr><td><b>Religion</b></td><td><input type="text" name="religion" value="<?php echo $this->_tpl_vars['f']['religion']; ?>
" class="form-control" ></td></tr>
      <tr><td><b>Category</b></td><td><input type="text" name="category" value="<?php echo $this->_tpl_vars['f']['category']; ?>
" class="form-control"></td></tr>
      <tr><td><b>Address</b></td><td><textarea name="Address" class="form-control" ><?php echo $this->_tpl_vars['f']['Address']; ?>
</textarea></tr>

<tr>
      <td><b>Retirement Date</b></td>
      <td><input type="date" name="Retirementdate" value="<?php echo $this->_tpl_vars['f']['Retirementdate']; ?>
" readonly class="form-control" ></td>
</tr>

<tr><td><b>Aadhar Number</b></td><td><input type="number" name="Adharno" value="<?php echo $this->_tpl_vars['f']['Adharno']; ?>
" readonly class="form-control" ></td></tr>

<tr><td><b>Contact Number</b></td><td><input type="number" name="Contactno" class="form-control" placeholder="+91" value="<?php echo $this->_tpl_vars['f']['Contactno']; ?>
" readonly></td></tr>

<tr><td><b>Email</b></td><td><input type="Email" placeholder="example@example.com" class="form-control" name="Email" value="<?php echo $this->_tpl_vars['f']['Email']; ?>
" readonly></td></tr>



      <tr>
      <td>
            <b>Qualifying Service Period </b>
      </td>

     <?php if ($this->_tpl_vars['f']['qsvcp'] == '10-20'): ?>
     <td>
      <input type="radio"  name="qsvcp"  value="10-20" checked >10-20 yrs
            <input type="radio"  name="qsvcp" value=">20" >>20 yrs</td>
      <?php else: ?>
      <td>
      <input type="radio"  name="qsvcp" value="10-20">10-20 yrs
      <input type="radio"  name="qsvcp" value=">20" checked>>20 yrs</td>

<?php endif; ?>

               </tr>

<tr>
      <td><b>Last Basic Pay</b></td>
      <td><input type="text" name="lbp" class="form-control" value="<?php echo $this->_tpl_vars['f']['lbp']; ?>
"></td>
</tr>

<tr>
      <td><b>Daily Allowance</b></td>
      <td><input type="text" name="da" class="form-control" value="<?php echo $this->_tpl_vars['f']['da']; ?>
"></td>
</tr>

<tr>
      <td><b>Provident Fund</b></td>
      <td><input type="text" name="pf" class="form-control" value="<?php echo $this->_tpl_vars['f']['pf']; ?>
"></td>
</tr>



<tr>
      <td><b>Qualifying Service Period</b></td>
      <td><input type="text" name="qsvcpy" class="form-control" value="<?php echo $this->_tpl_vars['f']['qsvcpy']; ?>
"></td>
</tr>


<tr><th><button type="submit" class="btn-first btn-submit" class="form-control">SUBMIT</button></th></tr> 


</form>
</table>

<?php endforeach; endif; unset($_from); ?>
</center>
</body>
</html>