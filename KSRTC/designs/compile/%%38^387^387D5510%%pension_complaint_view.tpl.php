<?php /* Smarty version 2.6.26, created on 2022-10-09 11:18:42
         compiled from pension_complaint_view.tpl */ ?>
<html>
<head>
<title>Pension registration</title>
</head>
<body>

<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Pension Complaint View</h1>
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

<table class="table table-striped table-bordered zero-configuration">
                                        
                                            <tr>
                                               
                                                <th>Subject</th>
                                                <th>Complaint</th>
                                                <th>Date</th>
                                                
                                            </tr>
                                        

                                        
                                          
        <tr>
             <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
           
            <td><?php echo $this->_tpl_vars['j']['Subject']; ?>
</td> 
            <td><?php echo $this->_tpl_vars['j']['Complaint']; ?>
</td> 
            <td><?php echo $this->_tpl_vars['j']['Date']; ?>
</td>
            <td><a href="pension_complaint_edit.php?key=<?php echo $this->_tpl_vars['j']['ckey']; ?>
" class="btn btn-success">Edit</a></td>
     <!-- <td><a href="pension_complaint_delete.php?key=<?php echo $this->_tpl_vars['j']['ckey']; ?>
"class="btn btn-success">Delete</a></td> -->
<td> <a href="/ksrtc/pension_complaint_delete.php?key=<?php echo $this->_tpl_vars['j']['ckey']; ?>
" class="btn btn-danger delete"  data-confirm="Are you sure to delete this item?">Delete</a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        </table>
</center>
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

</body>
</html>