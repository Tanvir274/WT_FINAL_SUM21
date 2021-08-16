<?php 
include 'uper_layout.php'; 
include 'controllers/user_search.php';

?>
<script src="JS/search.js"></script>
<script src="JS/bd.js"></script>

<h1 align="center"><b>Welcome to Dashboard </b></h1>
<form action="" onsubmit="return bvalidate()" method="post">
<table align="center" >
   <tr>
       <td><h2><b>Search blood Donor Available Person </b></h2> </td>
       <td><input type="text" id="name"  name="name" value="<?php echo $name;?>" placeholder="Blood Type"></td>
	   <td>Blood type will be:<br>A+, O+<br>B+, AB+<br>A-, O-<br>B-, AB-</td>
	   <td><span id="err_name" ><?php echo $err_name;?></span></td>
		
	      
   </tr>
   <tr>
		<td align="middle" colspan="2"><input type="submit" name="search" value="Search"></td>
   </tr>
   
   
   
</table>
</form>

<table class="center" border="2">
   <tr>
       <td><h2><b>Search </b></h2> </td>
       <td><input type="text" onkeyup="search(this)" placeholder="Write blood type Alphabet"></td></td>
	   <td><span id="suggestion"></span> </td>
	   
   </tr>
   
   
</table>
<br><br><br><br>  
<table class="center" border="2">  
   <tr>
      <td><a  href="blood_bank.php">Blood Bank</td>
	  <td><a  href="available_donor.php">Available Donor</td>
	  <td><a  href="profile.php">Profile</td>
	  <td><a  href="rate.php">Rate Blood Bank</td>
	  
   </tr>
   <tr>
		<td align="middle" colspan="3"><a  href="logout.php"><h2>logOut</h2></td>
	</tr>
   
</table>

<?php include 'lower_layout.php'; ?>