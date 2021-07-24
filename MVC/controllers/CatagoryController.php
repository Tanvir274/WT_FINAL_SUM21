<?php 
include 'models/db_config.php';

$name="";
$err_name="";
$db_err="";
$hasError=false;

if(isset($_POST ["Add_catagory"]))
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
			$rs=insertCatagory($name);
			if($rs===true)
			{
				header("Location:All_catagory.php");
			}
			$db_err=$rs;
		}
	
}
else if(isset($_POST["Edit_catagory"]))
{
	$rs=updateCatagory($_POST["name"],$_POST["id"]);
			if($rs===true)
			{
				header("Location:All_catagory.php");
			}
			$db_err=$rs;
}

function insertCatagory($name)
{
	$query="insert into catagory values (NULL,'$name')";
	return execute($query);
	
}
function getAllcatagory()
{
	$query="select * from catagory";
	$rs=get($query);
	return $rs;
}
function getCatagory($id)
{
	$query="select * from catagory where id=$id";
	$rs=get($query);
	return $rs[0];
}
function updateCatagory($name,$id)
{
	$query ="update catagory set name='$name' where id = $id";
	return execute($query);
}
?>