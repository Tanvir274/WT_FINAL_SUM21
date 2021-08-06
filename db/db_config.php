<?php

$db_server="localhost";
$db_uname="root";
$db_pass="";
$db_name="1st_database_create";

$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);

if($conn)
{
	echo"Data-Base connected"."<br>"; 
	/*$query="insert into user values(NULL,'Rahim','Rahim01','Rahim@gmail.com','12345678')" ;
    if(!mysqli_query($conn,$query))
	{
		echo mysqli_error($conn);
	}
	else
	{
	  echo"Success"	
	}*/
}
else
{
   echo"Not connected";
} 
?>