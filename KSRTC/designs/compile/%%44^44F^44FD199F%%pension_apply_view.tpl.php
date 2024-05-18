<?php /* Smarty version 2.6.26, created on 2022-09-24 11:03:31
         compiled from pension_apply_view.tpl */ ?>
<html>
<head>
  <title>Pension Apply View</title>
</head>
<body>
  <!-- .................................................................. -->
<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Pension Apply View</h1>
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
  <center>
    <h2><u><b></b></u></h2>
    <center>
      <div style="overflow-x:auto">
    <table class="table table-striped">

      <form method="POST" action="">
        <input type="hidden" name="hide" value="h">

<thead>
<tr>
      </center>
        <!-- <tr><td align="right-side"><b>Photo</b></td><td><input type="file" name="Photo" value="<?php echo $this->_tpl_vars['f']['Photo']; ?>
" readonly></td></tr> -->
      <center>
<th>Name &nbsp;</th>
<th>Gender &nbsp;</th>
<th>Depo &nbsp;</th>
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
<th>Qualifying Service Period  &nbsp;</th>
<th>Last Basic Pay &nbsp;</th>
<th>Daily Allowance &nbsp;</th>
<th>Provident Fund &nbsp;</th>
<th>Qualifying Service Period &nbsp;</th>
<th>Contact Number &nbsp;</th>
<th>Email &nbsp;</th>
<th>Status &nbsp;</th>

<th></th>
<th></th>

 
                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php $_from = $this->_tpl_vars['view2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['f']):
?>
<tr>
<td align="center"><?php echo $this->_tpl_vars['f']['Name']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['Gender']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['Depo']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['fathername']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['mothername']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['marital']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['nationality']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['state']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['DOB']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['religion']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['category']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['Address']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['Retirementdate']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['Adharno']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['qsvcp']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['lbp']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['da']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['pf']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['qsvcpy']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['Contactno']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['f']['Email']; ?>
</td>




<?php if ($this->_tpl_vars['f']['status'] == '0'): ?>
 
  <td>Pending</td>
   <?php elseif ($this->_tpl_vars['f']['status'] == '1'): ?>
<td>Approved</td>
 <?php else: ?>
 <td>Rejected</td> 
   <?php endif; ?> 
 </td>
                                                   
                                                        
                                               
                                               
                                    
                                                      
                                                        

<!-- <th><button onclick="window.location.href="pension_apply_view_edit.php?key=<?php echo $this->_tpl_vars['f']['pakey']; ?>
"";>Edit</button></th> -->

<!-- <th><button onclick="window.location.href="pension_apply_view_delete.php?key=<?php echo $this->_tpl_vars['f']['pakey']; ?>
"";>Delete</button></th> -->

<th><a href="pension_apply_view_edit.php?key=<?php echo $this->_tpl_vars['f']['pakey']; ?>
" class="btn btn-primary">Edit</a></th> 


<th><a href="pension_apply_view_delete.php?key=<?php echo $this->_tpl_vars['f']['pakey']; ?>
" class="btn btn-danger">Delete</a></th>



<?php endforeach; endif; unset($_from); ?>
</tr>
</tbody>
</center>
</form>
</table>
</div>
</center>
</center>
</body>
</html>