<html>
<head>
<title>pension feedback panel</title>
</head>
<body>

	<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Stationmaster Pension Panel</h1>
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
<div style="overflow-x:auto">
<table align="center">

<thead>
		<!-- <marquee behavior="scroll" direction="right"> -->

<tr>
<th>Name &nbsp;</th>
<th>Gender &nbsp;</th>
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
<th>Contact Number &nbsp;</th>
<th>Email &nbsp;</th>
<th>Qualifying Service Period &nbsp;</th>
<th>Last Basic Pay &nbsp;</th>
<th>Daily Allowance &nbsp;</th>
<th>Provident Fund &nbsp;</th>
<th>Qualifying Service Period &nbsp;</th>
<th>Retirement Certificate &nbsp;</th>
<th>Status &nbsp;</th>
</tr>
	<!-- <marquee behavior="scroll" direction="right"> -->

</thead>

<tbody>
{foreach from=$view1 item="j"}
<tr>
<td align="center">{$j.Name}</td>
<td align="center">{$j.Gender}</td>
<td align="center">{$j.fathername}</td>
<td align="center">{$j.mothername}</td>
<td align="center">{$j.marital}</td>
<td align="center">{$j.nationality}</td>
<td align="center">{$j.state}</td>
<td align="center">{$j.DOB}</td>
<td align="center">{$j.religion}</td>
<td align="center">{$j.category}</td>
<td align="center">{$j.Address}</td>
<td align="center">{$j.Retirementdate}</td>
<td align="center">{$j.Adharno}</td>
<td align="center">{$j.Contactno}</td>
<td align="center">{$j.Email}</td>
<td align="center">{$j.qsvcp}</td>
<td align="center">{$j.lbp}</td>
<td align="center">{$j.da}</td>
<td align="center">{$j.pf}</td>
<td align="center">{$j.qsvcpy}</td>
<td align="center"><a href="uploads/{$j.pakey}/{$j.rcert}" target="_blank" class="btn btn-success">Download</a></td>
{if $j.pass_status==0}
<td align="center"><a href="stmr_pension_panel_approve.php?key={$j.pakey}" class="btn btn-success">Approve</a></td>
{elseif $j.pass_status==1}
<td align="center">&nbsp;Approved</td>
{/if}
 </tr>

</tbody>


<!-- 

<tr>
	<td>{$j.Name}</td>
	<td>{$j.date}</td>
	 <td><a href="pension_feedback_edit.php?key={$j.fkey}">edit</a></td>
            <td><a href="pension_feedback_delete.php?key={$j.fkey}">delete</a></td>
</tr>
 -->

{/foreach} 

</table>
</div>
<!-- </marquee> -->
</body>
</center>
</html>