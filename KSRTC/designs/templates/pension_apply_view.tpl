<html>
<head>
  <title>Pension Apply View</title>
</head>
<body>
  <!-- .................................................................. -->
<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Pension Apply View</h1>
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
  <center>
    <h2><u><b></b></u></h2>
    <center>
      <div style="overflow-x:auto">
    <table class="table table-striped">

      <form method="POST" action="">
        <input type="hidden" name="hide" value="h">

<thead>
<tr>
      </center>
        <!-- <tr><td align="right-side"><b>Photo</b></td><td><input type="file" name="Photo" value="{$f.Photo}" readonly></td></tr> -->
      <center>
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
<th>Qualifying Service Period  &nbsp;</th>
<th>Last Basic Pay &nbsp;</th>
<th>Daily Allowance &nbsp;</th>
<th>Provident Fund &nbsp;</th>
<th>Qualifying Service Period &nbsp;</th>
<th>Contact Number &nbsp;</th>
<th>Email &nbsp;</th>
<th>Status &nbsp;</th>

<th></th>
<th></th>

 
                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                          {foreach from=$view2 item="f"}
<tr>
<td align="center">{$f.Name}</td>
<td align="center">{$f.Gender}</td>
<td align="center">{$f.Depo}</td>
<td align="center">{$f.fathername}</td>
<td align="center">{$f.mothername}</td>
<td align="center">{$f.marital}</td>
<td align="center">{$f.nationality}</td>
<td align="center">{$f.state}</td>
<td align="center">{$f.DOB}</td>
<td align="center">{$f.religion}</td>
<td align="center">{$f.category}</td>
<td align="center">{$f.Address}</td>
<td align="center">{$f.Retirementdate}</td>
<td align="center">{$f.Adharno}</td>
<td align="center">{$f.qsvcp}</td>
<td align="center">{$f.lbp}</td>
<td align="center">{$f.da}</td>
<td align="center">{$f.pf}</td>
<td align="center">{$f.qsvcpy}</td>
<td align="center">{$f.Contactno}</td>
<td align="center">{$f.Email}</td>




{if $f.status=='0'}
 
  <td>Pending</td>
   {elseif $f.status=='1'}
<td>Approved</td>
 {else}
 <td>Rejected</td> 
   {/if} 
 </td>
                                                   
                                                        
                                               
                                               
                                    
                                                      
                                                        

<!-- <th><button onclick="window.location.href="pension_apply_view_edit.php?key={$f.pakey}"";>Edit</button></th> -->

<!-- <th><button onclick="window.location.href="pension_apply_view_delete.php?key={$f.pakey}"";>Delete</button></th> -->

<th><a href="pension_apply_view_edit.php?key={$f.pakey}" class="btn btn-primary">Edit</a></th> 


<th><a href="pension_apply_view_delete.php?key={$f.pakey}" class="btn btn-danger">Delete</a></th>



{/foreach}
</tr>
</tbody>
</center>
</form>
</table>
</div>
</center>
</center>
</body>
</html>
