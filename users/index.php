<?PHP
	$page_title = 'Homepage';

	  
		include('../lib/sections/user_header.php');
		?>
      <div class="container"> 
      
      	<h3>Welcome to OfficeListing.ca</h3>
    <p>List and find your ideal office space.</p>
    <hr/>
       
        <? if (!empty($message)){echo "<div class='message'>".$message."</div>";} 
		if (!empty($message)){echo "<div class='message'>".$message."</div>";} 
		?>
        
		<div id="map_canvas" style="width:100%; height:300px"></div>
        <hr />
        <?php
    	include('../lib/sections/user_featured_listings.php');
    ?>
	</div>
            <?php
	require_once('../lib/sections/user_footer.php');
?>
</body>
</html>