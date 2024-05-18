
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
                                          {foreach from=$view1 item="j"}
<tr>
<td align="center">{$j.Name}</td>
<td align="center">{$j.Gender}</td>
<td align="center">{$j.Depo}</td>
<td align="center">{$j.fathername}</td>
<td align="center">{$j.mothername}</td>
<td align="center">{$j.marital}</td>
<td align="center">{$j.nationality}</td>
<td align="center">{$j.state}</td>
<td align="center">{$j.DOB}</td>
<td align="center">{$j.religion}</td>
<td align="center">{$j.category}</td>
<td align="center">{$j.Address}</td>
<td align="center">{$j.Retirementdate}</td>
<td align="center">{$j.Adharno}</td>
<td align="center">{$j.Contactno}</td>
<td align="center">{$j.Email}</td>
<td align="center">{$j.qsvcp}</td>
<td align="center">{$j.lbp}</td>
<td align="center">{$j.da}</td>
<td align="center">{$j.pf}</td>
<td align="center">{$j.qsvcpy}</td>
<td align="center"><a href="uploads/{$j.pakey}/{$j.rcert}" target="_blank" class="btn btn-success">Download</a></td>
<!-- <td align="center"><a href=""></a></td> -->

{if $j.status=='0'}
                                            <td><a href="admin_stmr_pension_approve.php?key={$j.pakey}" class="btn btn-success">Approve</a></td>
                                                <td><a href="admin_stmr_pension_reject.php?key={$j.pakey}" class="btn btn-danger">Reject</a></td>


                                                {elseif $j.status=='1'}
                                                <td>Approved</td>
                                                <td><a href="admin_stmr_pension_reject.php?key={$j.pakey}" class="btn btn-danger">Reject</a></td>
                                                
                                                    {else}
                                                    <td><a href="admin_stmr_pension_approve.php?key={$j.pakey}" class="btn btn-success">Approve</a></td>
                                                        <td>Rejected</td>
                                                         

                                                        {/if}
                                                    </tr>

{/foreach}

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
                                    
                               