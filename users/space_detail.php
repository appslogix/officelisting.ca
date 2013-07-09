<?PHP
	$page_title = 'Space Details';
	include('../lib/sections/user_header.php');
	

if(isset($_GET['id'])){
	if(is_numeric($_GET['id'])){
		$id = strip_tags($_GET['id']);
		}
		$sql = "SELECT * FROM spaces WHERE space_id = '$id' LIMIT 1";
		$res = mysql_query($sql);
			while ($row = mysql_fetch_array($res)) {
				$space_id = $row["space_id"];
				$building_id = $row["building_id"];
				$suite_number = $row["suite_number"];
				$square_footage = $row["square_footage"];
				$lease_term = $row["lease_term"];
				$description = $row["description"];
				$first_name = $row["first_name"];
				$last_name = $row["last_name"];
				$email = $row["email"];
				$phone_number = $row["phone_number"];
				$monthly_rents = $row["monthly_rents"];
				$space_active = $row["space_active"];
				$space_image = $row['space_image'];
			}
		
	}
	
 if (isset($building_id)) {
	 
	$sql = "SELECT * FROM buildings WHERE id = '$building_id' LIMIT 1";
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

	
		<h3>Suite <?=$suite_number;?></h3>
        <p><a href="building_detail.php?id=<?=$building_id?>"><?=$address;?> <?=$postal_code;?></a></p>
        <img class="img-polaroid" src="../users/uploads/spaces/<?=$space_image?>" width="600px"/>

            
                    			
                 
             <div class="field">        
                    <span><?=$description;?></span>
                    </div>
                    
            <dl>
             	<dt>Suite Number</dt>
  				<dd><?=$suite_number;?></dd>
             	<dt>Square Footage</dt>
  				<dd><?=$square_footage;?></dd>
             	<dt>Lease Term</dt>
  				<dd><?=$lease_term;?></dd>             
            </dl>      
            
             
             <h3>Also available on building</h3>
             
             	
             
             
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
			 	$sql = "SELECT * FROM spaces WHERE building_id = '$building_id' AND space_id != $space_id";
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
