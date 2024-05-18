<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj= new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$keylogin=$_GET['key'];
$obj->pension_reject($keylogin);
}
else
{	
	Header("location:login.php");
}
?>