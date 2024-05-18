<?php /* Smarty version 2.6.26, created on 2022-05-20 18:08:14
         compiled from pension_feedback_edit.tpl */ ?>

<html>
<head>
<title>
pension feedback edit
</title>
</head>
<body>
      <center>



            <form method="POST" action="">      
                  <input type="hidden" name="hidden" value='h'>

            <table align="center">
            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>      


<tr><td align="center"><b>FEEDBACK</b></td><td><textarea  class="form-control form-control-custom" 
      name="feedback" ><?php echo $this->_tpl_vars['j']['feedback']; ?>
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
</center>
</body>
</html>