<?PHP
	$page_title = 'Space Details';
	include('../lib/sections/user_header.php');
	

if(isset($_GET['id'])){
	if(is_numeric($_GET['id'])){
		$id = strip_tags($_GET['id']);
		}
		$sql = "SELECT * FROM buildings WHERE id = '$id' LIMIT 1";
		$res = mysql_query($sql);
		while ($row = mysql_fetch_array($res)) {
			$building_id = $row['id'];
			$address = $row['address'];
			$postal_code = $row['postal_code'];
			$building_description = $row['description'];
			$building_image = $row['image'];
			}
		
	}
	


?>
	<div class="container">

	
		<h3><?=$address;?> <?=$postal_code;?></h3>
        <hr />
        		<div id="map_canvas" style="width:100%; height:300px"></div>
                <hr />
        <img class="img-polaroid" src="../users/uploads/buildings/<?=$building_image?>" width="600px"/>

            
                    			
                 
             <div class="field">        
                    <span><?=$building_description;?></span>
                    </div>
             <br />        
            
            
            
             
             <h3>Available Spaces</h3>
             
             	
             
             
             <table class="table table-hover">
             <thead>
			<tr>
                <th>Suite Number</th>
                <th>Square Footage</th>
                <th>Lease Term</th>
                <th>Monthly Rents</th>
                <th>Status</th>
                <th>Actions</th>
			</tr>
            </thead>
             <?php
			 	$sql = "SELECT * FROM spaces WHERE building_id = '$id'";
				$res = mysql_query($sql);
				while ($row = mysql_fetch_array($res)) {
					?>
                    
         			<tr>
                    <td><?=$row['suite_number'];?></td>
                <td><?=$row['square_footage'].' sq-ft';?></td>
                <td><?=$row['lease_term'];?></td>
                <td><?='$'.$row['monthly_rents'];?></td>
                <?php
                if($row['space_active'] == 1){$active = "<span style='color:#008040;'>Active</span>";}
					 if($row['space_active'] == 0){$active = "<span style='color:#f40000;'>Suspended</span>";}
                     ?>
                <td><?=$active;?></td>
                <td>
                <div class="btn-group"><a class="btn btn-small" href="add_favourite.php?space_id=<?=$row['space_id']?>"><i class="icon-ok"></i> Add favourite</a><a href="space_detail.php?id=<?=$row['space_id'];?>" class="btn btn-small">View details &raquo;</a></div></td>
			</tr>
                    
                    <?php
				}
				 
			 
			 ?>
             </table>
            
   </div>         
<?php
	require_once('../lib/sections/footer.php');
?>  
</body>
</html>
