<html>
<head>
      <title>Apply Pension</title>
</head>

<body>
      <!-- .................................................................. -->
<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Apply Pension</h1>
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
      <center><h2><u><b></b></u></h2>
            <center>
            <table >
                  
 {foreach from=$view1 item="j"}
                  <form method="POST" action="" enctype="multipart/form-data">
                        <input type="hidden" name="hide" value="h">
                  </center>
                        <!-- <tr><td align="right-side"><b>Photo</b></td><td><input type="file" name="Photo" value="{$j.Photo}" readonly></td></tr> -->
                        <center>
                        <tr><td><b>Name</b></td><td><input type="text" name="Name" value="{$j.Name}" readonly class="form-control"></td></tr>

      <tr>
      <td>
            <b>Gender</b>
      </td>

     {if $j.Gender=='Male'}
     <td>
      <input type="radio"  name="Gender"  value="Male" checked >Male
            <input type="radio"  name="Gender" value="Female" >Female</td>
      {else}
      <td>
      <input type="radio"  name="Gender" value="Male">Male
      <input type="radio"  name="Gender" value="Female" checked>Female</td>

{/if}
      </tr>
               


               <tr><td><b>Depo</b></td><td><input type="text" name="Depo" value="{$j.Depo}" readonly class="form-control" class="form-control"></td></tr>
                        <tr><td><b>Father Name</b></td><td><input type="text" name="fathername" class="form-control"></td></tr>
                        <tr><td><b>Mother Name</b></td><td><input type="text" name="mothername" class="form-control"></td></tr>
                        <tr><td><b>Maritial Status</b></td><td><select name="marital" class="form-control">
                                    <option>Select</option>
                                    <option>Married</option>
                                    <option>Unmarried</option>
                                    <option>Other</option>
                              </select>
                        </td>
                        <tr><td><b>Nominee</b></td><td><input type="text" name="nomie" class="form-control"></td></tr>
                  </tr>
                  <tr><td><b>Nationality</b></td><td><input type="text" name="nationality" class="form-control"></td></tr>
                  <tr><td><b>State</b></td><td><input type="text" name="state" class="form-control"></td></tr>
                  <tr>
      <td><b>D.O.B</b></td>
      <td><input type="date" name="DOB"  value="{$j.DOB}" readonly class="form-control"></td>
           </tr>
      <tr><td><b>Religion</b></td><td><input type="text" name="religion" class="form-control"></td></tr>
      <tr><td><b>Category</b></td><td><input type="text" name="category" class="form-control"></td></tr>
      <tr><td><b>Address</b></td><td><textarea name="Address" readonly class="form-control">{$j.Address}</textarea></tr>

<tr>
      <td><b>Retirement Date</b></td>
      <td><input type="date" name="Retirementdate" value="{$j.Retirementdate}" readonly class="form-control"></td>
</tr>


<tr><td><b>Aadhar Number</b></td><td><input type="number" name="Adharno" value="{$j.Adharno}" readonly class="form-control"></td></tr>

<tr><td><b>Contact Number</b></td><td><input type="number" name="Contactno" placeholder="+91" value="{$j.Contactno}" readonly class="form-control"></td></tr>

<tr><td><b>Email</b></td><td><input type="Email" placeholder="example@example.com" name="Email" value="{$j.Email}" readonly class="form-control"></td></tr>

<tr><td><b>Retirement Certificate</b></td><td><input type="file" name="rcert" required></td></tr>


{/foreach}

<tr>
      <td>
            <b>Qualifying Service Period  </b>
      </td>

     
     <td>
      <input type="radio"  name="qsvcp"  value="10-20" >10-20 yrs
      &nbsp;
            <input type="radio"  name="qsvcp" value=">20" >>20 yrs
      </td>
     

      </tr>

<tr>
      <td><b>Last Basic Pay</b></td>
      <td><input type="text" name="lbp" class="form-control"></td>
</tr>

<tr>
      <td><b>Daily Allowance</b></td>
      <td><input type="text" name="da" class="form-control"></td>
</tr>

<tr>
      <td><b>Provident Fund</b></td>
      <td><input type="text" name="pf" class="form-control"></td>
</tr>



<tr>
      <td><b>Qualifying Service Period</b></td>
      <td><input type="text" name="qsvcpy" class="form-control"></td>
</tr>


<tr>  <th></th>
      <th><button type="submit" class="btn-first btn-submit">SUBMIT</button></th>
</tr> 


</form>

</table>

</center>


</body>

</html>






































