<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$pl_key=$_COOKIE['l_key'];
$k=$obj->pension_notification_count($pl_key);
$smartyObj->assign("notif",$k);
$j=$obj->pension_notification($pl_key);
$smartyObj->assign("data",$j);

$smartyObj->display('pension_sub_header.tpl');
$smartyObj->display('pension_notification.tpl');
$smartyObj->display('footer.tpl');

}
else
{	
	Header("location:login.php");
}
?>