<?php 
		$page_title = 'Logout';
		include('../lib/sections/user_header.php');
		

$action='';
	if (isset($_GET['action'])){
		$action = strip_tags($_GET['action']);}
	if ($action == 'logoff'){
		logoff();}
?>

		
	<script type="text/javascript">
		$(document).ready(function(){
	
			$('#loginForm').submit(function(e) {
				login();
				e.preventDefault();	
			});	
		});

	</script>


    
<div class="container">
	<div class="message" align="center">You have been logged out. <a href="../login.php">Click here</a> to log in.</div>
</div>
                <?php
	require_once('../lib/sections/user_footer.php');
?>
</body>
</html>
