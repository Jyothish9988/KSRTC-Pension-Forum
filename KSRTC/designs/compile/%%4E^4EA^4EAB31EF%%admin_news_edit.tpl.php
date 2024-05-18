<?php /* Smarty version 2.6.26, created on 2022-07-23 10:19:35
         compiled from admin_news_edit.tpl */ ?>
 


            <form method="POST" action="">      
                  <input type="hidden" name="hidden" value='h'>

         
            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>      
<tr>
      <td><b>Title</b></td>
      <td><input type="text" name="title" value="<?php echo $this->_tpl_vars['j']['title']; ?>
" class="form-control form-control-custom"></td>
</tr>

<tr><td><b>Report</b></td><td><textarea  class="form-control form-control-custom" 
      name="report" ><?php echo $this->_tpl_vars['j']['report']; ?>
</textarea></td></tr>

<!-- <tr>
      <td><b>Date</b></td>
      <td><input type="date" name="Date" class="form-control form-control-custom" ></td>
</tr> -->


<tr><td></td><th><button type="submit" class="btn-first btn-submit">Submit</button></th></tr>             
<?php endforeach; endif; unset($_from); ?>

</form>

