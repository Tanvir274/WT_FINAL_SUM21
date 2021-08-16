<?php
include 'controllers/user_controller.php'; 
include 'uper_layout.php'; 
?>


<script src="JS/sign.js"></script>
<script src="JS/regis.js"></script>


<h1 align="center"><b> WELCOME </b> </h1>
<h3 align="center"><?php echo $db_err ?></h3>

<form action="" onsubmit="return validation()" method="post">

	<table class="center" >
	
		<tr>
			<td><b>Name: </b></td>
			<td><input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
			<td><span id="err_name"><?php echo $err_name;?></span></td>
			
		</tr>
		<tr>
			<td><b>Username:</b> </td>
			<td><input type="text" onfocusout="checkUser(this)" id="username" name="username" value="<?php echo $uname; ?>" placeholder="Username"></td>
			<td><span id="err_uname"><?php echo $err_uname;?></span></td>
		</tr>
		<tr>
			<td><b>Password: </b></td>
			<td><input type="password" id="pass" name="password" value="<?php echo $pass; ?>" placeholder="Password"></td>
			<td><span id="err_pass"><?php echo $err_pass;?></span></td>
		</tr>
		<tr>
			<td><b>Confirm Password: </b></td>
			<td><input type="password" id="confirm_password" name="confirm_password" value="<?php echo $cpass ?>" placeholder="Confirm Password"></td>
			<td><span id="cerr_pass"><?php echo $cerr_pass;?></span></td>
		</tr>
		<tr>
		     <td><b>Email:</b></td>
			 <td><input type="text" onfocusout="checkMail(this)" id="email" name="email" value="<?php echo $mail;?>" placeholder="Email"></td>
			 <td><span id="err_mail"><?php echo $err_mail;?></span></td>
		</tr>
		<tr>
			<td><b>Phone Number:</b> </td>
			<td><input type="text" onfocusout="checkPhone(this)" id="digit" name="digit" value="<?php echo $digit;?>" placeholder="Phone Number"></td>
			<td><span id="err_digit"><?php echo $err_digit;?></span></td>
			
		</tr>
		<tr>
			<td><b>Address: </b></td>
			<td><input type="text" id="address" name="address" value="<?php echo $add;?>" placeholder="Street Address"></td>
			
			<td><span id="err_add"><?php echo $err_add;?></span></td>
			
		</tr>
		<tr>
			<td><b>Birth Date: </b> </td>
			<td>
				<select id="day" name="day">
					<option selected disabled>Day</option>
					<?php
						foreach($days as $i)
						{
							if($day == $i)
								echo "<option selected>$i</option>";
							else
								echo "<option>$i</option>";
						}
					?>
				</select> 
				<select id="month" name="month">
					<option selected disabled>Month</option>
					<?php
						foreach($months as $i)
						{
							if($month == $i)
								echo "<option selected>$i</option>";
							else
								echo "<option>$i</option>";
						}
					?>
				</select>
				<select id="year" name="year">
					<option selected disabled>Year</option>
					<?php
						foreach($years as $i)
						{
							if($year == $i)
								echo "<option selected>$i</option>";
							else
								echo "<option>$i</option>";
						}
					?>
				</select>
			</td>
			<td>
			<span id="err_day"><?php echo $err_day;?></span><br>
			<span id="err_month"><?php echo $err_month;?></span><br>
			<span id="err_year"><?php echo $err_year;?></span>
			</td>
		</tr>
		<tr>
			<td><b>Blood Group: </b> </td>
			<td>
				<select id="group" name="group">
					<option selected disabled>Blood Group</option>
					<?php
						foreach($groups as $i)
						{
							if($group == $i)
								echo "<option selected>$i</option>";
							else
								echo "<option>$i</option>";
						}
					?>
				</select>
			</td>
			<td><span id="err_group"><?php echo $err_group;?></span></td>
		</tr>	

		<tr>
			<td><b>Gender: <b></td>
			<td><input type="radio" id="male" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input id="female" <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
			<td><span id="err_gender"><?php echo $err_gender;?></span></td>
		</tr>
		
		
		
		
		<tr>
			<td align="middle" colspan="2"><input type="submit" name="sign_up" value="Register"></td>
		</tr>
		<tr>
	      <td align="middle" colspan="2"><a  href="home_page.php"><h2>Home Page</h2></td>
	    </tr>
		
	</table>
 </form>

<?php include 'lower_layout.php'; ?>