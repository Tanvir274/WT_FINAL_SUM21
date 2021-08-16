<?php
session_start();
include 'models/db_config.php';

$name="";
$err_name="";
$uname="";
$err_uname="";
$pass="";
$err_pass="";
$cpass="";
$cerr_pass="";
$mail="";
$err_mail="";
$digit="";
$err_digit="";
$add="";
$err_add="";
$day="";
$err_day="";
$month="";
$err_month="";
$year="";
$err_year="";
$group="";
$err_group="";
$gender="";
$err_gender="";

$db_err="";
$err_reset="";

$profile_id="";





$hasError=false;


$days =array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
$months=array(1,2,3,4,5,6,7,8,9,10,11,12);
$years=array(1990,1991,1992,1993,1994,1995,1996,1997,1998,1999,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011);
$groups=array("A+","O+","B+","AB+","A-","O-","B-","AB-");


if(isset($_POST["sign_up"]))
{
	// Name
	if(empty($_POST["name"]))
	{
		$err_name="Name Required";
		$hasError = true;
	}
	else if(strlen($_POST["name"]) <=2)
	{
		$err_name="Name Must be greater than 2";
		$hasError = true;
	}
	else
	{
		$name=$_POST["name"];
	}
	
	
	
	// username
	if(empty($_POST["username"])) 
	{
		$err_uname="Username Required";
		$hasError = true;
	}
	else if(strlen($_POST["username"]) <=3)
	{
		$err_uname="Username must contain at least 6 characters";
		$hasError = true;
	}
	else if(strlen($_POST["username"])>=4)
	{
		$l=strlen($_POST["username"]);
		$str=$_POST["username"];
		
		for($i=0;$i<$l;$i++)
		{
			if($str[$i]==' ')
			{
				$err_uname="Username space is not allowed";
		        $hasError = true;
			}
		}
	}
	else
	{
		$uname=$_POST["username"];
	}
	
	
	
	
	
	
	//password
	if(empty($_POST["password"])) 
	{
		$err_pass="Password Required";
		$hasError = true;
	}
	else if(strlen($_POST["password"]) <=4)
	{
		$err_pass="password must contain at least 5 characters";
		$hasError = true;
	}
	else if(strlen($_POST["password"])>=5)
	{
		
		$c=0;
		$d=0;
		$e=0;
		$f=0;
		$l=strlen($_POST["password"]);
		$str=$_POST["password"];
		for($i=0;$i<$l;$i++)
		{
			if($str[$i]==' ')
			{
				$err_pass="Password space is not allowed";
		        $hasError = true;
				$i=$l;
				
			}
			if($str[$i]>='A' && $str[$i]<='Z' )
			{
				$c=1;
			}
			if($str[$i]>='a' && $str[$i]<='z' )
			{
				$d=1;
			}
			if($str[$i]=='?' || $str[$i]=='#' )
			{
				$e=1;
			}
			if($str[$i]>='0' && $str[$i]<='9' )
			{
				$f=1;
			}
			
		}
	}
	else if($c==0 || $d==0 ||$e==0 ||$f==0)
	{
		$err_pass="Password  is not Right";
		$hasError = true;
	}
	else
	{
		$pass=$_POST["password"];
	}
	
	
	//confirm password
	if(empty($_POST["confirm_password"])) 
	{
		$cerr_pass="Confirmation Password";
		$hasError = true;
	}
	else if($_POST["confirm_password"]!= $_POST["password"])
	{
		$cerr_pass="Confirmation with same password";
		$hasError = true;
	}
	else
	{
		$cpass=$_POST["confirm_password"];
	}
	
	//Email
	if(empty($_POST["email"])) 
	{
		$err_mail="Email Required";
		$hasError = true;
	}
	else if(strlen($_POST["email"]) <=9)
	{
		$err_mail="Email must contain at least 8 characters";
		$hasError = true;
	}
	else if(strlen($_POST["email"])>=9)
	{
		
		$l=strlen($_POST["email"]);
		$str=$_POST["email"];
		for($i=0;$i<$l;$i++)
		{
			if($str[$i]=='@')
			{
				if($str[$i+6]!='.')
				{
				   $err_mail="Insert right Mail Address";
		           $hasError = true;
				   $i=$l;
				}
				
			}
			
			
		}
	}
	
	else
	{
		$mail=$_POST["email"];
	}
	
	//Phone Number
	if(empty($_POST["digit"])) 
	{
		$err_digit="Phone Number Required";
		$hasError = true;
	}
	else if(!empty($_POST["digit"]))
	{
		$l=strlen($_POST["digit"]);
		$str=$_POST["digit"];
		
		for($i=0;$i<$l;$i++)
		{
			if($str[$i]<='0' && $str[$i]>='9')
			{
				$err_digit="Phone number only accept numeric value";
				$hasError=true;
			}
		}
	}
	else
	{
		$digit=$_POST["digit"];
	}
	
	// Street Address
	if(empty($_POST["address"]))
	{
		$err_add="Street Address Required";
		$hasError = true;
	}
	else if(strlen($_POST["address"]) <=2)
	{
		$err_add="Street Address Must be greater than 2";
		$hasError = true;
	}
	else
	{
		$add=$_POST["address"];
	}
	
	//Day
	
	if(!isset($_POST["day"]))
	{
		$err_day = "Day Required";
		$hasError = true;
	}
	else
	{
		$day = $_POST["day"];
	}
	
	//Month
	if(!isset($_POST["month"]))
	{
		$err_month = "Month Required";
		$hasError = true;
	}
	else
	{
		$month = $_POST["month"];
	}
	
	//Year
	if(!isset($_POST["year"]))
	{
		$err_year = "Year Required";
		$hasError = true;
	}
	else
	{
		$year = $_POST["year"];
	}
	
	//Blood Group
	if(!isset($_POST["group"]))
	{
		$err_group = "Blood group Required";
		$hasError = true;
	}
	else
	{
		$group = $_POST["group"];
	}
	
	//Gender
	
	if(!isset($_POST["gender"]))
	{
		$err_gender="Gender Required";
		$hasError = true;
	}
	else
	{
		$gender = $_POST["gender"];
	}
	
	
	
	
	if(!$hasError)
	{
		echo $_POST["username"].$_POST["password"].$_POST["email"].$_POST["digit"];
		$rs=insert_user($name,$_POST["username"],$_POST["password"],$_POST["email"],$_POST["digit"],$add,$day,$month,$year,$group,$gender);
		if($rs===true)
		{
			header("Location:login.php");
		}
		$db_err= $rs;
			
	}
	
	
}
else if(isset($_POST["login"]))
{
	// username
	if(empty($_POST["username"])) 
	{
		$err_uname="Username Required";
		$hasError = true;
	}
	
	else
	{
		$uname=$_POST["username"];
	}
	
	//password
	if(empty($_POST["password"])) 
	{
		$err_pass="Password Required";
		$hasError = true;
	}
	
	else
	{
		$pass=$_POST["password"];
	}
	
	if(!$hasError)
	{
		$_SESSION["uname"] = $_POST["username"];
		$_SESSION["pass"] =  $_POST["password"];
		
	   if(authenticationUser($_POST["username"],$_POST["password"]))
	   {
		 header("Location:dashboard.php");
	   }
	   else
	   {
		   header("Location:user_invalid.php");
	   }
	   //$db_err= "Username_Password_Invalid" ;
	}
	
}
else if(isset($_POST["reset"])) // Reset password
{
	// username
	if(empty($_POST["username"])) 
	{
		$err_uname="Username Required";
		$hasError = true;
	}
	
	else
	{
		$uname=$_POST["username"];
	}
	//mail
/*	if(empty($_POST["email"])) 
	{
		$err_mail="Email Required";
		$hasError = true;
	}
	else
	{
		$mail=$_POST["email"];
	} 
	*/
	//password
	if(empty($_POST["password"])) 
	{
		$err_pass="Password Required";
		$hasError = true;
	}
	else if(strlen($_POST["password"]) <=4)
	{
		$err_pass="password must contain at least 5 characters";
		$hasError = true;
	}
	else if(strlen($_POST["password"])>=5)
	{
		
		$c=0;
		$d=0;
		$e=0;
		$f=0;
		$l=strlen($_POST["password"]);
		$str=$_POST["password"];
		for($i=0;$i<$l;$i++)
		{
			if($str[$i]==' ')
			{
				$err_pass="Password space is not allowed";
		        $hasError = true;
				$i=$l;
				
			}
			if($str[$i]>='A' && $str[$i]<='Z' )
			{
				$c=1;
			}
			if($str[$i]>='a' && $str[$i]<='z' )
			{
				$d=1;
			}
			if($str[$i]=='?' || $str[$i]=='#' )
			{
				$e=1;
			}
			if($str[$i]>='0' && $str[$i]<='9' )
			{
				$f=1;
			}
			
		}
	}
	else if($c==0 || $d==0 ||$e==0 ||$f==0)
	{
		$err_pass="Password  is not Right";
		$hasError = true;
	}
	
	else
	{
		$pass=$_POST["password"];
	}
	
	if(!$hasError)
	{
       $users=getAlluser();	
	   foreach($users as $c)
	   {
		   if($c["username"]==$uname)
		   {
			   $profile_id=$c["id"];
		   }
	   }
	   
	   if(authenticationReset($uname))
	   { 
		 $rs=request_reset($profile_id,$_POST["password"]);
	       if($rs===true)
	       {
	 	    header("Location:login.php");
	       }
	      $err_reset=$rs;
		  	  
	   }
	   else
	   {
	    $db_err= "Username Invalid" ;
	   }
	   
	   
	}
	
}


function insert_user($name,$uname,$pass,$mail,$digit,$add,$day,$month,$year,$group,$gender)
{
	$query= "insert into user values(NULL,'$name','$uname','$pass','$mail','$digit','$add','$day','$month','$year','$group','$gender')";
	return execute($query);
} 

function authenticationUser($uname,$pass)
{
	$query="select * from user where username='$uname' and password='$pass' ";
	
	$rs=get($query);
	echo $rs;
	
	if(count($rs)>0)
	{
		return true;
	}
	return false;
}
function getAlluser()
{
	$query="select * from user";
	$rs=get($query);
	return $rs;
}


function authenticationReset($uname)
{
	$query="select * from user where username='$uname' ";
	
	$rs=get($query);
	
	if(count($rs)>0)
	{
		return true;
	}
	return false;
}
function request_reset($id,$pass)
{
	$query ="update user set password='$pass' where id= $id";
	return execute($query);
}
function checkUsername($uname)
{
		$query = "select name from user where username='$uname'";
		$rs = get($query);
		if(count($rs) > 0)
		{
			return true;
		}
		else return false;
}

function checkMail($mail)
{
		$query = "select name from user where email='$mail'";
		$rs = get($query);
		if(count($rs) > 0)
		{
			return true;
		}
		else return false;
}
function checkPhone($digit)
{
		$query = "select name from user where phone_number='$digit'";
		$rs = get($query);
		if(count($rs) > 0)
		{
			return true;
		}
		else return false;
}


?>