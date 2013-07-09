<?php
	include('../lib/sections/user_header.php');
	
	if (isset($_POST['findbuilding'])) {// Check if form has been submitted
	

		
		// Collect values into variables from form
		$square_footage = $_POST['square_footage'];
		$monthly_price = $_POST['monthly_price'];
		
		
		
		// Set ranges for Square footage
		if ($square_footage == 0) {
			$min_sq_ft = 0;
			$max_sq_ft = 500;
		}		
		if ($square_footage == 501) {
			$min_sq_ft = 501;
			$max_sq_ft = 999;
		}		
		if ($square_footage == 1000) {
			$min_sq_ft = 1000;
			$max_sq_ft = 1999;
		}		
		if ($square_footage == 2000) {
			$min_sq_ft = 2000;
			$max_sq_ft = 3499;
		}	
		if ($square_footage == 3500) {
			$min_sq_ft = 3500;
			$max_sq_ft = 100000;
		}	
		
		
		
		// Set ranges for price
		if ($monthly_price == 0) {
			$min_price = 0;
			$max_price = 1999.00;
		}	
		if ($monthly_price == 2000) {
			$min_price = 2000.00;
			$max_price = 4999.00;
		}		
		if ($monthly_price == 5000) {
			$min_price = 5000.00;
			$max_price = 9999.00;
		}		
		if ($monthly_price == 10000) {
			$min_price = 10000.00;
			$max_price = 100000.00;
		}
		
		
			
		

	}
?>

<div class="container">
	<h3>Search Results</h3>
    		<div id="map_canvas" style="width:100%; height:300px"></div>
            <hr />
    
<ul class="thumbnails">    
    <?php
		//$sql = "SELECT * FROM spaces WHERE square_footage BETWEEN $min_sq_ft AND $max_sq_ft";
		//$sql = "SELECT * FROM spaces INNER JOIN buildings ON spaces.building_id = buildings.id WHERE (square_footage, monthly_rents) BETWEEN ($min_sq_ft, $min_price) AND ($max_sq_ft, $max_price)";
		//$sql ="SELECT * FROM spaces INNER JOIN buildings ON spaces.building_id = buildings.id WHERE square_footage >= $min_sq_ft AND square_footage <= $max_sq_ft";
		//$sql = "SELECT * FROM spaces INNER JOIN buildings on spaces.building_id = building.id WHERE square_footage BETWEEN $min_sq_ft AND $max_sq_ft";
		$sql = "SELECT * FROM spaces INNER JOIN buildings on spaces.building_id = buildings.id WHERE 
		(square_footage >= $min_sq_ft) AND
		(square_footage <= $max_sq_ft) AND
		(monthly_rents >= $min_price) AND
		(monthly_rents <= $max_price)
		";
		$res = mysql_query($sql);
	
	while ($row = mysql_fetch_array($res)) {

?>
    
    <li class="span4">
    	<div class="thumbnail">
        	<a href="space_detail.php?id=<?=$row['space_id']?>"><img src="../users/uploads/spaces/<?=$row['space_image']?>" width="768px"/></a>
            <h4><a href="building_detail.php?id=<?=$row['building_id']?>"><?=$row['address']?></a></h4>
			<p>
            	<span>Suite: <?=$row['suite_number']?></span><br />
    			<span>Square Footage: <?=$row['square_footage']?></span><br />
    			<span>Monthly Rents: <?=$row['monthly_rents']?></span><br />
            </p>
            <p>
            	<a class="btn" href="add_favourite.php?space_id=<?=$row['space_id']?>">&#43; Add favourite</a>
                <a class="btn" href="space_detail.php?id=<?=$row['space_id']?>">View details &raquo;</a> 
				
            </p>
         </div>
   
    
    </li>

<?php
}
?>

</ul>
    
    
    <div>
    

    </div>
    
</div>    
    
    <?php
	require_once('../lib/sections/user_footer.php');
?>  
</body>
</html>
