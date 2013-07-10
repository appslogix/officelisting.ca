<?php

require_once('../lib/connections/db.php');

?>

<ul class="thumbnails js-masonry" id="container" data-masonry-options='{"itemSelector": ".item", "transitionDuration": "0"}'>

<?php
// Make the query:
$sql = 'SELECT * FROM spaces INNER JOIN buildings ON spaces.building_id = buildings.id ORDER BY space_id ASC';
$res = mysql_query ($sql);
while ($row = mysql_fetch_array($res)) {
?>

    <li class="span4 item">
    	<div class="thumbnail">
        
        	<?php if (($row['space_image']) != '') {?>
        		<a href="space_detail.php?id=<?=$row['space_id']?>"><img src="../users/uploads/spaces/<?=$row['space_image']?>" width="768px"/></a>
            <?php }?>
            <h4><a href="building_detail.php?id=<?=$row['building_id']?>"><?=$row['address']?></a></h4>
            
            
            
			<p>
            	<span>Suite: <?=$row['suite_number']?></span><br />
    			<span>Square Footage: <?=$row['square_footage']?></span><br />
    			<span>Monthly Rents: <?=$row['monthly_rents']?></span><br />
            </p>
            <p>
            	<a class="btn" href="add_favourite.php?space_id=<?=$row['space_id']?>"><i class="icon-ok"></i> Add favourite</a>
                <a class="btn" href="space_detail.php?id=<?=$row['space_id']?>">View details &raquo;</a> 
				
            </p>
            
         </div>
   
    
    </li>
<?php
}
?>

</ul>