<?php
	include 'controllers/user_controller.php';
	
	
	$mail = $_GET["mail"];
	$user = checkMail($mail);
	if($user){
		echo "invalid";
	}
	else echo "valid";
	
	
?>