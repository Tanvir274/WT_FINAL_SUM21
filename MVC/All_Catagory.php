<?php 

include 'controllers/CatagoryController.php'; 

include 'uper_layout.php';
$catagories=getAllcatagory();
 ?>

<br><br><br><br>
<h1 align="center"><b>  All Catagory </b> </h1>


    <table align="center" border="1" style="border:5px solid Violet;">
	
		<tr>
			<td>Serial </td>
			<td>Catagory</td>
			<td>Total</span></td>
		</tr>	
		
		
		
        
		<?php
		   $i=1;
		   foreach($catagories as $c)
		   {
			echo"<tr>";
		       echo"<td>$i</td>";
			   echo"<td>".$c["name"]."</td>";
			   echo'<td><a href="Edit_Catagory.php?id='.$c["id"].'">Edit</a></td>';
			   echo'<td><a href="delete.php">Delete</a></td>';
			echo"</tr>"; 
			$i++;
		   }
		   
		?>
		
	</table>
	
<?php include 'lower_layout.php'; ?>	