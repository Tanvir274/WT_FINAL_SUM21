<?php
session_start(); 
include 'models/db_config.php';
$message="";
$err_message="";
$uname="";
$err_uname="";
$pass="";
$err_pass="";
$db_err="";
$rs="";
$hasError=false;
if(isset($_POST["submit"]))
{
	if(empty($_POST["message"]))
	{
		$err_message="Message Required";
		$hasError = true;
	}
	else
	{
		$message=$_POST["message"];
	}

	if(!$hasError)
	{
		
	 
	 $rs=message_donor($message,$_POST["id"]);
	 if($rs===true)
	 {
	 	header("Location:available_donor.php");
	 }
	 $err_message=$rs;
	 
	 
	}
	
	
	
}
else if(isset($_POST["request"]))
{
	$uname=$_SESSION["uname"];
	   
	$rs=request_donor($uname,$_POST["id"]);
	if($rs===true)
	{
	 header("Location:available_donor.php");
	}
	$err_message=$rs;
		 
	
}

else if(isset($_POST["log_out"]))
{
	session_destroy();
	header("Location:home_page.php");
}

function getAlldonor()
{
	$query="select * from donor";
	$rs=get($query);
	return $rs;
}
function message_donor($message,$id)
{
	$query ="update donor set message='$message' where id = $id";
	return execute($query);
}

function request_donor($uname,$id)
{
	$query ="update donor set request='$uname' where id = $id";
	return execute($query);
}

?>