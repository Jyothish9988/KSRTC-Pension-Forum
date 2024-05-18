<?php /* Smarty version 2.6.26, created on 2022-07-30 09:41:52
         compiled from stmr_pension_chat_list.tpl */ ?>
<!-- <h4 class="card-title">News View</h4> -->

<head>
     <?php echo '
     <style>
     }
th, td {
  border: 1px solid black;
  border-radius: 10px;
}
'; ?>

</style>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
      <link rel="stylesheet" href="chat/dist/style.css">
     </head>
     <center>
<table>
     <tr>
                                               
                                                <th>Name</th>&nbsp; &nbsp; &nbsp; &nbsp;
                                                <!-- <th>Depo</th> -->
                                                <th></th>
                                                <!-- <th>Status</th> -->
                                            </tr>
                                       
        <tr>
             <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
           
            <td><?php echo $this->_tpl_vars['j']['Name']; ?>
</td> &nbsp; &nbsp; &nbsp; &nbsp;
            <td><a href="stmr_pension_chat.php?pl_key=<?php echo $this->_tpl_vars['j']['l_key']; ?>
" class="btn btn-primary">Chat</a></td>
            <?php endforeach; endif; unset($_from); ?>
        </tr>
        
        </center>
    

    </table>                                      
      