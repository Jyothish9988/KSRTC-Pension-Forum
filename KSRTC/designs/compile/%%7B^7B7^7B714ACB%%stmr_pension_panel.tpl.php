<?php /* Smarty version 2.6.26, created on 2022-09-24 11:04:10
         compiled from stmr_pension_panel.tpl */ ?>
<html>
<head>
<title>pension feedback panel</title>
</head>
<body>

	<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Stationmaster Pension Panel</h1>
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
<div style="overflow-x:auto">
<table align="center">

<thead>
		<!-- <marquee behavior="scroll" direction="right"> -->

<tr>
<th>Name &nbsp;</th>
<th>Gender &nbsp;</th>
<th>Father Name &nbsp;</th>
<th>Mother Name &nbsp;</th>
<th>Maritial Status &nbsp;</th>
<th>Nationality &nbsp;</th>
<th>State &nbsp;</th>
<th>D.O.B &nbsp;</th>
<th>Religion &nbsp;</th>
<th>Category &nbsp;</th>
<th>Address &nbsp;</th>
<th>Retirement Date &nbsp;</th>
<th>Aadhar Number &nbsp;</th>
<th>Contact Number &nbsp;</th>
<th>Email &nbsp;</th>
<th>Qualifying Service Period &nbsp;</th>
<th>Last Basic Pay &nbsp;</th>
<th>Daily Allowance &nbsp;</th>
<th>Provident Fund &nbsp;</th>
<th>Qualifying Service Period &nbsp;</th>
<th>Retirement Certificate &nbsp;</th>
<th>Status &nbsp;</th>
</tr>
	<!-- <marquee behavior="scroll" direction="right"> -->

</thead>

<tbody>
<?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
<tr>
<td align="center"><?php echo $this->_tpl_vars['j']['Name']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['Gender']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['fathername']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['mothername']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['marital']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['nationality']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['state']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['DOB']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['religion']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['category']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['Address']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['Retirementdate']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['Adharno']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['Contactno']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['Email']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['qsvcp']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['lbp']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['da']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['pf']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['qsvcpy']; ?>
</td>
<td align="center"><a href="uploads/<?php echo $this->_tpl_vars['j']['pakey']; ?>
/<?php echo $this->_tpl_vars['j']['rcert']; ?>
" target="_blank" class="btn btn-success">Download</a></td>
<?php if ($this->_tpl_vars['j']['pass_status'] == 0): ?>
<td align="center"><a href="stmr_pension_panel_approve.php?key=<?php echo $this->_tpl_vars['j']['pakey']; ?>
" class="btn btn-success">Approve</a></td>
<?php elseif ($this->_tpl_vars['j']['pass_status'] == 1): ?>
<td align="center">&nbsp;Approved</td>
<?php endif; ?>
 </tr>

</tbody>


<!-- 

<tr>
	<td><?php echo $this->_tpl_vars['j']['Name']; ?>
</td>
	<td><?php echo $this->_tpl_vars['j']['date']; ?>
</td>
	 <td><a href="pension_feedback_edit.php?key=<?php echo $this->_tpl_vars['j']['fkey']; ?>
">edit</a></td>
            <td><a href="pension_feedback_delete.php?key=<?php echo $this->_tpl_vars['j']['fkey']; ?>
">delete</a></td>
</tr>
 -->

<?php endforeach; endif; unset($_from); ?> 

</table>
</div>
<!-- </marquee> -->
</body>
</center>
</html>