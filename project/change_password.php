<?php 
include 'controllers/user_update.php'; 
include 'uper_layout.php'; 
$id=$_GET["id"];  
?>



<h1 align="center"><b> Enter New Password </b> </h1>
<h3 align="center"><?php echo $db_err ?></h3>
<form action="" method="post">
<table class="center">

	<tr>
		<td><b>Password: </b></td>
		<td><input type="hidden" value="<?php echo $id ?>" name="id"></td>
		<td><input type="password"  name="password" value="<?php echo $pass; ?>" placeholder="Password"></td>
		<td><span><?php echo $err_pass;?></span></td>
	</tr>
	<tr>
		<td align="middle" colspan="2"><input type="submit" name="submit2" value="confirm"></td>
	</tr>
	<tr>
		<td align="middle" ><a  href="profile.php"><h2>Profile</h2></td>
		<td align="middle" ><a  href="logout.php"><h2>logOut</h2></td>
	</tr>
	
</table>
</form>
<?php include 'lower_layout.php'; ?>