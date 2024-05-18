<?php /* Smarty version 2.6.26, created on 2022-09-24 08:14:43
         compiled from admin_pension_view.tpl */ ?>

       <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Pincode</th>
                                                <th>District</th>
                                                <th>Gender</th>
                                                <th>Depo</th>
                                                <th>DOB</th>
                                                <th>Retirement date</th>
                                                <th>Adhaar number</th>
                                                <th>Contact number</th>
                                                <th>Email</th>
                                                <th>Photo</th>
                                                <th></th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                                            <tr>
                                                <td><?php echo $this->_tpl_vars['j']['Name']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['Address']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['Pincode']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['District']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['Gender']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['Depo']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['DOB']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['Retirementdate']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['Adharno']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['Contactno']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['Email']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['Photo']; ?>
</td>
                                                <?php if ($this->_tpl_vars['j']['Status'] == '0'): ?>
                                            <td><a href="pension_approve.php?key=<?php echo $this->_tpl_vars['j']['l_key']; ?>
" class="btn btn-success">Approve</a></td>
                                                <td><a href="pension_reject.php?key=<?php echo $this->_tpl_vars['j']['l_key']; ?>
" class="btn btn-danger">Reject</a></td>


                                                <?php elseif ($this->_tpl_vars['j']['Status'] == '1'): ?>
                                                <td>Approved</td>
                                                <td><a href="pension_reject.php?key=<?php echo $this->_tpl_vars['j']['l_key']; ?>
" class="btn btn-danger">Reject</a></td>
                                                
                                                    <?php else: ?>
                                                    <td><a href="pension_approve.php?key=<?php echo $this->_tpl_vars['j']['l_key']; ?>
" class="btn btn-success">Approve</a></td>
                                                        <td>Rejected</td>
                                                         

                                                        <?php endif; ?>
                
                                            </tr>
                                            <?php endforeach; endif; unset($_from); ?>
                                        </tbody>

                                    <!--     <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Pincode</th>
                                                <th>District</th>
                                                <th>Gender</th>
                                                <th>Depo</th>
                                                <th>DOB</th>
                                                <th>Retirement date</th>
                                                <th>Adhaar number</th>
                                                <th>Contact number</th>
                                                <th>Email</th>
                                                <th>Photo</th>
                                                <th></th>
                                                <th></th>

                                            </tr>
                                        </tfoot> -->
                                        
                                    </table>
                              
                              