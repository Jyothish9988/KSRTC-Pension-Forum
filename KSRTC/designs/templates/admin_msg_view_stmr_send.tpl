<thead>
	<tr>
		<th>Date</th>
		<th>Time</th>
		<th>Name</th>
		<th>Message</th>
		<th>Reply</th>
	</tr>
</thead>


<tbody>
{foreach from=$data item="j"}
<tr>
	<td align="center">{$j.date}</td>
	<td align="center">{$j.time}</td>
	<td align="center">{$j.Name}</td> 
	<td align="center">{$j.msg}</td>
	<td><a href="admin_msg_view_reply_stmr_send.php?key={$j.mkey}&&id={$j.senderid}" class="btn btn-primary">Reply</a></td>
</tr>
{/foreach}
</tbody>



<!-- <tfoot>
<tr>
<th>Date</th>
<th>Time</th>
<th>Name</th>
<th>Message</th>
<th>Reply</th>
</tr>
</tfoot> -->





 