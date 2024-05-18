<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['l_key'];
$k=$obj->pension_notification_count($key);
$smartyObj->assign("notif",$k);
$s=$obj->fetch_pension_feedback_list($key);
$smartyObj->assign("data",$s);
$smartyObj->display("pension_sub_header.tpl");
$smartyObj->display("pension_feedback_view.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>
