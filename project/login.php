<?php 
include 'controllers/user_controller.php'; 
include 'uper_layout.php';  
?>



<h1 align="center"><b>  Log In </b> </h1>
<h3 align="center"><?php echo $db_err ?></h3>
<form action="" method="post">
<table class="center">

	
	<tr>
        <td><h4 class="text">Username</h4> </td>
		<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
		<td><span><?php echo $err_uname;?></span></td>
	</tr>	
	
	
	<tr>
		<td><h4 class="text">Password</h4></td>
		<td><input type="password" name="password" value="<?php echo $pass ?>" placeholder="Password"></td>
		<td><span><?php echo $err_pass;?></span></td>
	</tr>
	
    <tr>
		<td align="middle" colspan="3"><input type="submit" name="login" value="Login"></td>
	</tr>
	<tr>
	    <td></td>
	</tr>
	<tr>
	    <td>If you forgate password then recover it</td>
		<td align="middle"><a  href="reset_password.php"><h2>Recover</h2></td>
	</tr>
	<tr>
	    <td align="middle" colspan="3"><a  href="home_page.php"><h2>Home Page</h2></td>
	</tr>
</table>
</form>
<?php include 'lower_layout.php'; ?>	