<!-- .................................................................. -->
<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Pension Profile</h1>
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

<html>
<body>
            <form method="POST" action="">      
                  <input type="hidden" name="hide" value='h'>

            <table align="center">
                  {foreach from=$view1 item="j"}
<tr><td><b>Name</b></td><td><input type="text" name="Name"  value="{$j.Name}" class="form-control"></td></tr>

<tr><td><b>Address</b></td><td><textarea   name="Address" class="form-control">{$j.Address}</textarea></td></tr>

<tr><td><b>Pincode</b></td><td><input type="text" name="Pincode" placeholder="Pincode" required value="{$j.Pincode}" class="form-control"></td></tr>
 <div>
 <tr>
      <td><b>District</b></td><th><select   name="District" class="form-control">
                                    <option>{$j.District}</option>
                                    <option>Select</option>
                                    <option>Thriuvananthapuram</option>
                                    <option>Kollam</option>
                                    <option>Pathanamthitta</option>
                                    <option>Alapuzha</option>
                                    <option>Kottayam</option>
                                    <option>Idukki</option>
                                    <option>Ernamkulam</option>
                                    <option>Thrissur</option>
                                    <option>Palakkad</option>
                                    <option>Malapuram</option>
                                    <option>Kozhikod</option>
                                    <option>Wayanad</option>
                                    <option>Kannur</option>
                                    <option>Kasargod</option>
                              </select></th></tr>
                        </div>



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


<tr><td>Depo</td>
                              <td><select name="Depo" class="form-control">
                                    <option>{$j.Depo}</option>
                                    <option>Select</option>
<option>ADOOR </option>
<option>ALAPPUZHA </option>
<option>ALUVA</option>
<option>ANAYARA </option>
<option>ANKAMALI </option>
<option>ARYANAD </option>
<option>ARYANKAVU</option>
<option>ATTINGAL</option>
<option>BANGALORE</option>
<option>CHADAYAMANGALAM</option>
<option>CHALAKUDY</option>
<option>CHANGANASSERY </option>
<option>CHATHANNUR </option>
<option>CHENGANOOR </option>
<option>CHERTHALA</option>
<option>CHITOOR</option>
<option>EDATHUVA</option>
<option>EENCHAKKAL </option>
<option>EERATTUPETTAH </option>
<option>ERNAKULAM</option>
<option>ERUMELY</option>
<option>GURUVAYOOR </option>
<option>HARIPPAD </option>
<option>IRINJALAKKUDA </option>
<option>KALPETTA </option>
<option>KANHANGAD </option>
<option>KANIYAPURAM </option>
<option>KANNUR </option>
<option>KARUNAGAPALLY </option>
<option>KASARAGOD </option>
<option>KATTAKADA</option>
<option>KATTAPPANA </option>
<option>KILIMANOOR</option>
<option>KODUNGALOOR </option>
<option>KONNI </option>
<option>KOOTHATTUKULAM </option>
<option>KOTHAMANGALAM </option>
<option>KOTTARAKKARA </option>
<option>KOTTAYAM </option>
<option>KOZHIKODE</option>
<option>KULATHUPUZHA </option>
<option>KUMALY </option>
<option>MALA</option>
<option>MALAPPURAM </option>
<option>MALLAPALLY </option>
<option>MANANTHAVADY </option> 
<option>MANNARGHAT</option>
<option>MAVELIKARA</option>
<option>MOOLAMATTOM </option>
<option>MOOVATTUPUZHA</option>
<option>MUNNAR </option>
<option>NEDUMANGAD</option> 
<option>NEDUMKANDAM </option>
<option>NEYYATINKARA </option>
<option>NILAMBUR</option>
<option>NORTH PARAVUR </option>
<option>PALA </option>
<option>PALAKKAD </option>
<option>PALODE </option>
<option>PAMBA </option>
<option>PANDALAM </option>
<option>PAPPANAMCODE </option>
<option>PARASSALA</option>
<option>PATHANAMTHITTA</option>
<option>PATHANAPURAM </option>
<option>PAYYANUR </option>
<option>PERINTHAMANNA </option>
<option>PEROORKADA</option>
<option>PERUMBAVOOR </option>
<option>PIRAVOM </option>
<option>PONKUNNAM </option>
<option>POOVAR </option>
<option>PUNALUR </option>
<option>PUTHUKKADU </option>
<option>RANNI </option>
<option>SULTHAN BATHERY</option>
<option>THALASSERY </option>
<option>THAMARASSERY</option>
<option>THIRUVALLA</option>
<option>THIRUVAMBADY </option>
<option>THODUPUZHA </option>
<option>THOTTILPALAM </option>
<option>THRISSUR </option>
<option>TVM CITY </option>
<option>VADAKARA </option>
<option>VADAKKANCHERY </option>
<option>VAIKOM </option>
<option>VELLANAD </option>
<option>VELLARADA </option>
<option>VENJARAMOODU</option> 
<option>VIKASBHAVAN </option>
<option>VIZHINJAM </option>
                              </select></td></tr>


<tr>
      <td><b>D.O.B</b></td>
      <td><input type="date" name="DOB" value="{$j.DOB}" class="form-control" ></td>
</tr>

<tr>
      <td><b>Retirement Date</b></td>
      <td><input type="date" name="Retirementdate" value="{$j.Retirementdate}" class="form-control" ></td>
</tr>

<tr><td><b>Aadhar Number</b></td><td><input type="number" name="Adharno"  value="{$j.Adharno}" class="form-control" ></td></tr>

<tr><td><b>Contact Number</b></td><td><input type="number" name="Contactno" value="{$j.Contactno}" class="form-control" ></td></tr>

<tr><td><b>Email</b></td><td><input type="Email" placeholder="example@example.com" name="Email"  value="{$j.Email}" class="form-control" ></td></tr>

<tr><td></td><th><button type="submit" class="btn-first btn-submit">SUBMIT</button></th></tr>             

                        {/foreach}
           

</table>
</form>
</body>
</html>