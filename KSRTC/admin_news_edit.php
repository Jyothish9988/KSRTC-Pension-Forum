<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['l_key'];
$k=$obj->admin_msgcount($key);
$smartyObj->assign("msg",$k);
$nkey=$_GET['key'];
$v=$obj->select_admin_news_content($nkey);
$smartyObj->assign("data",$v);

if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
	if(isset($_POST['title'])AND($_POST['title'])!=NULL)
	{
		if(isset($_POST['report'])AND($_POST['report'])!=NULL)
		{
		
			
					$title=trim($_POST['title']);
					$report=trim($_POST['report']);
			 		$obj->admin_news_edit($title,$report,$nkey); 	
		}
		else
			echo"<script>alert('Report is invalid')</script>";
	}
	else
		echo"<script>alert('Title is invalid')</script>";
}
$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('admin_news_edit.tpl');
$smartyObj->display('admin_footer.tpl');
}
else
{	
	Header("location:login.php");
}

?>