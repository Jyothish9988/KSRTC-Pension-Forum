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
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 if(isset($_POST['msg'])AND($_POST['msg'])!=NULL)
 {
 	

										$msg=trim($_POST['msg']);
											
										$obj->stmr_pension_panel_reply($msg,$key);
		}
			else
			echo"<script>alert('message is empty')</script>";
			
		}
		$smartyObj->display("stmr_sub_header.tpl");
$smartyObj->display("stmr_pension_panel_reply.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>