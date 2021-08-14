<?php 

include 'controllers/user_controller.php'; 

include 'uper_layout.php';
$users=getAlluser();
 ?>

<br><br><br><br>
<h1 align="center"><b>  Your Profile Information </b> </h1>


    <table class="center" border="2">
	    <tr>
			<td>Name</td>
			<td>Username</td>
			<td>Password</td>
			<td>Email</span></td>
			<td>Phone Number</span></td>
			<td>Address</td>
			<td>Blood_Group</td>
		</tr>	
		
		
		
        
		<?php
		   
		   foreach($users as $c)
		   {
			 if($c["username"]==$_SESSION["uname"])
			 {
			   echo"<tr>";
			   echo"<td>".$c["name"]."</td>";
			   echo"<td>".$c["username"]."</td>";
			   echo"<td>".$c["password"]."</td>";
			   echo"<td>".$c["email"]."</td>";
			   echo"<td>".$c["phone_number"]."</td>";
			   echo"<td>".$c["address"]."</td>";
			   echo"<td>".$c["blood_group"]."</td>"."<br>";
			   
			   echo'<td><a href="change_name.php?id='.$c["id"].'">change name</a></td>';
			   echo'<td><a href="change_password.php?id='.$c["id"].'">Change Password</a></td>';
			   echo'<td><a href="change_pnumber.php?id='.$c["id"].'">change phone Number</a></td>';
			   echo'<td><a href="change_address.php?id='.$c["id"].'">change address</a></td>';
			   
			   
			  echo"</tr>"; 
			 }
			}
		   
		   
		?>
		<tr>
		   <td align="middle" colspan="5"><a  href="dashboard.php"><h2>Dashboard</h2></td>
		   <td align="middle" colspan="6"><a  href="logout.php"><h2>logOut</h2></td>
	    </tr>	
	</table>
	
<?php include 'lower_layout.php'; ?>