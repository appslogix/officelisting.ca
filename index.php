<?php 

	
	include('./lib/sections/public_header.php');
?>


<div class="container">
	
	<h3>Welcome to OfficeListing.ca</h3>
    <p>List and find your ideal office space.</p>
    <hr/>
    <!-- Output Google Maps-->
		<div id="map_canvas" style="width:400px; height:300px"></div>
    
	<!-- Include Featured Listings-->
	<?php
    include('./lib/sections/featured_listings.php');
    ?>
</div>
    <?php
	require_once('./lib/sections/footer.php');
?>  
</body>
</html>
