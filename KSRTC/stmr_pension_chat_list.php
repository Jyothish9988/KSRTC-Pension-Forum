<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();


$skey=$_COOKIE['l_key'];
// $k=$obj->admin_msgcount($key);
// $smartyObj->assign("msg",$k);

$s=$obj->stmr_pension_chat_list($skey);
$smartyObj->assign("data",$s);
// $smartyObj->display('admin_sub_header.tpl');
$smartyObj->display("stmr_sub_header.tpl");
$smartyObj->display('stmr_pension_chat_list.tpl');

?>