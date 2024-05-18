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

$y=$obj->admin_stmr_pension_panel_view();
// $y=$obj->stmr_pension_panel();
$smartyObj->assign("view1",$y);
$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('admin_stmr_pension_panel_view.tpl');
$smartyObj->display('admin_footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>