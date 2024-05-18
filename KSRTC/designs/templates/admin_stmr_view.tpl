 
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Pincode</th>
                                                <th>District</th>
                                                <th>Gender</th>
                                                <th>DOB</th>
                                                <th>Depo</th>
                                                <th>Contact no</th>
                                                <th>Email</th>
                                                <th>Approve</th>
                                                <th>Reject</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            {foreach from=$data item="j"}
                                            <tr>
                                                <td>{$j.Name}</td>
                                                <td>{$j.Address}</td>
                                                <td>{$j.Pincode}</td>
                                                <td>{$j.District}</td>
                                                <td>{$j.Gender}</td>
                                                <td>{$j.DOB}</td>
                                                <td>{$j.Depo}</td>
                                                <td>{$j.Contactno}</td>
                                                <td>{$j.Email}</td>
                                    
                                           {if $j.Status=='0'}
                                            <td><a href="stmr_approve.php?key={$j.l_key}" class="btn btn-success">Approve</a></td>
                                                <td><a href="stmr_reject.php?key={$j.l_key}" class="btn btn-danger">Reject</a></td>


                                                {elseif $j.Status=='1'}
                                                <td>Approved</td>
                                                <td><a href="stmr_reject.php?key={$j.l_key}" class="btn btn-danger">Reject</a></td>
                                                
                                                    {else}
                                                    <td><a href="stmr_approve.php?key={$j.l_key}" class="btn btn-success">Approve</a></td>
                                                        <td>Rejected</td>
                                                         

                                                        {/if}
                                            </tr>
                                            {/foreach}
                                        </tbody>

                                       <!--  <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Pincode</th>
                                                <th>District</th>
                                                <th>Gender</th>
                                                <th>DOB</th>
                                                <th>Depo</th>
                                                <th>Contact no</th>
                                                <th>Email</th>
                                                

                                            </tr>
                                        </tfoot> -->
                                        
                            
                             