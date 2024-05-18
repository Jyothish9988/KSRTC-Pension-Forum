<?php /* Smarty version 2.6.26, created on 2022-09-25 10:02:18
         compiled from admin_stmr_pension_panel_view.tpl */ ?>

                                        <thead>
                                            <tr>
<th>Name &nbsp;</th>
<th>Gender &nbsp;</th>
<th>Depo &nbsp;</th>
<th>Father Name &nbsp;</th>
<th>Mother Name &nbsp;</th>
<th>Maritial Status &nbsp;</th>
<th>Nationality &nbsp;</th>
<th>State &nbsp;</th>
<th>D.O.B &nbsp;</th>
<th>Religion &nbsp;</th>
<th>Category &nbsp;</th>
<th>Address &nbsp;</th>
<th>Retirement Date &nbsp;</th>
<th>Aadhar Number &nbsp;</th>
<th>Contact Number &nbsp;</th>
<th>Email &nbsp;</th>
<th>Qualifying Service Period &nbsp;</th>
<th>Last Basic Pay &nbsp;</th>
<th>Daily Allowance &nbsp;</th>
<th>Provident Fund &nbsp;</th>
<th>Qualifying Service Period &nbsp;</th>
<th>Download Document &nbsp;</th>

                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php $_from = $this->_tpl_vars['view1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
<tr>
<td align="center"><?php echo $this->_tpl_vars['j']['Name']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['Gender']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['Depo']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['fathername']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['mothername']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['marital']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['nationality']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['state']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['DOB']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['religion']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['category']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['Address']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['Retirementdate']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['Adharno']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['Contactno']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['Email']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['qsvcp']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['lbp']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['da']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['pf']; ?>
</td>
<td align="center"><?php echo $this->_tpl_vars['j']['qsvcpy']; ?>
</td>
<td align="center"><a href="uploads/<?php echo $this->_tpl_vars['j']['pakey']; ?>
/<?php echo $this->_tpl_vars['j']['rcert']; ?>
" target="_blank" class="btn btn-success">Download</a></td>
<!-- <td align="center"><a href=""></a></td> -->

<?php if ($this->_tpl_vars['j']['status'] == '0'): ?>
                                            <td><a href="admin_stmr_pension_approve.php?key=<?php echo $this->_tpl_vars['j']['pakey']; ?>
" class="btn btn-success">Approve</a></td>
                                                <td><a href="admin_stmr_pension_reject.php?key=<?php echo $this->_tpl_vars['j']['pakey']; ?>
" class="btn btn-danger">Reject</a></td>


                                                <?php elseif ($this->_tpl_vars['j']['status'] == '1'): ?>
                                                <td>Approved</td>
                                                <td><a href="admin_stmr_pension_reject.php?key=<?php echo $this->_tpl_vars['j']['pakey']; ?>
" class="btn btn-danger">Reject</a></td>
                                                
                                                    <?php else: ?>
                                                    <td><a href="admin_stmr_pension_approve.php?key=<?php echo $this->_tpl_vars['j']['pakey']; ?>
" class="btn btn-success">Approve</a></td>
                                                        <td>Rejected</td>
                                                         

                                                        <?php endif; ?>
                                                    </tr>

<?php endforeach; endif; unset($_from); ?>

                                        </tbody>

                                       <!--   <tfoot>
                                            <tr>
<th>Name &nbsp;</th>
<th>Gender &nbsp;</th>
<th>Depo &nbsp;</th>
<th>Father Name &nbsp;</th>
<th>Mother Name &nbsp;</th>
<th>Maritial Status &nbsp;</th>
<th>Nationality &nbsp;</th>
<th>State &nbsp;</th>
<th>D.O.B &nbsp;</th>
<th>Religion &nbsp;</th>
<th>Category &nbsp;</th>
<th>Address &nbsp;</th>
<th>Retirement Date &nbsp;</th>
<th>Aadhar Number &nbsp;</th>
<th>Contact Number &nbsp;</th>
<th>Email &nbsp;</th>
<th>Download Document &nbsp;</th>

                                                

                                            </tr>
                                        </tfoot>
                                         -->
                                    
                               