<?php
include 'models/db_config.php';

$name="";
$err_name="";

$pass="";
$err_pass="";

$digit="";
$err_digit="";

$add="";
$err_add="";

$db_err="";

$hasError=false;

if(isset($_POST["submit1"]))
{
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
	
	if(!$hasError)
	{
		
		$rs= updateName($_POST["name"],$_POST["id"]);
		if($rs===true)
		{
			header("Location:profile.php");
		}
		$db_err=$rs;
	}
}
else if(isset($_POST["submit2"]))
{
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
		$rs=updatePassword($_POST["password"],$_POST["id"]);
		if($rs===true)
		{
			header("Location:profile.php");
		}
		$db_err=$rs;
	}
}
else if(isset($_POST["submit3"]))
{
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
	
	if(!$hasError)
	{
		echo $_POST["digit"];
		$rs=updatePhone($_POST["digit"],$_POST["id"]);
		if($rs===true)
		{
			header("Location:profile.php");
		}
		$db_err=$rs;
	}
}
else if(isset($_POST["submit4"]))
{
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
	
	if(!$hasError)
	{
		$rs=updateAddress($_POST["address"],$_POST["id"]);
		if($rs===true)
		{
			header("Location:profile.php");
		}
		$db_err=$rs;
	}
}
function updateName($name,$id)
{
	$query ="update user set name='$name' where id = $id";
	return execute($query);
}
function updatePassword($pass,$id)
{
	$query ="update user set password='$pass' where id = $id";
	return execute($query);
}
function updatePhone($digit,$id)
{
	$query ="update user set phone_number='$digit' where id = $id";
	return execute($query);
}
function updateAddress($add,$id)
{
	$query ="update user set address='$add' where id = $id";
	return execute($query);
}

?>