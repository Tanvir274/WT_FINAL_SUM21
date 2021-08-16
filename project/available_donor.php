<?php 

include 'controllers/donor.php'; 

include 'uper_layout.php';
$catagories=getAlldonor();
 ?>

<br><br><br><br>
<h1 align="center"><b>  Blood Donor list </b> </h1>


    <table class="center" border="2">
	    <tr>
			<td>Serial </td>
			<td>Name</td>
			<td>Username</td>
			<td>Blood Group</td>
			<td>Message donor</span></td>
			<td>Request Donor</span></td>
			
		</tr>	
		
		
		
        
		<?php
		   $i=1;
		   foreach($catagories as $c)
		   {
			echo"<tr>";
		       echo"<td>".$i."</td>";
			   echo"<td>".$c["name"]."</td>";
			   echo"<td>".$c["username"]."</td>";
			   echo"<td>".$c["blood_group"]."</td>";
			   echo'<td><a href="message_donor.php?id='.$c["id"].'">Message</a></td>';
			   echo'<td><a href="request_donor.php?id='.$c["id"].'">Request</a></td>';
			   
			echo"</tr>"; 
			$i++;
		   }
		?>   
	    <tr>
		   <td align="middle" colspan="3"><a  href="dashboard.php"><h2>Dashboard</h2></td>
		   <td align="middle" colspan="3"><a  href="logout.php"><h2>logOut</h2></td>
	    </tr>
		   
		
		
			
		   
		
		
	</table>
	
<?php include 'lower_layout.php'; ?>	