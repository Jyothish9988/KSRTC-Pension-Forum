<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['l_key'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 if(isset($_POST['msg'])AND($_POST['msg'])!=NULL)
 {
 	

										$msg=trim($_POST['msg']);
											
										$obj->stmr_admin_msg_send($msg,$key);
	
		}
			else
			echo"<script>alert('Message is empty')</script>";
			
		}
$smartyObj->display("stmr_sub_header.tpl");		
$smartyObj->display("stmr_admin_msg_send.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>