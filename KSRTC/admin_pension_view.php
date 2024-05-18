<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['l_key'];
$k=$obj->admin_msgcount($key);
$smartyObj->assign("msg",$k);
$s=$obj->admin_fetch_pension();
$smartyObj->assign("data",$s);
$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('admin_pension_view.tpl');
$smartyObj->display('admin_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>