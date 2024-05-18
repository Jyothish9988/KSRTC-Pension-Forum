
<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Pension Complaint Edit</h1>
<ul class="custom-flex justify-content-center">
<li class="fw-500">
<!-- <a href="user/index.html" class="text-custom-white"></a> -->
</li>
 <li class="active fw-500">

</li>
</ul>
</div>
</div>
</div>
</div>

<!-- .................................................................. -->
<!----------------------------------------------------------------------------------------------------------------->


      
            <form method="POST" action="">      
                  <input type="hidden" name="hidden" value='h'>

            <table align="center">
            {foreach from=$keyword item="j"}      
<tr><td><b>Complaint Subject</b></td><td><input type="text" 
      name="Subject" value="{$j.Subject}" class="form-control form-control-custom"></td></tr>

<tr><td><b>Complaint</b></td><td><textarea  class="form-control form-control-custom" 
      name="Complaint" >{$j.Complaint}</textarea></td></tr>

<!-- <tr>
      <td><b>Date</b></td>
      <td><input type="date" name="Date" class="form-control form-control-custom" ></td>
</tr> -->


<tr><td></td><th><button type="submit" class="btn-first btn-submit">Submit</button></th></tr>             

                        
           


<!----------------------------------------------------------------------------------------------------->
</table>
</form>
{/foreach}

</table>
</center>
</body>
</html>