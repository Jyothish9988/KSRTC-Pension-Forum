<?php /* Smarty version 2.6.26, created on 2022-10-09 11:08:37
         compiled from pension_feedback_view.tpl */ ?>
<html>
<head>
<title>pension feedback panel</title>
</head>
<body>
	<!-- .................................................................. -->
<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Feedback View</h1>
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
<th>Feedback</th>
<th>Date</th>
</tr>
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
<tr>
	<td><?php echo $this->_tpl_vars['j']['feedback']; ?>
</td>
	<td><?php echo $this->_tpl_vars['j']['date']; ?>
</td>
	 <td><a href="pension_feedback_edit.php?key=<?php echo $this->_tpl_vars['j']['fkey']; ?>
">Edit</a></td>
            <!-- <td><a href="pension_feedback_delete.php?key=<?php echo $this->_tpl_vars['j']['fkey']; ?>
">Delete</a></td> -->
<!-- -------------------------------------------del-----------------button----------- -->
<td> <a href="/ksrtc/pension_feedback_delete.php?key=<?php echo $this->_tpl_vars['j']['fkey']; ?>
" class="btn btn-danger delete"  data-confirm="Are you sure to delete this item?">Delete</a></td>
<!-- ----------------------------------del btn end------------------------------------------ -->
</tr>
<?php endforeach; endif; unset($_from); ?>

</table>

</body>
</center>
<!-- -----------------------------------del script------------------------- -->
<?php echo '
    <script type="text/javascript">
    var deleteLinks = document.querySelectorAll(\'.delete\');

for (var i = 0; i < deleteLinks.length; i++) {
  deleteLinks[i].addEventListener(\'click\', function(event) {
      event.preventDefault();

      var choice = confirm(this.getAttribute(\'data-confirm\'));

      if (choice)
       {
        window.location.href = this.getAttribute(\'href\');
      }
  });
}
</script>
 '; ?>

 <!-- -----------------------------------del script end------------------------- -->
</html>