<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_GET['key'];
$k=$obj->pension_notification_count($key);
$smartyObj->assign("notif",$k);
$v=$obj->select_pension_feedback($key);
$smartyObj->assign("data",$v);

if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
	if(isset($_POST['feedback'])AND($_POST['feedback'])!=NULL)
	{
		
			
					$feedback=trim($_POST['feedback']);
			 		$obj->pension_feedback_edit($feedback,$key);
		}
		else
			echo"<script>alert('Feedback is invalid')</script>";
	
}
$smartyObj->display('pension_sub_header.tpl');
$smartyObj->display('pension_feedback_edit.tpl');
$smartyObj->display('footer.tpl');

}
else
{	
	Header("location:login.php");

?>