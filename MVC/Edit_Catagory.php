<?php 
include 'controllers/CatagoryController.php'; 
include 'uper_layout.php';
$id=$_GET["id"];
$c=getCatagory($id);
 ?>

<br><br><br><br>
<h1 align="center"><b>  Edit Catagory </b> </h1>

<form action="" method="post">
	<table align="center" border="1" style="border:5px solid Violet;">
	
		<tr>
		    
			<td><h4 class="text">Name</h4> </td>
			<td><input type="hidden" value="<?phpecho $id ?>" name="id"></td>
			<td><input type="text" name="name" value=<?php echo $c["name"];?> ></td>
			
		</tr>	
		
		
		
        <tr>
			<td align="middle" colspan="3"><input type="submit" name="Edit_catagory"  value="Edit Confirm" ></td>
		</tr>
	</table>
</form>	
<?php include 'lower_layout.php'; ?>	