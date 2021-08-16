<?php 

include 'controllers/donor.php'; 

include 'uper_layout.php';


 ?>
 <br><br><br>
<form action="" method="post">
<table class="center">

	<tr>
	    <td>Write your Valuable Feedback</td>
		<td><input type="text" name="message" value="<?php echo $message ?>" placeholder="Write message"></td>
		<td><span><?php echo $err_message;?></span></td>
	</tr>	
	
    <tr>
		<td align="middle" colspan="2"><input type="submit" name="feedback" value="submit"></td>
	</tr>
	<tr>
		<td align="middle" ><a  href="dashboard.php"><h2>Dashboard</h2></td>
		<td align="middle" > <a  href="logout.php"><h2>logOut</h2></td>
	</tr>
</table>
</form>

<?php include 'lower_layout.php'; ?>