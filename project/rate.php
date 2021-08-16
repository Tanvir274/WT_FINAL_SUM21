<?php 

include 'controllers/donor.php'; 

include 'uper_layout.php';


 ?>
 <br><br><br>
<form action="" method="post">
<table class="center">

	
	<tr>
		<td><h3><b>Rate US:</b></h3></td> 
		
		<td>	
			<select name="rate">
				<option selected disabled><b>@@...Rating...@@</b></option>
				<?php
					foreach($rating as $i)
					{
						if($rate == $i)
							echo "<option selected>$i</option>";
						else
							echo "<option>$i</option>";
					}
				?>
			</select>
			
		</td>
		<td><span ><?php echo $err_rate;?></span></td>
	</tr>
    <tr>
		<td align="right"><input type="submit" name="select" value="submit"></td>
	</tr>	
	<tr>
		<td align="middle" ><a  href="dashboard.php"><h2>Dashboard</h2></td>
		<td align="middle" > <a  href="logout.php"><h2>logOut</h2></td>
	</tr>
</table>
</form>

<?php include 'lower_layout.php'; ?>	