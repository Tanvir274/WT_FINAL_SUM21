<?php include 'uper_layout.php'; ?>

<h1 align="center"><b>Welcome to Dashboard </b></h1>
<table class="center" border="2">
   <tr>
       <td><h2><b>Search </b></h2> </td>
       <td ><input type="text" placeholder="search information"></td></td>
   </tr><br><br>
   <tr>
      <td><a  href="blood_bank.php">Blood Bank</td>
	  <td><a  href="available_donor.php">Available Donor</td>
	  <td><a  href="profile.php">Profile</td>
	  
   </tr>
   <tr>
		<td align="middle" colspan="3"><a  href="logout.php"><h2>logOut</h2></td>
	</tr>
   
</table>

<?php include 'lower_layout.php'; ?>