<?PHP
	$page_title = 'Homepage';

	  
		include('../lib/sections/user_header.php');
		?>
      <div class="container">  
        <? if (!empty($message)){echo "<div class='message'>".$message."</div>";} ?>
        
	<p>Welcome <?php if(empty($getuser[0]['first_name']) || empty($getuser[0]['last_name'])){echo $getuser[0]['username'];} else {echo $getuser[0]['first_name']." ".$getuser[0]['last_name'];} ?></p>
	<? displayUserImg($getuser[0]['id']); ?><br>
    
    <?php 
		if (!empty($message)){echo "<div class='message'>".$message."</div>";} 
    	include('../lib/sections/user_featured_listings.php');
    ?>
	</div>
            <?php
	require_once('../lib/sections/user_footer.php');
?>
</body>
</html>