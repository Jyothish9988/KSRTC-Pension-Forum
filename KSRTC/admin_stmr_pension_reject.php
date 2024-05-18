<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj= new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_GET['key'];
$obj->admin_stmr_pension_reject($key);
}
else
{	
	Header("location:login.php");
}
?>