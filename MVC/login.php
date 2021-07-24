<?php 
include 'controllers/user_controler.php';
include 'uper_layout.php'; 
?>


<br><br><br><br>
	<h1 align="center"><b>  Log In </b> </h1>
	<h3 align="center"><?php echo $db_err ?></h3>
	<form action="" method="post">
	<table align="center" border="1" style="border:5px solid Violet;">
	
		
		<tr>
            <td><h4 class="text">Username</h4> 
			<input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
			<td><span><?php echo $err_uname;?></span></td>
		</tr>	
		
		
		<tr>
			<td><h4 class="text">Password</h4>
			<input type="password" name="password" value="<?php echo $pass ?>" placeholder="Password"></td>
			<td><span><?php echo $err_pass;?></span></td>
		</tr>
		
        <tr>
			<td align="middle"><input type="submit" name="login" value="Login"></td>
		</tr>
	</table>
	</form>
<?php include 'lower_layout.php'; ?>	