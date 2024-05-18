<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['l_key'];
$senderid=$_GET['id'];

$k=$obj->admin_msgcount($key);
$smartyObj->assign("msg",$k);


if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 if(isset($_POST['msg'])AND($_POST['msg'])!=NULL)
 {
 	

										$msg=trim($_POST['msg']);
											
										$obj->admin_msg_reply_stmr_send($msg,$key,$senderid);
		}
			else
			echo"<script>alert('Message is empty')</script>";
			
		}
// $smartyObj->display("admin_sub_header.tpl");
$smartyObj->display("admin_msg_view_reply_stmr_send.tpl");
// $smartyObj->display("admin_footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>