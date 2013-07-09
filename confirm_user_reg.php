<?PHP
DEFINE('INCLUDE_CHECK',1);
require_once('lib/connections/db.php');
include('lib/functions/functions.php');
$page_title = "Registration Confirmation";
$activation_key = '';
	if (isset($_GET['activation_key'])){
		$activation_key = $_GET['activation_key'];
	}

	$res = confirm_user_reg($activation_key);
		if ($res == 1){
			$error = "Failed to activate account. Please contact the site admin.";
			}
		if ($res == 2){
			$error = "Your account is already active!";
			}
		if ($res == 3){
			$error = "This user does not exist.";
			}
		if ($res == 99){
			$message = "Congratulations! Your account has been activated. You may now <a href='login.php'>login</a> and start using it.";
			}


$sitesettings = getSiteSettings();
include('./lib/sections/public_header.php');
?>
<div class="container">
<? 
	if(isset($error)) {
		echo '<div class="error">' . $error . '</div>' . "\n";
	} else if(isset($message)) {
		echo '<div class="message">' . $message . '</div>' . "\n";
	} 
?>
</div>
<?php
	require_once('./lib/sections/footer.php');
?>   
</body>
</html>
