<?php 

include 'controllers/donor.php'; 

include 'uper_layout.php';
$id=$_GET["id"];

?>
<h3 align="center"><?php echo $err_message;?></h3>
<h3 align="center"><?php echo $db_err ?></h3>
<form action="" method="post">
<table class="center">
    	
	
	
	<tr>
		<td><b>If you want to confirm Request press Request Button</b></td>
	</tr>
		
    <tr>
	    <td><input type="hidden" value="<?php echo $id ?>" name="id"></td>
		
	</tr>
	<tr>
	    <td align="middle"><input type="submit" name="request" value="Request"></td>
	</tr>
	<tr>
		<td align="middle" ><a  href="available_donor.php"><h2>Available Donor</h2></td>
		<td align="middle" ><a  href="logout.php"><h2>logOut</h2></td>
	</tr>
</table>
</form>

<?php include 'lower_layout.php'; ?>	