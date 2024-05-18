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
$y=$obj->stmr_pension_panel($key);
$smartyObj->display('stmr_sub_header.tpl');
$smartyObj->assign("view1",$y);
$smartyObj->display('stmr_pension_panel.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>





















