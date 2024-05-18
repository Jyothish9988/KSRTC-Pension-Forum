<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
$skey=$_COOKIE['l_key'];
// $rkey=$_GET[''];

$k=$obj->pension_stmr_chat_fetch_sender($skey);
$smartyObj->assign("data",$k);

$j=$obj->pension_stmr_chat_fetch_receiver($skey);
$smartyObj->assign("data1",$j);


if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['msg'])AND($_POST['msg'])!=NULL)
{
	$msg=trim($_POST['msg']);
$obj->pension_stmr_chat($skey,$msg);
}
else
	echo"<script>alert('Message Is Empty')</script>";
}

$smartyObj->display('pension_sub_header.tpl');
$smartyObj->display('pension_stmr_chat.tpl');
// $smartyObj->display('pension_footer.tpl');

?>
