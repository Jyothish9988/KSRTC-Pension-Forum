<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$pl_key=$_COOKIE['l_key'];
$k=$obj->pension_notification_count($pl_key);
$smartyObj->assign("notif",$k);
// $smartyObj->display('stmr_main_header.tpl');
// $smartyObj->display('footer.tpl');
?>