<?php /* Smarty version 2.6.26, created on 2022-07-31 08:41:46
         compiled from pension_stmr_chat.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link rel="stylesheet" href="chat/dist/style.css">
</head>
<body>
	
	
<ul class="chat-thread">
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
	
	<li><?php echo $this->_tpl_vars['j']['msg']; ?>
</li>
	

	<?php endforeach; endif; unset($_from); ?>

	<?php $_from = $this->_tpl_vars['data1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k']):
?>
	
	<li><?php echo $this->_tpl_vars['k']['msg']; ?>
</li>
	

	<?php endforeach; endif; unset($_from); ?>


</ul>

<form class="chat-window" method="post" action="">
	<input type="hidden" name="hide" value="h">
	<input class="chat-window-message"  name="msg" type="text" autocomplete="off" autofocus />
	<!-- <input type="submit" name="submit" value="submit"> -->
</form>
</body>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script src="chat/dist/script.js"></script> -->
</html>