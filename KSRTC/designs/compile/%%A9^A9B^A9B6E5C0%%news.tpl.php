<?php /* Smarty version 2.6.26, created on 2022-09-24 11:01:51
         compiled from news.tpl */ ?>
<html>
<head>
<title>news</title>
</head>
<body>
	
	<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">News</h1>
<ul class="custom-flex justify-content-center">
<li class="fw-500">
<!-- <a href="user/index.html" class="text-custom-white"></a> -->
</li>
 <li class="active fw-500">
<br>
</li>
</ul>
</div>
</div>
</div>
</div>
<table align="center" class="table table-striped">
<tr>
<th>Title</th>
<th>Report</th>
<th>Date</th>
</tr>
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['j']['title']; ?>
</td>
	<td><?php echo $this->_tpl_vars['j']['report']; ?>
</td>
	<td><?php echo $this->_tpl_vars['j']['date']; ?>
</td>
</tr>
<?php endforeach; endif; unset($_from); ?>


</table>
</body>
</center>
</html>