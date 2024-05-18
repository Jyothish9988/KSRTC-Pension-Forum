<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$pl_key=$_GET['pl_key'];
// echo$pl_key;exit;
$skey=$_COOKIE['l_key'];

$k=$obj->stmr_pension_chat_fetch_receiver($skey,$pl_key);
$smartyObj->assign("data",$k);



$h=$obj->stmr_pension_chat_fetch_sender($skey,$pl_key);
$smartyObj->assign("data1",$h);	

if(isset($_POST['hide'])AND($_POST['hide'])=='h')

{
if(isset($_POST['msg'])AND($_POST['msg'])!=NULL)
{
	$msg=trim($_POST['msg']);
$obj->stmr_pension_chat($skey,$msg,$pl_key);
}
else
	echo"<script>alert('Message Is Empty')</script>";
}

$smartyObj->display('stmr_sub_header.tpl');
$smartyObj->display('stmr_pension_chat.tpl');
// $smartyObj->display('pension_footer.tpl');

?>
