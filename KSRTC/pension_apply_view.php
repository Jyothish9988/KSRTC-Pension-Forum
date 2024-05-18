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
$z=$obj->pension_apply_select($key);
$smartyObj->display('pension_sub_header.tpl');
$smartyObj->assign("view2",$z);
$smartyObj->display('pension_apply_view.tpl');
$smartyObj->display('footer.tpl');

}
else
{	
	Header("location:login.php");
}
?>