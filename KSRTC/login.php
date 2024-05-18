<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";

$obj=new userclass();
if(isset($_POST['hidden'])AND($_POST['hidden'])=='h')
{
	if(isset($_POST['Email'])AND($_POST['Email'])!=NULL)
	{
		if(isset($_POST['Password'])AND($_POST['Password'])!=NULL)
		{

			$Email=trim($_POST['Email']);
			$Password=trim($_POST['Password']);
            
			$obj->login($Email,$Password);		
}
		else
			echo"<script>alert('Email is Empty')</script>";
	}
	else
		echo"<script>alert('Password is Empty')</script>";
}
$smartyObj->display('login.tpl');
?>


