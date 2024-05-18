<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$k=$obj->pension_notification_count($pl_key);
$smartyObj->assign("notif",$k);
$key=$_GET['key'];
$obj->pension_feedback_delete($key);
}
else
{	
	Header("location:login.php");
}
?>
