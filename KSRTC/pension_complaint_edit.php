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
$v=$obj->select_pension_complaint($key);
$smartyObj->assign("keyword",$v);

if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
	if(isset($_POST['Subject'])AND($_POST['Subject'])!=NULL)
	{
		if(isset($_POST['Complaint'])AND($_POST['Complaint'])!=NULL)
		{
			
					$Subject=trim($_POST['Subject']);
					$Complaint=trim($_POST['Complaint']);
			 		$obj->pension_complaint_edit($Subject,$Complaint,$key);
		}
		else
			echo"<script>alert('Address is invalid')</script>";
	}
	else
		echo"<script>alert('Name is invalid')</script>";
}
$smartyObj->display('pension_sub_header.tpl');

$smartyObj->display('pension_complaint_edit.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}

?>