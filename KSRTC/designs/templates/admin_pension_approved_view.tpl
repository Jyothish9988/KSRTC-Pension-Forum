                                       
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
                                            {foreach from=$data item="j"}
                                            <tr>
                                                <td>{$j.Name}</td>
                                                <td>{$j.Address}</td>
                                                <td>{$j.Pincode}</td>
                                                <td>{$j.District}</td>
                                                <td>{$j.Gender}</td>
                                                <td>{$j.Depo}</td>
                                                <td>{$j.DOB}</td>
                                                <td>{$j.Retirementdate}</td>
                                                <td>{$j.Adharno}</td>
                                                <td>{$j.Contactno}</td>
                                                <td>{$j.Email}</td>
                                                <td>{$j.Photo}></td>
                                                <td>{$j.rcert}</td>
                                                <td>{$j.lbp}</td>
                                                <td>{$j.qsvcp}</td>
                                                <td>{$j.qsvcpy}</td>
                                                <td>{$j.bpam}</td>
                                                <td>{$j.ream}</td>
                                                {if $j.pay==1}
                                                <td>Paid</td>
                                                {else}
                                                <td><a href="admin_pension_amount.php?ream={$j.ream}&&p_key={$j.p_key}&&pakey={$j.pakey}" class="btn btn-primary">Pay</td>
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
                                