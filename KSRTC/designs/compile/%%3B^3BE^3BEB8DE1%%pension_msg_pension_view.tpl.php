<?php /* Smarty version 2.6.26, created on 2022-09-24 11:03:49
         compiled from pension_msg_pension_view.tpl */ ?>
<html>
<head>
<title>pension msg pension view</title>
</head>
<body>
		<!-- .................................................................. -->
<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Pension Message View</h1>
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
	
<table align="center">
<tr>
<th>Date &nbsp;</th>
<th>Time &nbsp;</th>
<th>Message &nbsp;</th>
<th>Status &nbsp;</th>
</tr>
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
<tr>
	
	<td align="center"><?php echo $this->_tpl_vars['j']['date']; ?>
</td>
	<td align="center"><?php echo $this->_tpl_vars['j']['time']; ?>
</td>
	<td align="center"><?php echo $this->_tpl_vars['j']['msg']; ?>
</td>
	<?php if ($this->_tpl_vars['j']['viewstatus'] == 0): ?>
<td align="center">&nbsp;Sent</td>
<?php elseif ($this->_tpl_vars['j']['viewstatus'] == 1): ?>
<td align="center">&nbsp;Viewed</td>
<?php endif; ?>
    <!-- <td><a href="stmr_pension_panel_reply.php?key=<?php echo $this->_tpl_vars['j']['mkey']; ?>
">Reply</a></td> -->
    
    	<?php if ($this->_tpl_vars['j']['viewstatus'] == 0): ?>
    	<td><a href="pension_msg_pension_view_delete.php?key=<?php echo $this->_tpl_vars['j']['mkey']; ?>
">delete</a></td>
    	<?php endif; ?>

</tr>
<?php endforeach; endif; unset($_from); ?>

</table>

</body>
</center>
</html>