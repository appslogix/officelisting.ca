
	<?php 
		$page_title = 'Register';
		include('./lib/sections/public_header.php');
	?>
<div class="container">
	<p>Register</p>
	<p>Use the form below to register.</p>
	<hr/>
	<div class="done"><p>Registration successful! <a href="login.php">Click here</a> to login.</p></div><!--close done-->
	<div class="form">
	<form id="regForm" action="reg_submit.php" method="post">
		<table align="center" width="50%" cellspacing="1" cellpadding="1" border="0">
		  <tr>
			<td colspan="2" ></td>
		  </tr>
		  <tr>
			<td>
				<label for="username">Username:</label>
			</td>
			<td>
			<input onclick="this.value='';" name="username" type="text" size="25" maxlength="15" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>"/>
			</td>
		  </tr>
		  <tr>
			<td>
				<label for="password">Password:</label>
			</td>
			<td>
			<input name="password" type="password" size="25" maxlength="15" />
			</td>
		  </tr>
		  <tr>
			<td>
				<label for="email">Email:</label>
			</td>
			<td>
			<input onclick="this.value='';" name="email" type="text" size="25" maxlength="50" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>"/>
			</td>
		  </tr>
		   <tr>
			<td>&nbsp;</td>
			<td>
				<input type="submit" name="register" value="Register" /><img id="loading" src="images/loading.gif" alt="working.." />
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
