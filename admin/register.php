<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<title>Member Registration</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index, follow" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	
	<script type="text/javascript" src="js/jquery-1.6.2.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
	
			$('#regForm').submit(function(e) {
				register();
				e.preventDefault();	
			});	
		});
	</script>

</head>
<body>
	<table align="center" width="100%" cellspacing="1" cellpadding="1" border="0">
		<tr>
			<td align="left"><a href="index.php">Home</a> | <a href="login.php">Log in</a> | <a href="register.php">Register</a> | <a href="pass_reset.php">Reset Password</a> | <a href="contact_us.php">Contact Us</a></td><td align="right"><a href="admin/login.php">Admin Login</a></td>
		</tr>
	</table>
	<hr/>
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
			<input onclick="this.value='';" name="username" type="text" size="25" maxlength="8" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>"/>
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
<?php
	require_once('../lib/sections/footer.php');
?>   
</body>
</html>
