
<html>
<head>
<title>
pension feedback edit
</title>
</head>
<body>
      <center>



            <form method="POST" action="">      
                  <input type="hidden" name="hidden" value='h'>

            <table align="center">
            {foreach from=$data item="j"}      


<tr><td align="center"><b>FEEDBACK</b></td><td><textarea  class="form-control form-control-custom" 
      name="feedback" >{$j.feedback}</textarea></td></tr>

<!-- <tr>
      <td><b>Date</b></td>
      <td><input type="date" name="Date" class="form-control form-control-custom" ></td>
</tr> -->


<tr><td></td><th><button type="submit" class="btn-first btn-submit">Submit</button></th></tr>             

                        
           


<!----------------------------------------------------------------------------------------------------->
</table>
</form>
{/foreach}
</center>
</body>
</html>
