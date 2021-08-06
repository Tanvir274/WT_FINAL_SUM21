<?php
include 'db_config.php';

/*$query="insert into user values(NULL,'karim','karim01','karim@gmail.com','123456')" ;
mysqli_query($conn,$query);*/

$query="select name,username,mail,password from user";

$result=mysqli_query($conn,$query);
echo"<table border='2'>";
     echo"<tr>";
	      echo"<td>"."Name"."</td>";
		  echo"<td>"."User_Name"."</td>";
	 echo"</tr>";	  
 while($row=mysqli_fetch_assoc($result))
 {
	/*echo "<pre>";
	print_r($row);
	echo "<pre>";*/
	
	//echo "Name: ".$row["name"]."<br>"."User_Name :".$row["username"]."<br>";
	echo"<tr>";
	      echo"<td>".$row["name"]."</td>";
		  echo"<td>".$row["username"]."</td>";
	 echo"</tr>";
	
 }
echo"</table>";  

?>