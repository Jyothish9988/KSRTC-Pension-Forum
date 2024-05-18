<?php
class userclass
{
	


//1
	function stmr_reg($Name,$Address,$Pincode,$District,$Gender,$DOB,$Depo,$Contactno,$Email,$Password)//stmr_reg.php

	{
		$enc=md5($Password);
		$keylogin=uniquekey("login","l_key");
		$qrylogin="insert into login(l_key,Email,Password,Usertype)values('".$keylogin."','".$Email."','".$enc."','1')";
		$exelogin=mysql_query($qrylogin);

		$keyreg=uniquekey("userreg","reg_key");
			$idlogin=keytoid("login","l_key",$keylogin);
	
		$qryreg="insert into userreg(reg_key,Name,Address,Pincode,District,Gender,DOB,Depo,Contactno,loginid)values('".$keyreg."','".$Name."','".$Address."','".$Pincode."','".$District."','".$Gender."','".$DOB."','".$Depo."','".$Contactno."','".$idlogin."')";
		$exereg=mysql_query($qryreg);

		if($exereg && $exelogin)
		{
			echo "<script>alert('Registration successful')</script>";
		}
		else
			echo "<script>alert('Registration not successful')</script>";

	}




//2
	function pension_reg($Name,$Address,$Pincode,$District,$Gender,$Depo,$DOB,$Retirementdate,$Adharno,$Contactno,$Photo,$Email,$Password)
	//pension_reg.php



	{
		$enc=md5($Password);
		$keylogin=uniquekey("login","l_key");
		
		$qrylogin="insert into login(l_key,Email,Password,Usertype)values('".$keylogin."','".$Email."','".$enc."','2')";
		//echo $qrylogin;exit;
		$exelogin=mysql_query($qrylogin);
		//echo $keylogin;exit;
		$idlogin=keytoid("login","l_key",$keylogin);
		//echo $id1;exit;
		$keypension=uniquekey("pension","p_key");

		$qrypension="insert into pension(p_key,Name,Address,Pincode,District,Gender,Depo,DOB,Retirementdate,Adharno,Contactno,Photo,loginid)values('".$keypension."','".$Name."','".$Address."','".$Pincode."','".$District."','".$Gender."','".$Depo."','".$DOB."','".$Retirementdate."','".$Adharno."','".$Contactno."','".$Photo."','".$idlogin."')";
		//echo $qrypension;exit;
		$exepension=mysql_query($qrypension);
		
	if($exelogin && $exepension)
	{
		echo"<script>alert('Submission successful')</script>";
	}
	else
	{
		echo"<script>alert('Submission unsuccessful')</script>";
}

	}




//3
	function admin_stmr_fetch_data()//admin_stmr_view.php
{
	$qry="select * from userreg inner join login on login.id=userreg.loginid";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	//print_r($arr);exit;
	return $arr;
}



//4
function admin_fetch_pension()//admin_pension_view.php
{
	$qry="select * from pension inner join login on login.id=pension.loginid";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}



//5
function stmr_approve($keylogin)//stmr_approve.php
{
	$idlogin=keytoid("login","l_key",$keylogin);
	$qry="update login set Status='1' where id='".$idlogin."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Approve successful');window.location.href='admin_stmr_view.php';</script>";
	}
	else{
		echo"<script>alert('Approve unsuccessful');window.location.href='admin_stmr_view.php';</script>";
	}

}



//6
function stmr_reject($keylogin) //stmr_reject.php
{
	$idlogin=keytoid("login","l_key",$keylogin);
	$qry="update login set Status='2' where id='".$idlogin."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Reject scuccessful');window.location.href='admin_stmr_view.php';</script>";
	}
	else
	{
		echo"<script>alert('Reject unsuccessful');window.location.href='admin_stmr_view.php';</script>";
	}
}




//7
function pension_approve($keylogin) //pension_approve.php
{
	$idlogin=keytoid("login","l_key",$keylogin);
	$qry="update login set Status='1' where id='".$idlogin."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Approval succesful');window.location.href='admin_pension_view.php';</script>";
	}
	else
	{
		echo"<script>alert('Approval unsuccessful');window.location.href='admin_pension_view.php';</script>";
	}

}



//8
function pension_reject($keylogin) //pension_reject.php
{
$idlogin=keytoid("login","l_key",$keylogin);
	$qry="update login set Status='2' where id='".$idlogin."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Rejection succesful');window.location.href='admin_pension_view.php';</script>";
	}
	else
	{
		echo"<script>alert('Rejection unsuccessful');window.location.href='admin_pension_view.php';</script>";
	}
}


//9
function login($Email,$Password) //login.php
{
	$enc=md5($Password);
	$qry="select l_key,Usertype,Status from login where Email='".$Email."' and Password='".$enc."'";
	// echo$qry;exit(); 
    $exe=mysql_query($qry);
    $key=null;
    $usertype=null;
    $c=0;
    while($rr=mysql_fetch_array($exe))
    {
    	$key=$rr['l_key'];
    	$Usertype=$rr['Usertype'];
    	$Status=$rr['Status'];
    	$c=$c+1;

    }

    if($c>0)
    {
    	if($Status==1)
{
    	setcookie("l_key",$key);
    	setcookie("logined",1);
    	if($Usertype==0)
    	{
    		header("location:admin_home.php");
    	}
    	elseif ($Usertype==1)
    	{
    		header("location:stmr_home.php");
    	}
    	elseif($Usertype==2)
    	{
    		header("location:pension_home.php");
    	}
    }

elseif($Status==2)
   {
   	echo"<script> alert('Your Registration has been rejected by admin please reregister with valid information !')</script>";
   }

   else
   {
   	echo"<script> alert('User approval pending')</script>";
   }
}
   else
   {
   	echo"<script> alert('Invalid user')</script>";
   }

}


//10
function stmr_profile($key){  //stmr_profile.php
	$id=keytoid("login","l_key",$key);
	$qry="select * from userreg inner join login on login.id=userreg.loginid where userreg.loginid='".$id."'";
	// echo $qry;exit;
	
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}


//11
function stmr_edit($key,$Name,$Address,$Pincode,$District,$Gender,$DOB,$Depo,$Contactno,$Email) //stmr_edit.php
{
		$id=keytoid("login","l_key",$key);
		$qry="update userreg set Name='".$Name."', Address='".$Address."',Pincode='".$Pincode."',District='".$District."',Gender='".$Gender."',DOB='".$DOB."',Depo='".$Depo."',Contactno='".$Contactno."' where loginid='".$id."'";

		$exe=mysql_query($qry);
		$qry1="update login set Email='".$Email."' where id='".$id."'";
		$exe1=mysql_query($qry1);
		if($exe && $exe1)
		{
			header("location:stmr_profile.php");
		}

		else
		{
			echo"<script>alert('Updation unsuccessful')</script>";
		}
}



//12
function pension_profile($key) //pension_profile.php
{
	$id=keytoid("login","l_key",$key);
	$qry="select * from pension inner join login on login.id=pension.loginid where pension.loginid='".$id."'";
	// echo $qry;exit;
	
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}



//13
function pension_profile_edit($key,$Name,$Address,$Pincode,$District,$Gender,$Depo,$DOB,$Contactno,$Email) //pension_profile.php
{
		$id=keytoid("login","l_key",$key);
		$qry="update pension set Name='".$Name."', Address='".$Address."',Pincode='".$Pincode."',District='".$District."',Gender='".$Gender."',Depo='".$Depo."',DOB='".$DOB."',Contactno='".$Contactno."' where loginid='".$id."'";
		// echo $qry;exit;
		$exe=mysql_query($qry);
		$qry1="update login set Email='".$Email."' where id='".$id."'";
		$exe1=mysql_query($qry1);
		if($exe && $exe1)
		{
			echo"<script>alert('Updation successful')</script>";
			header("location:pension_profile.php");

		}

		else
		{
			echo"<script>alert('Updation unsuccessful')</script>";
		}
}



//14
function admin_complaint_table_view()//admin_pension_complaint_view.php
{
	$qry="select * from complaint inner join pension on pension.loginid=complaint.loginid";
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}





//15
function pension_complaint_submit($Subject,$Complaint,$key)//pension_complaint.php
{	
	$id=keytoid("login","l_key",$key);
	$id1=uniquekey("complaint","ckey");
	 $date=date('Y-m-d');
	$qry="insert into complaint(ckey,Subject,Complaint,loginid,Date)
	 values ('".$id1."','".$Subject."','".$Complaint."','".$id."','".$date."')";
		$exe=mysql_query($qry);
	// echo$qry;exit();    

	if($exe)
	{
		echo"<script>alert('Complaint Submission succesfull')</script>";
	}
	else
	{
		echo"<script>alert('Complaint Submission unsuccesfull')</script>";
	}
}


//16
function fetch_pension_complaint_list($key) //pension_complaint_view.php
{
	$id=keytoid("login","l_key",$key);
	$qry="select * from complaint where loginid='".$id."'";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}



//17
function pension_complaint_delete($key) //pension_complaint_delete.php
{
	$id=keytoid("complaint","ckey",$key);
	$qry="delete from complaint where id='".$id."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='pension_complaint_view.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='pension_complaint_view.php';</script>";
    }
}

//18
function pension_complaint_edit($Subject,$Complaint,$key) //pension_complaint_edit.php
{
	$id=keytoid("complaint","ckey",$key);
	$qry="update complaint set Subject='".$Subject."',Complaint='".$Complaint."' where id='".$id."'";
	// echo $qry;exit();
	$exe=mysql_query($qry);
    if($exe){
    	echo"<script> alert('Updation successful')</script>";
    }
    else
    {
    	echo"<script> alert('Updation unsuccessful')</script>";
    }

}

//19
function select_pension_complaint($key) //pension_complaint_edit.php
{
   $id=keytoid("complaint","ckey",$key);
   $qry="select * from complaint where id='".$id."'";
   $exe=mysql_query($qry);
   $arr=array();
   while ($rr=mysql_fetch_array($exe)) 
   {
   	$arr[]=$rr;

   }
   return $arr;
} 

// 4-5-22

//20
function admin_news($title,$report)//admin_news.php
{
	$nkey=uniquekey("news","nkey");
	$date=date('Y-m-d');
	$qry="insert into news(title,report,date,nkey) values('".$title."','".$report."','".$date."','".$nkey."')";
	$exe=mysql_query($qry);
	if($exe){
		echo"<script>alert('News submission successfull')</script>";
		
}
	else
		echo"<script>alert('News submission unsuccessful')</script>";

}

//21

function admin_fetch_news_list() //admin_news_view.php
{
	
	$qry="select * from news ORDER BY date DESC";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}

//22
function admin_news_edit($title,$report,$key) //admin_news_edit.php
{
	$id=keytoid("news"," nkey",$key);
	$qry="update news set title='".$title."',report='".$report."' where id='".$id."'";
	// echo $qry;exit();
	$exe=mysql_query($qry);
    if($exe){
    	echo"<script> alert('Updation successful')</script>";
    }
    else
    {
    	echo"<script> alert('Updation unsuccessful')</script>";
    }

}

//23
function select_admin_news_content($nkey)//admin_news_edit.php
{
	// echo$key;exit;
	
   $id=keytoid("news","nkey",$nkey);
   $qry="select * from news where id='".$id."'";
   // echo$qry;exit;
   $exe=mysql_query($qry);
   $arr=array();
   $arr=null;
   while ($rr=mysql_fetch_array($exe)) 
   {
   	$arr[]=$rr;

   }
   return $arr;

}


//24
function admin_news_delete($key) //admin_news_delete.php
{
	$id=keytoid("news","nkey",$key);
	$qry="delete from news where id='".$id."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='admin_news_view.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='admin_news_view.php';</script>";
    }
}

//25
function fetch_news_list() //news.php
{

$qry="select * from news";
$exe=mysql_query($qry);
$arr= array();
while($rr=mysql_fetch_array($exe))
{

	$arr[]=$rr;
}
return $arr;

}

//9-5-22


//26
function pension_feedback_submit($feedback,$key)
{	
	$loginid=keytoid("login","l_key",$key);
	$fkey=uniquekey("feedback","fkey");
	 $date=date('Y-m-d');
	$qry="insert into feedback(fkey,feedback,date,loginid)
	 values ('".$fkey."','".$feedback."','".$date."','".$loginid."')";
		$exe=mysql_query($qry);
	// echo$qry;exit();    

	if($exe)
	{
		echo"<script>alert('Feedback submission succesfull')</script>";
	}
	else
	{
		echo"<script>alert('Feedback submission unsuccesfull')</script>";
	}
}


//27
function pension_feedback_delete($key) //pension_feedback_delete.php
{
	$id=keytoid("feedback","fkey",$key);
	$qry="delete from feedback where id='".$id."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='pension_feedback_view.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='pension_feedback_view.php';</script>";
    }
}


//28
function select_pension_feedback($key) //pension_complaint_edit.php
{
   $id=keytoid("feedback","fkey",$key);
   $qry="select * from feedback where id='".$id."'";
   $exe=mysql_query($qry);
   $arr=array();
   while ($rr=mysql_fetch_array($exe)) 
   {
   	$arr[]=$rr;

   }
   return $arr;
} 

//29
function pension_feedback_edit($feedback,$key) //admin_news_edit.php
{
	$id=keytoid("feedback","fkey",$key);
	$date=date('Y-m-d');
	$qry="update feedback set feedback='".$feedback."',date='".$date."' where id='".$id."'";
	// echo $qry;exit();
	$exe=mysql_query($qry);
    if($exe){
    	echo"<script> alert('Updation successful')</script>";
    }
    else
    {
    	echo"<script> alert('Updation unsuccessful')</script>";
    }

}

//30
function fetch_pension_feedback_list($key) //pension_feedback_view.php
{
	$id=keytoid("login","l_key",$key);
	$qry="select * from feedback where loginid='".$id."'";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}

//31
function admin_feedback_table_view()//admin_pension_feedback_view.php
{
	$qry="select * from feedback inner join pension on feedback.loginid=pension.loginid ORDER BY feedback.id DESC";
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}

//10-5-22
//last modified upload files
//32

function pension_apply($key,$fathername,$mothername,$marital,$nomie,$nationality,$state,$religion,$category,$files=NULL,$qsvcp,$lbp,$da,$pf,$qsvcpy) //pension_apply.php
{
		$loginid=keytoid("login","l_key",$key);
		$pakey=uniquekey("pensionapply","pakey");

		

		
if($qsvcp=='10-20')
{
		$bpam=($lbp/2)*($qsvcpy/20);
	}
	else
		
	{
				$bpam=($lbp/2);

	}
//echo$rcert;exit;

		$qry="insert into pensionapply(pakey,fathername,mothername,marital,nomie,nationality,state,religion,category,loginid,qsvcp,rcert,lbp,da,pf,qsvcpy,bpam) values('".$pakey."','".$fathername."','".$mothername."','".$marital."','".$nomie."','".$nationality."','".$state."','".$religion."','".$category."','".$loginid."','".$qsvcp."','".$files['name']."','".$lbp."','".$da."','".$pf."','".$qsvcpy."','".$bpam."')";

		// echo$qry;exit;
		$d="uploads/".$pakey;

		$exe=mysql_query($qry);
		
		if($exe)
		{
			mkdir($d);
			move_uploaded_file($files['tmp_name'], $d."/".$files['name']);
			echo"<script>alert('Submission successful')</script>";
		}

		else
		{
			echo"<script>alert('Submission unsuccessful')</script>";
		}
	}
	




//33
function pension_apply_select($key) //pension_apply.php
{
	$id=keytoid("login","l_key",$key);
$qry="SELECT * FROM pension inner join pensionapply on pensionapply.loginid=pension.loginid inner join  login on login.id=pension.loginid where pensionapply.loginid='".$id."'";
	// echo $qry;exit;
	
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}



//34
function pension_apply_update($key,$fathername,$mothername,$marital,$nationality,$state,$religion,$category,$qsvcp,$lbp,$da,$pf,$qsvcpy) //pension_apply_view_edit.php
{

		$id=keytoid("login","l_key",$key);

		if($qsvcp=='10-20')
{
		$bpam=($lbp/2)*($qsvcpy/20);
	}
	else
		
	{
				$bpam=($lbp/2);

	}
	

		$qry="update pensionapply set fathername='".$fathername."', mothername='".$mothername."',marital='".$marital."',nationality='".$nationality."',state='".$state."',religion='".$religion."',category='".$category."',qsvcp='".$qsvcp."',lbp='".$lbp."',da='".$da."',pf='".$pf."',qsvcpy='".$qsvcpy."',bpam='".$bpam."' where pensionapply.loginid='".$id."'";
		$exe=mysql_query($qry);

		if($exe)
		{
			echo"<script>alert('Updation successful')</script>";

		}

		else
		{
			echo"<script>alert('Updation unsuccessful')</script>";
		}
}

//35

function stmr_pension_panel($key)//stmr_pension_panel.php
{
	$id=keytoid("login","l_key",$key);

	$qry="SELECT pensionapply.pass_status,login.Email,pension.Name,pension.Address,pension.Pincode,pension.District,pension.Gender,pension.Depo,pension.DOB,pension.Retirementdate,pension.Adharno,pension.Contactno,pension.Photo,pensionapply.fathername,pensionapply.mothername,pensionapply.marital,pensionapply.nomie,pensionapply.nationality,pensionapply.state,pensionapply.religion,pensionapply.category,pensionapply.loginid,pensionapply.qsvcp,pensionapply.rcert,pensionapply.lbp,pensionapply.da,pensionapply.pf,pensionapply.qsvcpy,pensionapply.bpam,pensionapply.pakey FROM pension inner join pensionapply on pensionapply.loginid=pension.loginid inner join  login on login.id=pension.loginid inner join userreg on userreg.Depo=pension.Depo where userreg.loginid='".$id."'";
	// echo $qry;exit;
	
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}

//36
function stmr_pension_panel_approve($key)
{
	$id=keytoid("pensionapply","pakey",$key);
	$qry="update pensionapply set pass_status='1' where id='".$id."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Approval succesful');window.location.href='stmr_pension_panel.php';</script>";
	}
	else
	{
		echo"<script>alert('Approval unsuccessful');window.location.href='stmr_pension_panel.php';</script>";
	}

}
//37

function admin_stmr_pension_panel_view()//admin_stmr_pension_panel_view.php
{
	// $id=keytoid("login","l_key",$key);
	$qry="SELECT * FROM pension inner join pensionapply on pensionapply.loginid=pension.loginid inner join  login on login.id=pension.loginid where pass_status='1'";
	// echo $qry;exit;
	
	$exe=mysql_query($qry);
		$arr=array();

	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;

	}
	return $arr;
}



//38
function admin_stmr_pension_approve($key) //admin_stmr_pension_approve.php
{
	$id=keytoid("pensionapply","pakey",$key);
	$qry="update pensionapply set status='1' where id='".$id."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Approval succesful');window.location.href='admin_stmr_pension_panel_view.php';</script>";
	}
	else
	{
		echo"<script>alert('Approval unsuccessful');window.location.href='admin_stmr_pension_panel_view.php';</script>";
	}

}


//39
function admin_stmr_pension_reject($key) //admin_stmr_pension_reject.php
{
$id=keytoid("pensionapply","pakey",$key);
	$qry="update pensionapply set status='2' where id='".$id."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Rejection succesful');window.location.href='admin_stmr_pension_panel_view.php';</script>";
	}
	else
	{
		echo"<script>alert('Rejection unsuccessful');window.location.href='admin_stmr_pension_panel_view.php';</script>";
	}
}

//13-5-22

//40
function pension_apply_view_delete($key)
{
	$id=keytoid("pensionapply","pakey",$key);
	$qry="delete from pensionapply where id='".$id."'";
	//echo $qry;$exit;
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='pension_apply_view.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='pension_apply_view.php';</script>";
    }
}

//41

function pension_message_send($msg,$key)
{	
	// $qry="select loginid from "userreg"";
	$senderid=keytoid("login","l_key",$key);
	 $qryy="select userreg.loginid from userreg inner join pension on pension.Depo=userreg.Depo where pension.loginid='".$senderid."'";
	// echo $qryy;exit;
$exe1=mysql_query($qryy);
// echo$exe1;exit;
$a=null;


while($rr=mysql_fetch_array($exe1))
{
	$a=$rr['loginid'];
}
// echo$a;exit;
	$senderid=keytoid("login","l_key",$key);
	$mkey=uniquekey("message","mkey");
	 date_default_timezone_set("Asia/Kolkata");
	 $date=date('Y-m-d');
	 $time=date('h:i:sa');
	$qry="insert into message(mkey,msg,date,time,senderid,receiverid,usertype)
	 values ('".$mkey."','".$msg."','".$date."','".$time."','".$senderid."','".$a."','2')";
	// echo$qry;exit;
		$exe=mysql_query($qry);
	// echo$qry;exit();    
  

	if($exe)
	{
		echo"<script>alert('Message submission succesfull')</script>";
	}
	else
	{
		echo"<script>alert('Message submission unsuccesfull')</script>";
	}
}
//42
//last modified 23-7-22
function stmr_pension_message_view($key) //pension_feedback_view.php
{
	$id=keytoid("login","l_key",$key);
	$qry="select * from message left join pension on pension.loginid=message.senderid where message.receiverid='".$id."'";
	// echo$qry;exit;
		$qryy="update message set viewstatus='1' where receiverid='".$id."'";
$exe1=mysql_query($qryy);
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}
//14-5-22
//43
function stmr_pension_panel_reply($msg,$key) //pension_approve.php
{
	$senderid=keytoid("login","l_key",$key);

	 $qryy="select pension.loginid from pension inner join userreg on userreg.Depo=pension.Depo where userreg.loginid='".$senderid."'";
	// echo $qryy;exit;
$exe1=mysql_query($qryy);
// echo$exe1;exit;
$a=null;

while($rr=mysql_fetch_array($exe1))
{
	$a=$rr['loginid'];
}
// echo$a;exit;
	$senderid=keytoid("login","l_key",$key);
	$mkey=uniquekey("message","mkey");
	 date_default_timezone_set("Asia/Kolkata");
	 $date=date('Y-m-d');
	 $time=date('h:i:sa');
	$qry="insert into message(mkey,msg,date,time,senderid,receiverid,usertype)
	 values ('".$mkey."','".$msg."','".$date."','".$time."','".$senderid."','".$a."','1')";
	// echo$qry;exit;
		$exe=mysql_query($qry);
	// echo$qry;exit
	if($exe1&&$exe)
	{
		echo"<script>alert('Approval succesful');window.location.href='stmr_pension_message_view.php';</script>";
	}
	else
	{
		echo"<script>alert('Approval unsuccessful');window.location.href='stmr_pension_message_view.php';</script>";
	}

}


function pension_stmr_message_reply_view($key) //pension_feedback_view.php
{
	$id=keytoid("login","l_key",$key);

	$qry="select * from message inner join userreg on userreg.loginid=message.senderid where message.receiverid='".$id."'";
	// echo$qry;exit;

	$qryy="update message set viewstatus='1' where receiverid='".$id."'";

	$exe=mysql_query($qry);
	$exe1=mysql_query($qryy);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}



function pension_msg_pension_view($key) //pension_msg_pension_view.php
{
	$id=keytoid("login","l_key",$key);
	$qry="select * from message where senderid='".$id."'";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;


	// echo$qry;exit;
	$qryy="update message set viewstatus='1' where receiverid='".$id."'";
	$exe1=mysql_query($qryy);
}



function stmr_msg_stmr_view($key) //pension_msg_pension_view.php
{
	$id=keytoid("login","l_key",$key);
	$qry="select * from message where senderid='".$id."'";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
	$qryy="update message set viewstatus='1' where receiverid='".$id."'";
	$exe1=mysql_query($qryy);
}



function msgcount($key)
{
	$id=keytoid("login","l_key",$key);
	$qry="select count(msg) from message where receiverid='".$id."'";
	$exe=mysql_query($qry);
		$arr=null;
	while($rr=mysql_fetch_array($exe))
	{
		$arr=$rr['count(msg)'];
	}
	return $arr;
}

//20-5-22
function pension_msg_pension_view_delete($key) //pension_msg_pension_view_delete
{
	$id=keytoid("message","mkey",$key);
	$qry="delete from message where id='".$id."'";
	$exe=mysql_query($qry);
	if($exe)
	{
		echo"<script>alert('Deletion successful');window.location.href='pension_msg_pension_view.php';</script>";
	}
	else
    {
			echo"<script>alert('Deletion unsuccessful');window.location.href='pension_msg_pension_view.php';</script>";
    }
}

//21-5-22
function stmr_admin_msg_send($msg,$key)
{
	$qry1="select id from login where usertype='0'";
	$exe=mysql_query($qry1);
	$arr=null;
	while($rr=mysql_fetch_array($exe))
	{
		$arr=$rr['id'];
	}
	$senderid=keytoid("login","l_key",$key);
	$mkey=uniquekey("message","mkey");
	 date_default_timezone_set("Asia/Kolkata");
	 $date=date('Y-m-d');
	 $time=date('h:i:sa');
	$qry="insert into message(mkey,msg,date,time,senderid,receiverid,usertype)
	 values ('".$mkey."','".$msg."','".$date."','".$time."','".$senderid."','".$arr."','1')";
	// echo$qry;exit;
		$exe=mysql_query($qry);
	// echo$qry;exit();    
	

	if($exe)
	{
		echo"<script>alert('Message submission succesfull')</script>";
	}
	else
	{
		echo"<script>alert('Message submission unsuccesfull')</script>";
	}
}


function admin_msg_view_stmr_send($key) //stmr_admin_msg_send_view.php
{
	$id=keytoid("login","l_key",$key);
	
	$qry="select * from message inner join userreg on message.senderid=userreg.loginid where usertype='1' ";
	// echo$qry;exit;
		$qryy="update message set viewstatus='1' where receiverid='0'";
$exe1=mysql_query($qryy);
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}

function admin_msg_reply_stmr_send($msg,$key,$senderid) //stmr_admin_msg_send_view_reply.php
{

	$mkey=uniquekey("message","mkey");
	$id=keytoid("login","l_key",$key);
	 date_default_timezone_set("Asia/Kolkata");
	 $date=date('Y-m-d');
	 $time=date('h:i:sa');
	$qry="insert into message(mkey,msg,date,time,senderid,receiverid)
	 values ('".$mkey."','".$msg."','".$date."','".$time."','".$id."','".$senderid."')";
	// echo$qry;exit;
		$exe=mysql_query($qry);
	// echo$qry;exit
	if($exe)
	{
		echo"<script>alert('Reply succesful');window.location.href='admin_msg_view_stmr_send.php';</script>";
	}
	else
	{
		echo"<script>alert('Reply unsuccessful');window.location.href='admin_msg_view_stmr_send.php';</script>";
	}

}

//22-5-22
function admin_msgcount($key)
{
	$id=keytoid("login","l_key",$key);
	$qry="select count(msg) from message where receiverid='".$id."'";
	$exe=mysql_query($qry);
		$arr=null;
	while($rr=mysql_fetch_array($exe))
	{
		$arr=$rr['count(msg)'];
	}
	return $arr;
}


//22-5-22
function stmr_admin_msg_reply_view($key) //pension_feedback_view.php
{
	$id=keytoid("login","l_key",$key);
	$qry="select * from message inner join userreg on userreg.loginid=message.receiverid where usertype='0'";
	// echo$qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}

//12-6-22
function admin_pension_approved_view()//admin_pension_view.php
{
	$qry="select * from pension inner join login on login.id=pension.loginid inner join pensionapply on pensionapply.loginid=login.id where pensionapply.status='1'";
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
				// $bt=$rr['tamount'];//total amount from table bank

	// $pl_key=
	return $arr;
}






//18-6-22 modified in 23-6-22
//added pensioner notification
function payment($name,$cardno,$cvv,$expirydate,$amount,$al_key,$p_key,$pakey)//payment.php

//p_key->pensioner key, p_key from pension table
//paykey->payment key, paykey from paymen table
//al_key->admin login key, l_key from login table
	{

		// $qry12="select contactno from pension where  p_key='".$p_key."'";
		// //echo$qry12;exit;
		
		// $exe12=mysql_query($qry12);
		// $contactnumber=null;
		// while($rr=mysql_fetch_array($exe12))
		// {
		// 	$contactnumber=$rr['contactno'];//contactno from table pension
		// }

		$qry1="select tamount from bank where cvv='".$cvv."' and cardno='".$cardno."'";
		
		$exe1=mysql_query($qry1);
		$bt=null;
		while($rr=mysql_fetch_array($exe1))
		{
			$bt=$rr['tamount'];//total amount from table bank
		}

		if ($bt>=$amount) {
			$bt1=$bt-$amount;
		

//admin loginid
	$idlogin=keytoid("login","l_key",$al_key);
	date_default_timezone_set("Asia/Kolkata");
	$currentdate=date('Y-m-d');




//select pensioner contact no.
	$pid=keytoid("pension","p_key",$p_key);
	// echo$pid;exit;
	$qrypcn="select Contactno from pension where id='".$pid."'";
	// echo$qrypcn;exit;
	$exepcn=mysql_query($qrypcn);
	$pcn=null;
		while($rr=mysql_fetch_array($exepcn))
		{
			$pcn=$rr['Contactno']; //pension contact no.
		}

		//transaction credition
	$paykey=uniquekey("payment","paykey");
	$qry="insert into payment(paykey,name,cardno,cvv,expirydate,currentdate,amount,loginid,payment,contactno)values('".$paykey."','".$name."','".$cardno."','".$cvv."','".$expirydate."','".$currentdate."','".$amount."','".$idlogin."','1','".$pcn."')";
	 $exe=mysql_query($qry);

	 //pensionapply updation
	 $paid=keytoid("pensionapply","pakey",$pakey);
	 $qry3="update pensionapply set pay='1' where id='".$paid."'";
	 $exe3=mysql_query($qry3);


//admin bank account updation
	$qry2="update bank set tamount='".$bt1."' where cardno='".$cardno."' and cvv='".$cvv."' ";
	$exe2=mysql_query($qry2);


//select totalamount of pensioner from table bank
	$qrytamount="select tamount from bank where contactno='".$pcn."'";
	$exetamount=mysql_query($qrytamount);
	$ptamount=null;
		while($rr=mysql_fetch_array($exetamount))
		{
			$ptamount=$rr['tamount']; //pension contact no.
		}



//pensioner total amount after credition
	$bt2=$ptamount+$amount;

//pensioner amount credition
	$qrypcredit="update bank set tamount='".$bt2."' where contactno='".$pcn."'";
	$exepcredit=mysql_query($qrypcredit);

// //payment status
// 	$qrypayst="update "

	//pensioner notification
	// $qrypcontno="";




//alert
		if($exe&&$exe1&&$exe3)
		{
			echo "<script>alert('Payment successful')</script>";
				header("location:admin_pension_approved_view.php");

		}
		else
			echo "<script>alert('Payment not successful')</script>";

	}
//end
}




//18-6-22
function admin_pension_amount($amount,$p_key,$pakey)//admin_pension_amount.php
{
	//echo $amount;exit;
	header("location:payment.php?amount=$amount&&p_key=$p_key&&pakey=$pakey");
    	
}

//23-6-22
function payment_salary($pl_key)
//paykey->key from payment table
//pl_key->key from login table
{
	$p_id=keytoid("login","l_key",$pl_key);
	// echo$p_id;exit;
	$qry="select Contactno from pension where loginid='".$p_id."'";
	//echo$qry;exit;
	$exe=mysql_query($qry);
		$cn=null;
	while($rr=mysql_fetch_array($exe))
	{
		$cn=$rr['Contactno'];
	}
	//echo$cn;exit;

	$qry1="select amount from payment where contactno='".$cn."'";
	$exe1=mysql_query($qry1);

	$am=null;
	while($rr=mysql_fetch_array($exe1))
	{
		$am=$rr['amount'];
	}
	return $am;

}



//9-7-22
function pension_notification($pl_key) //pension_notification.php
//pl_key->key from login table
{
$p_id=keytoid("login","l_key",$pl_key);

$qry="select * from pension inner join payment on pension.Contactno=payment.contactno inner join bank on bank.contactno=pension.Contactno where pension.loginid='".$p_id."'";
// echo $qry;exit;
$exe=mysql_query($qry);

$arr= array();
while($rr=mysql_fetch_array($exe))
{

	$arr[]=$rr;
}
return $arr;

}

//9-7-2
function pension_notification_count($pl_key)//pension_notification_count.php

{
	$id=keytoid("login","l_key",$pl_key);
	$qry="select count(pension.id) from payment inner join pension on pension.Contactno=payment.contactno where pension.loginid='".$id."'";
	// echo $qry;exit;
	$exe=mysql_query($qry);
		$arr=null;
	while($rr=mysql_fetch_array($exe))
	{
		$arr=$rr['count(pension.id)'];
	}
	return $arr;
}


//23-7-22
//bpam->ream
// function fetch_amount_payable($p_key){

// 	$id=keytoid("login","l_key",$p_key);
// 	// echo $id;exit;
// 	$qry="select pensionapply.ream from payment inner join pension on pension.Contactno=payment.contactno inner join pensionapply where pension.loginid='".$id."'";
//  echo $qry;exit;

// 	$exe=mysql_query($qry);
// 		$ream=null;
// 	while($rr=mysql_fetch_array($exe))
// 	{
// 		$ream=$rr['ream'];
// 	}
// 	echo $ream;exit;
// 	return $ream;

// }

//23-7-22
//bpam->ream
function pension_retirement_calculation($pl_key)//pension_retirement_calculation.php
{
	$pid=keytoid("login","l_key",$pl_key);
	$qry="select lbp,da,pf,qsvcpy,bpam from pensionapply where loginid='".$pid."'";
	// echo$qry;exit;
	$exe=mysql_query($qry);
		 $lbp=null;
    $da=null;
     $pf=null;
    $qsvcpy=null;
    $rp=null;
    $bpam=null;

    while($rr=mysql_fetch_array($exe))
    {
    	$lbp=$rr['lbp'];
    	$da=$rr['da'];
    	$pf=$rr['pf'];
    	$qsvcpy=$rr['qsvcpy'];
    	$bpam=$rr['bpam'];
    }

    $rp=0.05;
    $em=$lbp+$da;
    $gr=(($em*$qsvcpy)*0.5);
    $inpf=(($pf*$qsvcpy*$rp)*0.01);
	 $ream=$em+$gr+$pf+$inpf+$bpam;
	

		$qry1="update pensionapply set ream='".$ream."' where loginid='".$pid."'";
		$exe1=mysql_query($qry1);
	
}

function pension_stmr_chat($skey,$msg)//pension_stmr_chat
{

	$sid=keytoid("login","l_key",$skey);
	$ukey=uniquekey("chat","chkey");

	$qry1="select userreg.loginid from userreg inner join pension on userreg.Depo=pension.Depo where pension.loginid='".$sid."'";
	// echo$qry1;exit;
		$exe1=mysql_query($qry1);
		$rid=null;
	while($rr=mysql_fetch_array($exe1))
	{
		$rid=$rr['loginid'];
	}

	$currtime=date('h:i:sa');

	$currdate=date('Y-m-d');

	$qry="insert into chat(chkey,msg,senderid,receiverid,currdate,currtime)values('".$ukey."','".$msg."','".$sid."','".$rid."','".$currdate."','".$currtime."')";
	$exe=mysql_query($qry);
	header("location:pension_stmr_chat.php");

}


function pension_stmr_chat_fetch_sender($skey)//pension_stmr_chat.php
{
$sid=keytoid("login","l_key",$skey);
$qry1="select userreg.loginid from userreg inner join pension on userreg.Depo=pension.Depo where pension.loginid='".$sid."'";
$exe1=mysql_query($qry1);
		$rid=null;
	while($rr=mysql_fetch_array($exe1))
	{
		$rid=$rr['loginid'];
	}
	$qry="select msg from chat where chat.senderid='".$sid."' and receiverid='".$rid."'";
	// echo$qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}


function pension_stmr_chat_fetch_receiver($skey)//pension_stmr_chat.php
{
$sid=keytoid("login","l_key",$skey);

$qry1="select userreg.loginid from userreg inner join pension on userreg.Depo=pension.Depo where pension.loginid='".$sid."'";
$exe1=mysql_query($qry1);
		$rid=null;
	while($rr=mysql_fetch_array($exe1))
	{
		$rid=$rr['loginid'];
	}
	$qry="select msg from chat where chat.receiverid='".$sid."' and senderid='".$rid."'";
	// echo$qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}

//stmr pension chat 30-7-22
function stmr_pension_chat($skey,$msg,$pl_key)//stmr_pension_chat
{
	$sid=keytoid("login","l_key",$skey);
	$rid=keytoid("login","l_key",$pl_key);
	$ukey=uniquekey("chat","chkey");

	$currtime=date('h:i:sa');
	$currdate=date('Y-m-d');

	$qry="insert into chat(chkey,msg,senderid,receiverid,currdate,currtime)values('".$ukey."','".$msg."','".$sid."','".$rid."','".$currdate."','".$currtime."')";
	$exe=mysql_query($qry);
	header("location:stmr_pension_chat.php?pl_key=$pl_key");

}

function stmr_pension_chat_fetch_receiver($pl_key)//stmr_pension_chat.php
{
// $sid=keytoid("login","l_key",$skey);
$rid=keytoid("login","l_key",$pl_key);
$qry="select msg from chat where chat.receiverid='".$rid."'";
// echo$qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}


//31-7-22
function stmr_pension_chat_fetch_sender($skey,$pl_key)//stmr_pension_chat.php
{
 $pid=keytoid("login","l_key",$pl_key);
$sid=keytoid("login","l_key",$skey);
$qry="select msg from chat where chat.senderid='".$sid."' and receiverid='".$pid."'";
// echo$qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;
}



//31-7-22
function stmr_pension_chat_list($skey)//stmr_pension_chat_list.php
{

$srid=keytoid("login","l_key",$skey);
	$qry="select pension.Name,l_key from pension inner join userreg on pension.Depo=userreg.Depo inner join login on pension.loginid=login.id where userreg.loginid='".$srid."'";
	$exe=mysql_query($qry);
$arr=array();
	while($rr=mysql_fetch_array($exe))
	{
		$arr[]=$rr;
	}
	return $arr;

}


function stmr_home_user($key)
{
$sid=keytoid("login","l_key",$key);
$qry="select Name from userreg where loginid='".$sid."'";
// echo$qry;exit;
	$exe=mysql_query($qry);
	$arr=array();
	$name=null;
	while($rr=mysql_fetch_array($exe))
	{
		$name=$rr['Name'];
	}
	return $name;
}

function pension_home_user($pl_key)
{
$sid=keytoid("login","l_key",$pl_key);
$qry="select Name from pension where loginid='".$sid."'";
// echo$qry;exit;
	$exe=mysql_query($qry);
	$name=null;
	while($rr=mysql_fetch_array($exe))
	{
		$name=$rr['Name'];
	}
	return $name;
}

function count_stationmaster()
{
	$qry="select count(id) from userreg";
	$exe=mysql_query($qry);
	$count=null;
	while($rr=mysql_fetch_array($exe))
	{
		$count=$rr['count(id)'];
	}
	return $count;
}

function count_pensioner()
{
	$qry="select count(id) from pension";
	$exe=mysql_query($qry);
	$count=null;
	while($rr=mysql_fetch_array($exe))
	{
		$count=$rr['count(id)'];
	}
	return $count;
}
function count_message()
{
	// $id=keytoid("login","l_key",$key);
	$qry="select count(msg) from message";
	$exe=mysql_query($qry);
		$arr=null;
	while($rr=mysql_fetch_array($exe))
	{
		$arr=$rr['count(msg)'];
	}
	return $arr;
}


function pension_apply_check($key)
{
	$loginid=keytoid("login","l_key",$key);
		$pakey=uniquekey("pensionapply","pakey");
		$qry1="select loginid from pensionapply where loginid='".$loginid."'";
		// echo $qry1;exit();
		$exe1=mysql_query($qry1);
		$arr=null;
	while($rr=mysql_fetch_array($exe1))
	{
		$arr=$rr['loginid'];
	}
	

if($arr!=null)
	{
		echo"<script>alert('ALREADY APPLIED');window.location.href='pension_apply_view.php';</script>";
	}
}


}
?>