
<?php
//last modified upload file 1,2 22-7-22
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();
session_start();

if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['l_key'];
$obj->pension_apply_check($key);
$k=$obj->pension_notification_count($key);
$smartyObj->assign("notif",$k);
$y=$obj->pension_profile($key);
$smartyObj->assign("view1",$y);
$z=$obj->pension_apply_select($key);
$smartyObj->assign("view2",$z);

if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
	if(isset($_POST['fathername'])AND($_POST['fathername'])!=NULL)
		{
	if (preg_match('/^[A-Z a-z]*$/', $_POST['fathername']))
	{
		if(isset($_POST['mothername'])AND($_POST['mothername'])!=NULL)
			{
	if (preg_match('/^[A-Z a-z]*$/', $_POST['mothername']))
		{
			if(isset($_POST['marital'])AND($_POST['marital'])!=NULL)
			{
				if(isset($_POST['nomie'])AND($_POST['nomie'])!=NULL)
	// 				{
	// if (preg_match('/^[A-Z a-z]*$/', $_POST['nomie']))
			{
				if(isset($_POST['nationality'])AND($_POST['nationality'])!=NULL)
				{
					if(isset($_POST['state'])AND($_POST['state'])!=NULL)
					{
						if(isset($_POST['religion'])AND($_POST['religion'])!=NULL)
						{
							if(isset($_POST['category'])AND($_POST['category'])!=NULL)
							{


								if(isset($_POST['qsvcp'])AND($_POST['qsvcp'])!=NULL)
								{
									if(isset($_POST['lbp'])AND($_POST['lbp'])!=NULL)
									{
										if(isset($_POST['da'])AND($_POST['da'])!=NULL)
										{
											if(isset($_POST['pf'])AND($_POST['pf'])!=NULL)
										{


								if(isset($_POST['qsvcpy'])AND($_POST['qsvcpy'])!=NULL)
								{
											$fathername=trim($_POST['fathername']);
											$mothername=trim($_POST['mothername']);
											$marital=trim($_POST['marital']);
											$nomie=trim($_POST['nomie']);
											$nationality=trim($_POST['nationality']);
											$state=trim($_POST['state']);
											$religion=trim($_POST['religion']);
											$category=trim($_POST['category']);
											$qsvcp=trim($_POST['qsvcp']);
											$lbp=trim($_POST['lbp']);
											$da=trim($_POST['da']);
											$pf=trim($_POST['pf']);
						                    $qsvcpy=trim($_POST['qsvcpy']);
				                            $obj->pension_apply($key,$fathername,$mothername,$marital,$nomie,$nationality,$state,$religion,$category,$_FILES['rcert'],$qsvcp,$lbp,$da,$pf,$qsvcpy); 
				                           

				                            $obj->pension_retirement_calculation($key);

				                             }
				                             else
				                             	echo"<script>alert('Service Period Is Empty')</script>";
				                              }
				                             else
				                             	echo"<script>alert('Provident Fund Is Empty')</script>";
				                         }
				                         
				                         else
				                         	echo"<script>alert('Daily Allowance Is Empty')</script>";
				                        
				                        }
				                        else
				                        echo "<script>alert('Last Basic Pay is Empty')</script>";
				                     }
				                      else
				                      echo"<script>alert('Qualifying Service Period is empty')</script>";
				                   
								}
								else
									echo"<script>alert('Category is empty')</script>";	
						
										
								}
								else
									echo"<script>alert('Religion is empty')</script>";
							}
							else
								echo"<script>alert('State is empty')</script>";
							}
								else
									echo"<script>alert('Nationality is empty')</script>";
								}
									else
// 	echo "<script> alert('Please enter alphabets for Nominee !')</script>";	
// }	
// 						else
							echo"<script>alert('Nominee is empty')</script>";
						}
						else
							echo"<script>alert('Marital status is empty')</script>";
					}
							else
	echo "<script> alert('Please enter alphabets for Mothername!')</script>";	
}
					else
						echo"<script>alert('Mothername is empty')</script>";

				}
		else
	echo "<script> alert('Please enter alphabets for Fathername!')</script>";	
}
				else
					echo"<script>alert('Fathername is empty')</script>";

}
$smartyObj->display('pension_sub_header.tpl');
$smartyObj->display('pension_apply.tpl');
$smartyObj->display('footer.tpl');

}
else
{	
	Header("location:login.php");
}
?>





















