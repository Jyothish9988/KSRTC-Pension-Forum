<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{

$key=$_COOKIE['l_key'];
$k=$obj->msgcount($key);
$smartyObj->assign("msg",$k);
$y=$obj->stmr_profile($key);
$smartyObj->assign("view1",$y);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['Name'])AND($_POST['Name'])!=NULL)
		{
	if (preg_match('/^[A-Z a-z]*$/', $_POST['Name']))
	{
		if(isset($_POST['Address'])AND($_POST['Address'])!=NULL)
		{
			if(isset($_POST['Pincode'])AND($_POST['Pincode'])!=NULL)
				{
			if (preg_match('/^[0-9]*$/', $_POST['Pincode']))
													{
													$no=strlen($_POST['Pincode']);
													if($no==6)
			{
				if(isset($_POST['District'])AND($_POST['District'])!=NULL)
				{
					if(isset($_POST['Gender'])AND($_POST['Gender'])!=NULL)
					{
						if(isset($_POST['DOB'])AND($_POST['DOB'])!=NULL)
						{
							if(isset($_POST['Depo'])AND($_POST['Depo'])!=NULL)
							{
								if(isset($_POST['Contactno'])AND($_POST['Contactno'])!=NULL)
									{
									if (preg_match('/^[0-9]*$/', $_POST['Contactno']))	
												{
												$nm1=strlen($_POST['Contactno']);
												if($nm1>=10 and $nm1<=12)
								{
									if(isset($_POST['Email'])AND($_POST['Email'])!=NULL)
								{
									
											$Name=trim($_POST['Name']);
											$Address=trim($_POST['Address']);
											$Pincode=trim($_POST['Pincode']);
											$District=trim($_POST['District']);
											$Gender=trim($_POST['Gender']);
											$DOB=trim($_POST['DOB']);
											$Depo=trim($_POST['Depo']);
											$Contactno=trim($_POST['Contactno']);
											$Email=trim($_POST['Email']);
				
											$obj->stmr_edit($key,$Name,$Address,$Pincode,$District,$Gender,$DOB,$Depo,$Contactno,$Email);
										}
										else
											echo"<script>alert('Email is empty')</script>";	
								}
								else
												echo "<script> alert('Phone number should be 10 digit or 12 digit')</script>";	
										}
										else
											echo "<script> alert('Please enter numbers for phone number')</script>";	
									}
										
								else
									echo"<script>alert('Phone number is empty')</script>";
							}
							else
								echo"<script>alert('Depo is empty')</script>";
						}
						else
							echo"<script>alert('DOB is empty')</script>";
					}
					else
						echo"<script>alert('Gender is empty')</script>";
				}
				else
					echo"<script>alert('District is empty')</script>";
			}
			else
															echo "<script> alert('pin number must contain 6 characters')</script>";
													}
													else
														echo "<script> alert('Please enter numbers for pincode')</script>";
												}
			else
				echo"<script>alert('Pincode is empty')</script>";
		}
		else
			echo"<script>alert('Address is empty')</script>";

	}
	else
	echo "<script> alert('Please enter alphabets for Name')</script>";	
	}
	else
		echo"<script>alert('Name is empty')</script>";
}
$smartyObj->display('stmr_sub_header.tpl');
$smartyObj->display('stmr_profile.tpl');
$smartyObj->display('footer.tpl');
}
else
{	
	Header("location:login.php");
}
?>





















