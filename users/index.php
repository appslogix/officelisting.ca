<?PHP
require_once('../lib/connections/db.php');
include('../lib/functions/functions.php');

checkLogin('2');

$getuser = getUserRecords($_SESSION['user_id']);
	
		
			$message = $_GET['message'];

	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?=$getuser[0]['username'];?>'s Home Page.</title>
</head>

<body>
	    <?php 
		include('../lib/sections/user_main_nav.php');
		?>
        
        <? if (!empty($message)){echo "<div class='message'>".$message."</div>";} ?>
        
	<p>Welcome <?php if(empty($getuser[0]['first_name']) || empty($getuser[0]['last_name'])){echo $getuser[0]['username'];} else {echo $getuser[0]['first_name']." ".$getuser[0]['last_name'];} ?></p>
	<? displayUserImg($getuser[0]['id']); ?><br>
    
    		<? if (!empty($message)){echo "<div class='message'>".$message."</div>";} ?>
    
        <?php
    include('../lib/sections/user_featured_listings.php');
    ?>

            <?php
	require_once('../lib/sections/footer.php');
?>
</body>
</html>