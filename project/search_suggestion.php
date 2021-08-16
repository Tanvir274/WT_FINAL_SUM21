<?php
   include 'controllers/user_search.php';
   $key=$_GET["key"];
   $available=search($key);
   if(count($available)>0)
   {
	 foreach($available as $a)
	 {
		 echo "<p>".$a["blood_group"]."</p>";
	 }
   }	
?>