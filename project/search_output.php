<?php 
include 'uper_layout.php'; 
include 'controllers/user_search.php';
$rs=getAlldonor();
?>


<h1 align="center"><b><?php echo $_COOKIE["searcher"] ?> Blood Relatade Donor </b></h1>
<table align="center" border="2">
   
   <tr>
		<td>Serial </td>
		<td>Name</td>
		<td>Username</td>		
   </tr>	
		 
   <?php
	 $i=1;
	 foreach($rs as $c)
	 {
	  if($c["blood_group"]==strtoupper($_COOKIE["searcher"]))
	  {  
	    echo"<tr>";
	     echo"<td>".$i."</td>";
	     echo"<td>".$c["name"]."</td>";
	     echo"<td>".$c["username"]."</td>";
	   
	    echo"</tr>"; 
	    $i++;
	  }
	  
	 }
	?>
   
   
</table>


<br><br><br><br>  
<table class="center" border="2">  
   
    <tr>
	    <td align="middle"><a  href="dashboard.php"><h2>Dashboard</h2></td>
		<td align="middle"><a  href="logout.php"><h2>logOut</h2></td>
	</tr>
   
</table>

<?php include 'lower_layout.php'; ?>