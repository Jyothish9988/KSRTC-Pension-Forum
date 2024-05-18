<?php /* Smarty version 2.6.26, created on 2022-06-26 09:06:41
         compiled from pension_complaint_edit.tpl */ ?>

<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Pension Complaint Edit</h1>
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
<!----------------------------------------------------------------------------------------------------------------->


      
            <form method="POST" action="">      
                  <input type="hidden" name="hidden" value='h'>

            <table align="center">
            <?php $_from = $this->_tpl_vars['keyword']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>      
<tr><td><b>Complaint Subject</b></td><td><input type="text" 
      name="Subject" value="<?php echo $this->_tpl_vars['j']['Subject']; ?>
" class="form-control form-control-custom"></td></tr>

<tr><td><b>Complaint</b></td><td><textarea  class="form-control form-control-custom" 
      name="Complaint" ><?php echo $this->_tpl_vars['j']['Complaint']; ?>
</textarea></td></tr>

<!-- <tr>
      <td><b>Date</b></td>
      <td><input type="date" name="Date" class="form-control form-control-custom" ></td>
</tr> -->


<tr><td></td><th><button type="submit" class="btn-first btn-submit">Submit</button></th></tr>             

                        
           


<!----------------------------------------------------------------------------------------------------->
</table>
</form>
<?php endforeach; endif; unset($_from); ?>

</table>
</center>
</body>
</html>