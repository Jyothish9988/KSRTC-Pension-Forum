<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$pl_key=$_COOKIE['l_key'];
$k=$obj->payment_salary($pl_key);
$smartyObj->assign("salary",$k);
$k=$obj->pension_notification_count($pl_key);
$smartyObj->assign("notif",$k);

$s=$obj->pension_home_user($pl_key); //uid
$smartyObj->assign("uid",$s);

$smartyObj->display('pension_main_header.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>