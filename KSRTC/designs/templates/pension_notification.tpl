
<center>
	<h1>Messages</h1>

	{foreach from=$data item="j"}

	<li type="1">
<b>	
&nbsp;	Dear {$j.Name},you have credited with ₹{$j.amount} INR,	{$j.currentdate}
</b>
   
   	</li>
   
{/foreach}
</center>