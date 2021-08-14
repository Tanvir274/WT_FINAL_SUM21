<?php 
include 'controllers/user_controller.php'; 
include 'uper_layout.php'; 
?>



<h1 align="center"><b>  Reset Forgate Password </b> </h1>
<h3 align="center"><?php echo $db_err ?></h3>
<h3 align="center"><?php echo $err_reset ?></h3>
<form action="" method="post">
<table class="center">

	
	<tr>
        <td><h4 class="text">Username</h4> </td>
		<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
		<td><span><?php echo $err_uname;?></span></td>
	</tr>
	
	
	<tr>
		<td><h4 class="text">Password</h4></td>
		<td><input type="password" name="password" value="<?php echo $pass ?>" placeholder="Enter New Password"></td>
		<td><span><?php echo $err_pass;?></span></td>
	</tr>
	
    <tr>
		<td align="middle" colspan="2"><input type="submit" name="reset" value="submit"></td>
	</tr>
	<tr>
	    <td align="middle" colspan="2"><a  href="login.php"><h2>Login</h2></td>
	</tr>
</table>
</form>
<?php include 'lower_layout.php'; ?>