<?php 
include 'models/db_config.php';


function getAllblood()
{
	$query="select * from blood";
	$rs=get($query);
	return $rs;
}

?>