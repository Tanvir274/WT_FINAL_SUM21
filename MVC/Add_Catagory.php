<?php 

include 'controllers/CatagoryController.php'; 

include 'uper_layout.php';
 ?>

<br><br><br><br>
<h1 align="center"><b>  ADD CATAGORY </b> </h1>
<h3 align="center"><?php echo $db_err ?></h3>
<form action="" method="post">
	<table align="center" border="1" style="border:5px solid Violet;">
	
		<tr>
			<td><h4 class="text">Name</h4> </td>
			<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
			<td><span><?php echo $err_name;?></span></td>
		</tr>	
		
		
		
        <tr>
			<td align="middle" colspan="2"><input type="submit" name="Add_catagory" value="Confirm"></td>
		</tr>
	</table>
</form>	
<?php include 'lower_layout.php'; ?>	