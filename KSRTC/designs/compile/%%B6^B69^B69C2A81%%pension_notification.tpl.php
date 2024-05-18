<?php /* Smarty version 2.6.26, created on 2022-09-24 11:02:06
         compiled from pension_notification.tpl */ ?>

<center>
	<h1>Messages</h1>

	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>

	<li type="1">
<b>	
&nbsp;	Dear <?php echo $this->_tpl_vars['j']['Name']; ?>
,you have credited with ₹<?php echo $this->_tpl_vars['j']['amount']; ?>
 INR,	<?php echo $this->_tpl_vars['j']['currentdate']; ?>

</b>
   
   	</li>
   
<?php endforeach; endif; unset($_from); ?>
</center>