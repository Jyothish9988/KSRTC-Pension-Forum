<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link rel="stylesheet" href="chat/dist/style.css">
	 
	

</head>
<body>
	
<ul class="chat-thread">
	{foreach from=$data item="j"}
	
	<li>{$j.msg}</li>
	

	{/foreach}

	{foreach from=$data1 item="k"}
	
	<li>{$k.msg}</li>
	

	{/foreach}


</ul>
<!-- <ul class="chat-thread">
	<li>Are we meeting today?</li>
	<li>yes, what time suits you?</li>
	<li>I was thinking after lunch, I have a meeting in the morning</li>
</ul> -->

<form class="chat-window" method="post" action="">
	<input type="hidden" name="hide" value="h">
	<input class="chat-window-message"  name="msg" type="text" autocomplete="off" autofocus />
	<!-- <input type="submit" name="submit" value="submit"> -->
</form>
</body>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->
<!-- <script  src="chat/dist/script.js"></script> -->
</html>