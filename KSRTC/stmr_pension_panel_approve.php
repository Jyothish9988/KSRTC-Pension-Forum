<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj= new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_GET['key'];
$obj->stmr_pension_panel_approve($key);
}
else
{	
	Header("location:login.php");
}
?>