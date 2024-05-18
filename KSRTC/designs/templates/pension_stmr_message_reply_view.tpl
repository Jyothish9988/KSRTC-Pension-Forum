<html>
<head>
<title>pension reply view</title>
</head>
<body>

	<!-- .................................................................. -->
<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Message View</h1>
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
	
<table align="center">
<tr>
<th>Date &nbsp;</th>
<th>Time &nbsp;</th>
<th>Message &nbsp;</th>
<!-- <th>Status &nbsp;</th> -->
</tr>
{foreach from=$data item="j"}
<tr>
	
	<td align="center">{$j.date}</td>
	<td align="center">{$j.time}</td>
	<td align="center">{$j.msg}</td>
	<!-- {if $j.viewstatus==0}
<td align="center">&nbsp;Sent</td>
{elseif $j.viewstatus==1}
<td align="center">&nbsp;Viewed</td>
{/if} -->
 <!--    <td><a href="stmr_pension_panel_reply.php?key={$j.mkey}">Reply</a></td>
     <td><a href="pension_feedback_delete.php?key={$j.fkey}">delete</a></td> --> 

</tr>
{/foreach}


</table>
</body>
</center>
</html>