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
$j=$obj->count_stationmaster();
$smartyObj->assign("station",$j);
$l=$obj->count_pensioner();
$smartyObj->assign("pension",$l);
$m=$obj->count_message($key);
$smartyObj->assign("msges",$m);
$smartyObj->display('admin_home.tpl');

}
else
{	
	Header("location:login.php");
}

?>