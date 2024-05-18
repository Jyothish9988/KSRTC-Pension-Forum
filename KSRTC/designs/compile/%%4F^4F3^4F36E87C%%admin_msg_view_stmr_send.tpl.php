<?php /* Smarty version 2.6.26, created on 2022-08-25 08:48:42
         compiled from admin_msg_view_stmr_send.tpl */ ?>
<thead>
	<tr>
		<th>Date</th>
		<th>Time</th>
		<th>Name</th>
		<th>Message</th>
		<th>Reply</th>
	</tr>
</thead>


<tbody>
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
<tr>
	<td align="center"><?php echo $this->_tpl_vars['j']['date']; ?>
</td>
	<td align="center"><?php echo $this->_tpl_vars['j']['time']; ?>
</td>
	<td align="center"><?php echo $this->_tpl_vars['j']['Name']; ?>
</td> 
	<td align="center"><?php echo $this->_tpl_vars['j']['msg']; ?>
</td>
	<td><a href="admin_msg_view_reply_stmr_send.php?key=<?php echo $this->_tpl_vars['j']['mkey']; ?>
&&id=<?php echo $this->_tpl_vars['j']['senderid']; ?>
" class="btn btn-primary">Reply</a></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</tbody>



<!-- <tfoot>
<tr>
<th>Date</th>
<th>Time</th>
<th>Name</th>
<th>Message</th>
<th>Reply</th>
</tr>
</tfoot> -->





 