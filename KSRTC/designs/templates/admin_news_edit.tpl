 


            <form method="POST" action="">      
                  <input type="hidden" name="hidden" value='h'>

         
            {foreach from=$data item="j"}      
<tr>
      <td><b>Title</b></td>
      <td><input type="text" name="title" value="{$j.title}" class="form-control form-control-custom"></td>
</tr>

<tr><td><b>Report</b></td><td><textarea  class="form-control form-control-custom" 
      name="report" >{$j.report}</textarea></td></tr>

<!-- <tr>
      <td><b>Date</b></td>
      <td><input type="date" name="Date" class="form-control form-control-custom" ></td>
</tr> -->


<tr><td></td><th><button type="submit" class="btn-first btn-submit">Submit</button></th></tr>             
{/foreach}

</form>


