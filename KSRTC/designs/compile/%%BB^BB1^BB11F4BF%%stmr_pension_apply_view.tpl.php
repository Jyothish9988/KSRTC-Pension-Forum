<?php /* Smarty version 2.6.26, created on 2022-05-13 18:53:36
         compiled from stmr_pension_apply_view.tpl */ ?>
<html>
<head>
	<title>Pension Apply View</title>
</head>
<body>
	<center><h2><u><b>Pension Apply View</b></u></h2>
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
" readonly></td></tr>

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
				<tr><td><b>Father Name</b></td><td><input type="text" name="fathername" value="<?php echo $this->_tpl_vars['f']['fathername']; ?>
"></td></tr>
				<tr><td><b>Mother Name</b></td><td><input type="text" name="mothername" value="<?php echo $this->_tpl_vars['f']['mothername']; ?>
"></td></tr>
				<tr><td><b>Maritial Status</b></td><td><select name="marital">
						<option><?php echo $this->_tpl_vars['f']['marital']; ?>
</option>
						<option>Married</option>
						<option>Unmarried</option>
						<option>Other</option>
					</select>
				</td>
			</tr>
			<tr><td><b>Nationality</b></td><td><input type="text" name="nationality" value="<?php echo $this->_tpl_vars['f']['nationality']; ?>
"></td></tr>
			<tr><td><b>State</b></td><td><input type="text" name="state" value="<?php echo $this->_tpl_vars['f']['state']; ?>
"></td></tr
			<tr>
      <td><b>D.O.B</b></td>
      <td><input type="date" name="DOB"  value="<?php echo $this->_tpl_vars['f']['DOB']; ?>
" readonly></td>
           </tr>
      <tr><td><b>Religion</b></td><td><input type="text" name="religion" value="<?php echo $this->_tpl_vars['f']['religion']; ?>
"></td></tr>
      <tr><td><b>Category</b></td><td><input type="text" name="category" value="<?php echo $this->_tpl_vars['f']['category']; ?>
"></td></tr>
      <tr><td><b>Address</b></td><td><textarea name="Address"><?php echo $this->_tpl_vars['f']['Address']; ?>
</textarea></tr>

<tr>
      <td><b>Retirement Date</b></td>
      <td><input type="date" name="Retirementdate" value="<?php echo $this->_tpl_vars['f']['Retirementdate']; ?>
" readonly></td>
</tr>

<tr><td><b>Aadhar Number</b></td><td><input type="number" name="Adharno" value="<?php echo $this->_tpl_vars['f']['Adharno']; ?>
" readonly></td></tr>

<tr><td><b>Contact Number</b></td><td><input type="number" name="Contactno" placeholder="+91" value="<?php echo $this->_tpl_vars['f']['Contactno']; ?>
" readonly></td></tr>

<tr><td><b>Email</b></td><td><input type="Email" placeholder="example@example.com" name="Email" value="<?php echo $this->_tpl_vars['f']['Email']; ?>
" readonly></td></tr>

<tr><th><button type="submit" class="btn-first btn-submit">SUBMIT</button></th></tr> 


</form>
</table>

<?php endforeach; endif; unset($_from); ?>
</center>
</body>
</html>