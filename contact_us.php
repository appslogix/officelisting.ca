<?php
	$page_title = 'Contact us';
	include('./lib/sections/public_header.php');
?>
<div class="container">
		<h3 align="center">Contact Us</h3>
			<div class="done"><H3>Thank you for your inquiry/comment.</H3> We will reply to you as soon as possible.</div><!--close done-->
				<div class="form">
					<p>All fields must be filled.</p>
					<HR/>
					<form id="contactForm" action="contact_submit.php" method="post">
						<table width="auto" align="center" border="0" cellspacing="2" cellpadding="0">
						  <tr>
							<td><label class="label" for="name">Your Names:</label></td>
							<td><input onclick="this.value='';" class="input" name="name" type="text" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" size="25" maxlength="50" /></td>
						  </tr>
						  <tr>
							<td><label class="label" for="email">Email Address:</label></td>
							<td><input onclick="this.value='';" class="input" name="email" type="text" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" size="25" maxlength="30"  /></td>
						  </tr>
						  <tr>
							<td><label class="label" for="message">Query/Comment:</label></td>
							<td align="center"><textarea class="input" name="message" cols="20" rows="4"></textarea></td>
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