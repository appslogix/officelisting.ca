<?PHP
require_once('lib/connections/db.php');
include('lib/functions/functions.php');

$page_title = 'Password Reset';
?>

<?php 
	include('./lib/sections/public_header.php');
?>
	<div class="container">
	<p>Enter your email address below.</p>
	<hr/>
	  <div class="done"><H3>New password sent.</H3><p>Check your inbox / junk mail folder for a link to reset your password.</p></div><!--close done-->
	  <div class="form">
		<form id="passreset" action="pass_reset_submit.php" method="post">
		<table align="center" width="50%" cellspacing="1" cellpadding="1" border="0">
		  <tr>
			<td><label for="email">Your Email:</label></td>
			<td><input onclick="this.value='';" name="email" type="text" size="25" maxlength="30" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" /></td>
		  </tr>
		  <tr>
			<td>&nbsp;</td>
			<td>
				<input type="submit" value="Submit" /><img id="loading" src="images/loading.gif" alt="Sending.." />
			</td>
		  </tr>
		  <tr>
			<td colspan="2"><div id="error">&nbsp;</div></td>
		  </tr>
		</table>
		</form>          
	</div><!--close form-->
</div>    
<?php
	require_once('./lib/sections/footer.php');
?>  
</body>
</html>
