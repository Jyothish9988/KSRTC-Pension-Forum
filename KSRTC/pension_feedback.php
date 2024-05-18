<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['l_key'];
$k=$obj->pension_notification_count($key);
$smartyObj->assign("notif",$k);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
 if(isset($_POST['feedback'])AND($_POST['feedback'])!=NULL)
 {
 	

										$feedback=trim($_POST['feedback']);
											
										$obj->pension_feedback_submit($feedback,$key);
	
		}
			else
			echo"<script>alert('Feedback is empty')</script>";
			
		}
$smartyObj->display("pension_sub_header.tpl");		
$smartyObj->display("pension_feedback.tpl");
$smartyObj->display("footer.tpl");

}
else
{	
	Header("location:login.php");
}
?>