
	    <?php 
		$page_title = 'Manage Favourites';
		include('../lib/sections/user_header.php');
		?>
 <div class="container">       
        <? if (!empty($message)){echo "<div class='message'>".$message."</div>";} ?>
		<? if (!empty($error)){echo "<div id='error'>".$error."</div>";} ?>
        
        	<?
	  //Select all spaces and display paginated results
		$sql = "SELECT * FROM favourites INNER JOIN spaces ON favourites.space_id = spaces.space_id INNER JOIN buildings ON spaces.building_id = buildings.id WHERE favourites.user_id = $user_id "; 
		$res = mysql_query($sql) or die(mysql_error());
		$numRows = mysql_num_rows($res);
		if ((mysql_num_rows($res)) > 0){
		$pager = new PS_Pagination($conn, $sql, 10, 5, "");
	  ?>
      <h3><?=$getuser[0]['username'];?>'s Favourites</h3>
      
      
      
		<p>There <?php if ($numRows != 1) { echo 'are';} else { echo 'is'; }?> <?=$numRows;?> <?php if ($numRows != 1) { echo 'favourite spaces';} else { echo 'favourite space'; }?>  to manage.</p>
        
        <div align="left"><a href="compare_space.php" class="btn">Compare</a></div>
        
        <table class="table table-hover">
        	<thead>
			<tr>
            	<th><input type="checkbox" /></th>
            	<th>Suite Number</th>
				<th>Address</th>
                <th>Square Footage</th>
                <th>Lease Term</th>
                <th>Monthly Rents</th>
                <th>Status</th>
                <th>Actions</th>
			</tr>
            </thead>
            <tbody>
			<? 
			   $countLoop = 0;
			   $rs = $pager->paginate();
				if(!$rs) die(mysql_error());
					while($row = mysql_fetch_array($rs)){ 
					 if($row['space_active'] == 1){$active = "<span style='color:#008040;'>Active</span>";}
					 if($row['space_active'] == 0){$active = "<span style='color:#f40000;'>Suspended</span>";}
			?>	
			<tr>
            	<td><input type="checkbox" /></td>
            	<td><a href="space_detail.php?id=<?=$row['space_id'];?>"><?=$row['suite_number'];?></a></td>
				<td><a href="space_detail.php?id=<?=$row['space_id'];?>"><?=$row['address'];?> <?=$row['b.postal_code'];?></a></td>
                
                <td><?=$row['square_footage'].' sq-ft';?></td>
                <td><?=$row['lease_term'];?></td>
                <td><?='$'.$row['monthly_rents'];?></td>
                <td><?=$active;?></td>
                <td>
                    	<div class="btn-group">
                            <a href="favourite_actions_submit.php?id=<?=$row['favourite_id'];?>&action=delete" class="btn btn-small"><i class="icon-remove"></i> Remove</a>  
                        </div>
                </td>
			</tr>
			<? $countLoop++; } ?>
            </tbody>
		</table>
		<div>
		<?= $pager->renderFullNav();?>
        </div>
        
        
        
        <? } else {	echo "<fieldset><p>There are currently no favouritess to manage!</p></fieldset>";} ?>
	
        
        
</div>	

            <?php
	require_once('../lib/sections/user_footer.php');
?>
</body>
</html>