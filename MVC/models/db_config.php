<?php

$db_server="localhost";
$db_uname="root";
$db_pass="";
$db_name="1st_database_create";




function execute($query)
{
	global $db_server , $db_uname , $db_pass, $db_name ;
	$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
	if($conn)
	{
		if(mysqli_query($conn,$query))
		{
			return true;
		}
		else
		{
			return mysqli_error($conn);
		}
		
	}
}
function get($query)
{
	global $db_server;
    global $db_uname;
    global $db_pass;
    global $db_name;
	$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
	$data=array();
	if($conn)
	{
		$res=mysqli_query($conn,$query);
		
		while($row = mysqli_fetch_assoc($res))
		{
		  $data[]=$row;
		}  
	}
	return $data;
}



?>