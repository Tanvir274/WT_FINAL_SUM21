<?php 

include 'controllers/donor.php'; 

include 'uper_layout.php';
$id=$_GET["id"];

 ?>
<form action="" method="post">
<table class="center">

	
	<tr>
		<td><input type="text" name="message" value="<?php echo $message ?>" placeholder="Write message"></td>
		<td><input type="hidden" value="<?php echo $id ?>" name="id"></td>
		<td><span><?php echo $err_message;?></span></td>
	</tr>	
	
    <tr>
		<td align="middle"><input type="submit" name="submit" value="submit"></td>
	</tr>
	<tr>
		<td align="middle" ><a  href="available_donor.php"><h2>Available Donor</h2></td>
		<td align="middle" ><a  href="logout.php"><h2>logOut</h2></td>
	</tr>
</table>
</form>

<?php include 'lower_layout.php'; ?>	