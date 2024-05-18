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
     {foreach from=$data item="j"}
                                          
        <tr>
            <td>{$j.title}</td> 
            <td>{$j.report}</td> 
            <td>{$j.date}</td>
            <td><a href="admin_news_edit.php?key={$j.nkey}" class="btn btn-primary">Edit</a></td>
            <td><a href="admin_news_delete.php?key={$j.nkey}" class="btn btn-primary">Delete</a></td>
        </tr>
        {/foreach}
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
        
     
   

                                          
      