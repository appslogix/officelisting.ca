<?PHP
DEFINE('INCLUDE_CHECK',1);
require_once('lib/connections/db.php');
include('lib/functions/functions.php');
$page_title = "Confirm Password";

$id = '';
if (isset($_GET['id'])){
	if (is_numeric($_GET['id'])){
		$id = secureInput($_GET['id']);}
		}
			
$new = '';
if (isset($_GET['new'])){
	$new = secureInput($_GET['new']);
	}
	
	$res = confirm_pass($id,$new);
		if ($res == 1){
			$error = "Unable to update new password. Please contact the site admin.";
			}
		if ($res == 2){
			$error = "The new password is already confirmed or is incorrect!";
			}
		if ($res == 3){
			$error = "This user does not exist.";
			}
		if ($res == 99){
			$message = "Your new password has been confirmed. You may <a href='login.php'>login</a> using it.";
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
