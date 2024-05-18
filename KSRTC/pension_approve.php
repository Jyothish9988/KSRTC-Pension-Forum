<?php
include_once"classes/userclass.php";
include_once"settings/settings.php";
$obj= new userclass();
$keylogin=$_GET['key'];
$obj->pension_approve($keylogin);
?>