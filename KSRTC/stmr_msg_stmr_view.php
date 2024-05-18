<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['l_key'];
$k=$obj->msgcount($key);
$smartyObj->assign("msg",$k);
$s=$obj->stmr_msg_stmr_view($key);
$smartyObj->assign("data",$s);
$smartyObj->display("stmr_sub_header.tpl");
$smartyObj->display("stmr_msg_stmr_view.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>
