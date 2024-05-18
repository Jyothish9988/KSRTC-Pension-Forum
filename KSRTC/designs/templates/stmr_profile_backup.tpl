<html>
<head>
<title>stmr profile</title>
</head>
<body>
      <center><h2><u><b>stmr profile</b></u></h2>
            <form method="POST" action="">      
                  <input type="hidden" name="hide" value='h'>

            <table align="center">
                  {foreach from=$view1 item="j"}
                  <tr><td>Name</td><td><input type="text" name="Name" value="{$j.Name}"></td></tr>
                  <tr><td>Address</td><td><textarea name="Address" >{$j.Address}</textarea></td></tr>
                  <tr><td>Pincode</td><td><input type="number" name="Pincode" value="{$j.Pincode}"></td></tr>
                  <tr><td>District</td><td><select name="District" value="{$j.District}">
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
                              </select></td></tr>
                  <tr><td>Gender</td><td><input type="radio" value="Male" {$j.Gender} name="Gender">Male
                        <input type="radio" value="Female" {$j.Gender} name="Gender">Female</td></tr>
                  <tr><td>D.O.B</td><td><input type="date" name="DOB" value="{$j.DOB}"></td></tr>
                  <tr><td>Depo</td><td><input type="text" name="Depo" value="{$j.Depo}"></td></tr>
                  
                  <tr><td>Contact number</td><td><input type="tel" placeholder="+91" name="Contactno"></td></tr>
                  
                  
                  <table align="center">
                        <tr><td><input type="submit" value="submit"></td></tr>
                        {/foreach}
            </table>
      </form>
</table>
</center>
</body>
</html>
