
<?php include 'controllers/user_controler.php'; ?>

<?php include 'uper_layout.php'; ?>

<br><br><br><br>
<h1 align="center"><b>  Sign Up </b> </h1>
<h3 align="center"><?php echo $db_err ?></h3>
<form action="" method="post">
	<table align="center" border="1" style="border:5px solid Violet;">
	
		<tr>
			<td><h4 class="text">Name</h4> </td>
			<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
			<td><span><?php echo $err_name;?></span></td>
		</tr>	
		
		<tr>
            <td><h4 class="text">Username</h4> </td>
			<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
			<td><span><?php echo $err_uname;?></span></td>
		</tr>	
		
		<tr>
			<td><h4 class="text">Email</h4></td>
			<td><input type="text" name="email" value="<?php echo $mail;?>" placeholder="Email"></td>
			<td><span><?php echo $err_mail;?></span></td>
		</tr>
		<tr>
			<td><h4 class="text">Password</h4></td>
			<td><input type="password" name="password" value="<?php echo $pass ?>" placeholder="Password"></td>
			<td><span><?php echo $err_pass;?></span></td>
		</tr>
		
        <tr>
			<td align="middle" colspan="2"><input type="submit" name="sign_up" value="Register"></td>
		</tr>
	</table>
</form>	
<?php include 'lower_layout.php'; ?>	