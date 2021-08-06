<?php
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
	$db_err="";
	
	
	
	
	
	
	$hasError=false;
	
	
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
		
		
		
		//Email
		if(empty($_POST["email"])) 
		{
			$err_mail="Email Required";
			$hasError = true;
		}
		
		else
		{
			$mail=$_POST["email"];
		}
		
		
		
		if(!$hasError)
		{
			$rs=insert_user($name,$uname,$mail,$pass);
			if($rs===true)
			{
				header("Location:Signup.php");
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
		   if(authenticationUser($uname,$pass))
		   {
			 header("Location: Home page.php");
		   }
		   $db_err= "Username_Password_Invalid" ;
		}
		
	}
	
	function insert_user($name,$uname,$mail,$pass)
	{
		$query= "insert into user values(NULL,'$name','$uname','$mail','$pass')";
		
		return execute($query);
			
	}
	function authenticationUser($uname,$pass)
	{
		$query="select * from user where username='$uname' and password='$pass' ";
		
		$rs=get($query);
		
		if(count($rs)>0)
		{
			return true;
		}
		return false;
	}
?>