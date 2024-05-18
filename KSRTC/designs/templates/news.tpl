<html>
<head>
<title>news</title>
</head>
<body>
	
	<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">News</h1>
<ul class="custom-flex justify-content-center">
<li class="fw-500">
<!-- <a href="user/index.html" class="text-custom-white"></a> -->
</li>
 <li class="active fw-500">
<br>
</li>
</ul>
</div>
</div>
</div>
</div>
<table align="center" class="table table-striped">
<tr>
<th>Title</th>
<th>Report</th>
<th>Date</th>
</tr>
{foreach from=$data item="j"}
<tr>
	<td>{$j.title}</td>
	<td>{$j.report}</td>
	<td>{$j.date}</td>
</tr>
{/foreach}


</table>
</body>
</center>
</html>