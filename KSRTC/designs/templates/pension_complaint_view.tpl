<html>
<head>
<title>Pension registration</title>
</head>
<body>

<div class="subheader normal-bg section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="text-custom-white">Pension Complaint View</h1>
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

<table class="table table-striped table-bordered zero-configuration">
                                        
                                            <tr>
                                               
                                                <th>Subject</th>
                                                <th>Complaint</th>
                                                <th>Date</th>
                                                
                                            </tr>
                                        

                                        
                                          
        <tr>
             {foreach from=$data item="j"}
           
            <td>{$j.Subject}</td> 
            <td>{$j.Complaint}</td> 
            <td>{$j.Date}</td>
            <td><a href="pension_complaint_edit.php?key={$j.ckey}" class="btn btn-success">Edit</a></td>
     <!-- <td><a href="pension_complaint_delete.php?key={$j.ckey}"class="btn btn-success">Delete</a></td> -->
<td> <a href="/ksrtc/pension_complaint_delete.php?key={$j.ckey}" class="btn btn-danger delete"  data-confirm="Are you sure to delete this item?">Delete</a></td>
        </tr>
        {/foreach}
        </table>
</center>
{literal}
    <script type="text/javascript">
    var deleteLinks = document.querySelectorAll('.delete');

for (var i = 0; i < deleteLinks.length; i++) {
  deleteLinks[i].addEventListener('click', function(event) {
      event.preventDefault();

      var choice = confirm(this.getAttribute('data-confirm'));

      if (choice)
       {
        window.location.href = this.getAttribute('href');
      }
  });
}
</script>
    {/literal}
</body>
</html>
