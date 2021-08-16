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
$rate="";
$err_rate="";
$rs="";
$hasError=false;

$rating=array("*","**","***","****","*****");
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
	
	 
	 $rs=insert_message($_POST["id"],$_SESSION["uname"],$message);
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
	
	
	$rs=insert_request($_POST["id"],$uname);
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
else if (isset($_POST["select"]))
{
	if(!isset($_POST["rate"]))
	{
		$err_rate = "Select rating";
		$hasError = true;
	}
	else
	{
		$rate = $_POST["rate"];
	}
	
	if(!$hasError)
	{
	
	 
	 $rs=insert_rating($_SESSION["uname"],$rate);
	 if($rs===true)
	 {
	 	header("Location:dashboard.php");
	 }
	 $err_rate=$rs;
	 
	 
	 
	}
	
	
}

function getAlldonor()
{
	$query="select * from donor";
	$rs=get($query);
	return $rs;
}


function insert_message($donorId,$uname,$message)
{
	$query= "insert into donor_message values(NULL,'$donorId','$uname','$message')";
	return execute($query);
} 

function insert_request($donorId,$uname)
{
	$query= "insert into donor_request values(NULL,'$donorId','$uname')";
	return execute($query);
}
function insert_rating($uname,$rate)
{
	$query= "insert into user_rate_blood_bank values(NULL,'$uname','$rate')";
	return execute($query);
}

?>