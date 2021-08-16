<?php 
include 'controllers/user_update.php'; 
include 'uper_layout.php';
$id=$_GET["id"];  
?>


<script src="JS/cn.js"></script>
<h1 align="center"><b> Enter New Name </b> </h1>
<h3 align="center"><?php echo $db_err ?></h3>
<form action="" onsubmit="return validate()" method="post">
<table class="center">

	<tr>
		<td><b>Name: </b></td>
		<td><input type="text" id="name"  name="name" value="<?php echo $name;?>" placeholder="Name"></td>
		<td><input type="hidden" value="<?php echo $id ?>" name="id"></td>
		<td><span id="err_name" ><?php echo $err_name;?></span></td>
			
	</tr>
	<tr>
		<td align="middle" colspan="2"><input type="submit" name="submit1" value="confirm"></td>
	</tr>
	<tr>
		<td align="middle" ><a  href="profile.php"><h2>Profile</h2></td>
	</tr>
	<tr>
		<td align="middle" ><a  href="logout.php"><h2>logOut</h2></td>
	</tr>
	
</table>

</form>
<?php include 'lower_layout.php'; ?>	