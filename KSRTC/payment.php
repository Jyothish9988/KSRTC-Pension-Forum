<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$al_key=$_COOKIE['l_key'];
$amount=$_GET['amount'];
$pakey=$_GET['pakey'];//from admin pension amount 
$p_key=$_GET['p_key'];//from admin_pension_approved_view.tpl
$obj=new userclass();
// session_start();
// if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
// {
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
if(isset($_POST['name'])AND($_POST['name'])!=NULL)
{
	if(isset($_POST['cardno'])AND($_POST['cardno'])!=NULL)
		{
	if(isset($_POST['cvv'])AND($_POST['cvv'])!=NULL)
		{
	if(isset($_POST['expirydate'])AND($_POST['expirydate'])!=NULL)
		
		{
			$name=trim($_POST['name']);
			$cardno=trim($_POST['cardno']);
			$cvv=trim($_POST['cvv']);
			$expirydate=trim($_POST['expirydate']);
			$obj->payment($name,$cardno,$cvv,$expirydate,$amount,$al_key,$p_key,$pakey);

		}
											else
												echo"<script>alert('Name is empty')</script>";
											}
											else
												echo"<script>alert('Card Number is empty')</script>";
											}
											else
												echo"<script>alert('CVV is empty')</script>";
											}
											else
												echo"<script>alert('Expiry Date is empty')</script>";
										}
										$smartyObj->display('payment.tpl');
										// }
// else
// {	
// 	Header("location:login.php");
// }
?>





