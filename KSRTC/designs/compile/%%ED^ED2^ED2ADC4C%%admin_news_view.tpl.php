<?php /* Smarty version 2.6.26, created on 2022-08-25 17:51:58
         compiled from admin_news_view.tpl */ ?>
<h4 class="card-title">News View</h4>
<thead>
     <tr>
                                               
                                                <th>Title</th>
                                                <th>Report</th>
                                                <th>Date</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
     </tr>
</thead>

          


     <tbody>
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
            <td><a href="admin_news_edit.php?key=<?php echo $this->_tpl_vars['j']['nkey']; ?>
" class="btn btn-primary">Edit</a></td>
            <td><a href="admin_news_delete.php?key=<?php echo $this->_tpl_vars['j']['nkey']; ?>
" class="btn btn-primary">Delete</a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        </tbody>
        <!-- <tfoot>
     <tr>
                                               
                                                <th>Title</th>
                                                <th>Report</th>
                                                <th>Date</th>
                                                 <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot> -->
        
     
   

                                          
      