
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact Number</th>
                                                <th>Feedback</th>
                                                <th>Date</th>
                                                <!-- <th>Status</th> -->
                                            </tr>
                                        </thead>

                                        <tbody>
                                          
        <tr>
             {foreach from=$data item="j"}
            <td>{$j.Name}</td>
            <td>{$j.Contactno}</td>
            <td>{$j.feedback}</td> 
            <td>{$j.date}</td>
        </tr>
        {/foreach}
        
   </tbody>
   

                                       <!--  <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Contact Number</th>
                                                <th>Feedback</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot> -->