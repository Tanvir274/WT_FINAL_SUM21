<?php
	include 'controllers/user_controller.php';
	
	
	$digit = $_GET["digit"];
	$user = checkPhone($digit);
	if($user){
		echo "invalid";
	}
	else echo "valid";
	
	
?>