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
 if(isset($_POST['Subject'])AND($_POST['Subject'])!=NULL)
 {
 	if(isset($_POST['Complaint'])AND($_POST['Complaint'])!=NULL)
 	{
 		
											$Subject=trim($_POST['Subject']);
											$Complaint=trim($_POST['Complaint']);
											
											$obj->pension_complaint_submit($Subject,$Complaint,$key);
	
	    }
	        else
			echo"<script>alert('Complaint is empty')</script>";
					
		}
			else
			echo"<script>alert('Subject is empty')</script>";
			
		}
$smartyObj->display("pension_sub_header.tpl");
$smartyObj->display("pension_complaint.tpl");
$smartyObj->display("footer.tpl");
}
else
{	
	Header("location:login.php");
}
?>