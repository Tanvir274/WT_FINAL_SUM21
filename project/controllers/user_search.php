<?php
include 'models/db_config.php';
$name="";
$err_name="";
$rs="";
$hasError=false;
if(isset($_POST["search"]))
{
	// Name
	if(empty($_POST["name"]))
	{
		$err_name="Blood Name Required";
		$hasError = true;
	}
	else
	{
		$name=$_POST["name"];
	}
	
	if(!$hasError)
	{
	    setcookie("searcher",$_POST["name"],time()+300);
		If(authenticationBlood($name))
		{
		  
		  header("Location:search_output.php");
		}
		else
		{
			header("Location:search_nulloutput.php");
		}
		

		
	}
}	
function authenticationBlood($blood)
{
	$query="select * from donor where blood_group='$blood' ";
	
	$rs=get($query);
	echo $rs;
	
	if(count($rs)>0)
	{
		return true;
	}
	return false;
}


function getAlldonor()
{
	$query="select * from donor";
	$rs=get($query);
	return $rs;
}

 function search($key)
 {
	 $query="select name,blood_group from donor where blood_group like '%$key%'";
	 $rs=get($query);
	 return $rs;
 } 
?>