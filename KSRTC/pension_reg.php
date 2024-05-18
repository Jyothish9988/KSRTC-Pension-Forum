<?php
include_once"settings/settings.php";
include_once"classes/userclass.php";
$obj=new userclass();

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
					if(isset($_POST['Depo'])AND($_POST['Depo'])!=NULL)
					{
					if(isset($_POST['DOB'])AND($_POST['DOB'])!=NULL)
					{
						if(isset($_POST['Retirementdate'])AND($_POST['Retirementdate'])!=NULL)
						{
							if(isset($_POST['Adharno'])AND($_POST['Adharno'])!=NULL)
								{
			if (preg_match('/^[0-9]*$/', $_POST['Adharno']))
													{
													$no=strlen($_POST['Adharno']);
													if($no==12)

			
							{
								if(isset($_POST['Contactno'])AND($_POST['Contactno'])!=NULL)
								{
									if (preg_match('/^[0-9]*$/', $_POST['Contactno']))	
												{
												$nm1=strlen($_POST['Contactno']);
												if($nm1>=10 and $nm1<=12)
										{
									if(isset($_POST['Photo'])AND($_POST['Photo'])!=NULL)
									{
										if(isset($_POST['Email'])AND($_POST['Email'])!=NULL)
										{

											if(isset($_POST['Password'])AND($_POST['Password'])!=NULL)
											{
												$Name=trim($_POST['Name']);
												$Address=trim($_POST['Address']);
												$Pincode=trim($_POST['Pincode']);
												$District=trim($_POST['District']);
												$Gender=trim($_POST['Gender']);
												$Depo=trim($_POST['Depo']);
												$DOB=trim($_POST['DOB']);
												$Retirementdate=trim($_POST['Retirementdate']);
												$Adharno=trim($_POST['Adharno']);
												$Contactno=trim($_POST['Contactno']);
												$Photo=trim($_POST['Photo']);
												$Email=trim($_POST['Email']);
												$Password=trim($_POST['Password']);
												$obj->pension_reg($Name,$Address,$Pincode,$District,$Gender,$Depo,$DOB,$Retirementdate,$Adharno,$Contactno,$Photo,$Email,$Password);


											}
											// else
												// echo"<script>alert('Password is empty!')</script>";
										}
										// else
											// echo"<script>alert('Email is empty!')</script>";
									}
									// else
										// echo"<script>alert('Photo is empty!')</script>";
								}
								// else
												// echo "<script> alert('Phone number should be 10 digit or 12 digit!')</script>";	
										}
										// else
											// echo "<script> alert('Please enter numbers for phone number!')</script>";	
									}
											
								// else
									// echo"<script>alert('Contact number is empty!')</script>";
							}
							// else
												// echo "<script> alert('Aadharnumber should be 10 digit or 12 digit!')</script>";	
										}
										// else
											// echo "<script> alert('Please enter numbers for Aadharnumber!')</script>";	
									}
							// else
								// echo"<script>alert('Adhar number is empty!')</script>";
						}
						// else
							// echo"<script>alert('Retirement date is empty!')</script>";

					}
					// else
						// echo"<script>alert('Date of birth is empty!')</script>";
				}
				// else
					// echo"<script>alert('Depo is empty!')</script>";

				}
				// else
					// echo"<script>alert('Gender is empty!')</script>";
			}
			// else
				// echo"<script>alert('District is empty!')</script>";
		}
		// else
															// echo "<script> alert('Pincode must contain 6 characters!')</script>";
													}
													// else
														// echo "<script> alert('Please enter numbers for pincode'!)</script>";
												}
		// else
			// echo"<script>alert('Pincode is empty!')</script>";
	}
	// else
		// echo"<script>alert('Address is empty!')</script>";
	}
	// else
	// echo "<script> alert('Please enter alphabets for Name!')</script>";	
}
// else
// echo"<script>alert('Name is empty!')</script>";
}
$smartyObj->display('home_header.tpl');
$smartyObj->display('pension_reg.tpl');
$smartyObj->display('home_footer.tpl');
?>