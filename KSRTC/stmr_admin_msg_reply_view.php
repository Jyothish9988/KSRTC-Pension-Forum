<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['l_key'];
$s=$obj->stmr_admin_msg_reply_view($key);
$smartyObj->display("stmr_sub_header.tpl");
$smartyObj->assign("data",$s);
$smartyObj->display("stmr_admin_msg_reply_view.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>
