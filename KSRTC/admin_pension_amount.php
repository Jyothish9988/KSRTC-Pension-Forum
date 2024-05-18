<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj= new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
//message count fetching
$key=$_COOKIE['l_key'];
$k=$obj->admin_msgcount($key);
$smartyObj->assign("msg",$k);

//pensionapply key fetching
$pakey=$_GET['pakey'];
//pensioner key fetching
$p_key=$_GET['p_key'];

//retirement amount fetching
$ream=$_GET['ream'];

//$ream=$obj->fetch_amount_payable($p_key);
 $smartyObj->assign("data",$ream);

//amount submission
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
    if(isset($_POST['amount'])AND($_POST['amount'])!=NULL)
    {
$amount=trim($_POST['amount']);
$obj->admin_pension_amount($amount,$p_key,$pakey);
    }
    else 
        echo"<script>alert('amount is empty')</script>";
}
$smartyObj->display('admin_sub_header.tpl');
$smartyObj->display('admin_pension_amount.tpl');
$smartyObj->display('admin_footer.tpl');
}
else
{   
    Header("location:login.php");
}
?>