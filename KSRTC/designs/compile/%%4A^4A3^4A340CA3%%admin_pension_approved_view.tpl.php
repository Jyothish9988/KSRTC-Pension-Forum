<?php /* Smarty version 2.6.26, created on 2022-09-25 10:02:24
         compiled from admin_pension_approved_view.tpl */ ?>
                                       
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
                                                <th>Retirement Certificate</th>
                                                <th>Last Basic Pay</th>
                                                <th>Qualifying Service Period </th>
                                                <th>Qualifying Service Period Year</th>
                                                <th>Pension Amount</th>
                                                <th>Retirement Amount</th>
                                                <th>Pay</th>

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
></td>
                                                <td><?php echo $this->_tpl_vars['j']['rcert']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['lbp']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['qsvcp']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['qsvcpy']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['bpam']; ?>
</td>
                                                <td><?php echo $this->_tpl_vars['j']['ream']; ?>
</td>
                                                <?php if ($this->_tpl_vars['j']['pay'] == 1): ?>
                                                <td>Paid</td>
                                                <?php else: ?>
                                                <td><a href="admin_pension_amount.php?ream=<?php echo $this->_tpl_vars['j']['ream']; ?>
&&p_key=<?php echo $this->_tpl_vars['j']['p_key']; ?>
&&pakey=<?php echo $this->_tpl_vars['j']['pakey']; ?>
" class="btn btn-primary">Pay</td>
                                                    <?php endif; ?>
                                            </tr>
                                            <?php endforeach; endif; unset($_from); ?>
                                        </tbody>
                                       <!--  <tfoot>
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
                                                <th>Retirement Certificate</th>
                                                <th>Last Basic Pay</th>
                                                <th>Qualifying Service Period Year</th>
                                                <th>Pension Amount</th>
                                                <th>Retirement Amount</th>
                                                <th>Pay</th>

                                            </tr>
                                            </tfoot> -->
                                    </table>
                                