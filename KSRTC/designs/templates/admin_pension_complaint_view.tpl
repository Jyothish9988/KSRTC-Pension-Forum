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
             {foreach from=$data item="j"}
            <td>{$j.Name}</td>
            <td>{$j.Contactno}</td>
            <td>{$j.Subject}</td> 
            <td>{$j.Complaint}</td> 
            <td>{$j.Date}</td>
        </tr>
        {/foreach}
        
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


        
        
 