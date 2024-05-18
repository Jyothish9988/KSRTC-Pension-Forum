<?php /* Smarty version 2.6.26, created on 2022-09-24 08:14:42
         compiled from admin_pension_complaint_view.tpl */ ?>
<center>
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact Number</th>
                                                <th>Subject</th>
                                                <th>Complaint</th>
                                                <th>Date</th>
                                                <!-- <th>Status</th> -->
                                            </tr>
                                        </thead>

                                        <tbody>

        <tr>
             <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
            <td><?php echo $this->_tpl_vars['j']['Name']; ?>
</td>
            <td><?php echo $this->_tpl_vars['j']['Contactno']; ?>
</td>
            <td><?php echo $this->_tpl_vars['j']['Subject']; ?>
</td> 
            <td><?php echo $this->_tpl_vars['j']['Complaint']; ?>
</td> 
            <td><?php echo $this->_tpl_vars['j']['Date']; ?>
</td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        
    </tbody>
              
                                     <!--    <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact Number</th>
                                                <th>Subject</th>
                                                <th>Complaint</th>
                                                <th>Date</th>
                                                 <th>Status</th> 
                                            </tr>
                                        </tfoot>                 -->


        
        
 