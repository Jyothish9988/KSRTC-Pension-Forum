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
$s=$obj->stmr_home_user($key); //uid
$smartyObj->assign("uid",$s);
$smartyObj->display('stmr_main_header.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>