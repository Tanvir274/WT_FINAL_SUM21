<?php 

include 'controllers/blood.php'; 

include 'uper_layout.php';
$catagories=getAllblood();
 ?>

<br><br><br><br>
<h1 align="center"><b>  blood Available in Litter </b> </h1>


    <table class="center" border="2">
	
		<tr>
			<td>A+ </td>
			<td>O+</td>
			<td>B+</td>
			<td>AB+</td>
			<td>A- </td>
			<td>O-</td>
			<td>B-</td>
			<td>AB-</td>
		</tr>	
		
		
		
        
		<?php
		   
		 	foreach($catagories as $c)
			{			
			echo"<tr>";
		       echo"<td>".$c["a+"]."</td>";
			   echo"<td>".$c["o+"]."</td>";
			   echo"<td>".$c["b+"]."</td>";
			   echo"<td>".$c["ab+"]."</td>";
			   echo"<td>".$c["a-"]."</td>";
			   echo"<td>".$c["o-"]."</td>";
			   echo"<td>".$c["b-"]."</td>";
			   echo"<td>".$c["ab-"]."</td>";
			   
			echo"</tr>"; 
			}
			
		   
		?>
		
		
		<tr>
		   <td align="middle" colspan="4"><a  href="dashboard.php"><h2>Dashboard</h2></td>
		   <td align="middle" colspan="4"><a  href="logout.php"><h2>logOut</h2></td>
	    </tr>
	</table>
	
<?php include 'lower_layout.php'; ?>	