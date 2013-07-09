
	<?php
		$page_title = 'Sign In'; 
		include('./lib/sections/public_header.php');
	?>

    <div class="container">
    <div style="display: block; width:100%; height: 30px;"></div>
    
	<? if(!empty($error)){echo "<div class='error'>".$error."</div>";}?>
	
	
	<form id="loginForm" class="form-signin" method="post" action="login_submit.php">
		<h3 class="form-signin-heading">Sign in</h3>
		<input class="input-block-level" placeholder="Username" onclick="this.value='';" name="username" type="text" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>" />
	
		<input name="password" type="password" size="25" maxlength="15" class="input-block-level" placeholder="Password" />
    

				<input type="submit" class="btn btn-large btn-primary" name="submit" value="Login" /><img id="loading" src="images/loading.gif" alt="Logging in.." />
                <a href="pass_reset.php">Forgot Password?</a>
		
				
		
	</form>
 </div> 
<?php
	require_once('./lib/sections/footer.php');
?>  
</body>
</html>
