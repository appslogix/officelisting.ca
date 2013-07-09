<?php 
	$page_title = 'Change Password';
	include('../lib/sections/user_header.php');
?>
 <div class="container">       
	<p><?php if(empty($getuser[0]['first_name']) || empty($getuser[0]['last_name'])){echo $getuser[0]['username'];} else {echo $getuser[0]['first_name']." ".$getuser[0]['last_name'];} ?>, change your password.</p>
		<p class="done">Password successfully changed.</p><!--close done-->
			<div class="form">
			<h3>Change Password</h3>
			<hr/>
				<table class="searchForm" border="0" align="center">
					<form id="updatepassForm" action="change_pass_submit.php" method="post">
					<tr>
						<td><label for="old password">Old Password:</label></td><td><input name="oldpassword" type="password"/></td>
					</tr>
					<tr>
						<td><label for="new password">New Password:</label></td><td><input name="newpassword" type="password"/></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="submit" value="Change Password" /><img id="loading" src="../images/loading.gif" alt="Updating.." /></td>
					</tr>
					<tr>
						<td colspan="2"><div id="error">&nbsp;</div></td>
					</tr>
					</form>
				</table>
			</div><!--close form-->
</div>
                        <?php
	require_once('../lib/sections/user_footer.php');
?>
</body>
</html>