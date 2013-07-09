<?php 
	$page_title = 'Edit Profile';
	include('../lib/sections/user_header.php');
?>
<div class="container">    
	<p><?php if(empty($getuser[0]['first_name']) || empty($getuser[0]['last_name'])){echo $getuser[0]['username'];} else {echo $getuser[0]['first_name']." ".$getuser[0]['last_name'];} ?>, edit your profile.</p>
	<p align="center" class="done">Profile updated successfully.</p><!--close done-->
	<div class="form">
	  <form id="editprofileForm" action="edit_profile_submit.php" method="post">
	  <table width="80%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td><label for="first_name">First Name:</label></td><td><input type="text" name="first_name" value="<? if(isset($getuser[0]['first_name'])){echo $getuser[0]['first_name'];}?>"/></td>
		</tr>
		<tr>
			<td><label for="last_name"><label>Last Name:</label></td><td><input type="text" name="last_name" value="<? if(isset($getuser[0]['last_name'])){echo $getuser[0]['last_name'];}?>" /></td>
		</tr>
		<tr>
			<td><label for="email"><label>Email:</label></td><td><input type="text" name="email" value="" /> <span class="label">Current: <?= $getuser[0]['email'];?></span></td>
		</tr>
		<tr>
			<td><label for="dialing_code"><label>Dialing Code:</label></td><td><?= get_dialing_code($_SESSION['user_id']);?></td>
		</tr>
		<tr>
			<td><label for="phone"><label>Phone:</label></td><td><input type="text" name="phone" value="<? if(isset($getuser[0]['phone'])){echo $getuser[0]['phone'];}?>" /></td>
		</tr>
		<tr>
			<td><label for="city"><label>City/Town:</label></td><td><input type="text" name="city" value="<? if(isset($getuser[0]['city'])){echo $getuser[0]['city'];}?>" /></td>
		</tr>
		<tr>
			<td><label for="country"><label>Country:</label></td><td><?= get_select_countries($_SESSION['user_id']);?></td>
		</tr>
		<tr>
			<td>&nbsp;</td><td><input type="submit" name="editprofile" value="Update" /><img id="loading" src="../images/loading.gif" alt="Updating.." /></td>
		</tr>
		<tr>
			<td colspan="2"><div id="error">&nbsp;</div></td>
		</tr>
	  </table>
	  </form>
	</div><!--close form-->
</div>    
<?php
	require_once('../lib/sections/user_footer.php');
?>
    
</body>
</html>