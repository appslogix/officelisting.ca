
	    <?php 
		$page_title = 'Manage Listigss';
		include('../lib/sections/user_header.php');
		?>
<div class="container">        
	<?
	  //Select all spaces and display paginated results
		$sql = "SELECT * FROM spaces INNER JOIN buildings ON building_id = id WHERE spaces.user_id = $user_id"; 
		$res = mysql_query($sql) or die(mysql_error());
		$numRows = mysql_num_rows($res);
		if ((mysql_num_rows($res)) > 0){
		$pager = new PS_Pagination($conn, $sql, 10, 5, "");
	  ?>
		<h3><?=$getuser[0]['username'];?>'s Office Listings</h3>
        
      
      <? if (!empty($message)){echo "<div class='message'>".$message."</div>";} ?>
		<? if (!empty($error)){echo "<div id='error'>".$error."</div>";} ?>
		<p>There <?php if ($numRows != 1) { echo 'are';} else { echo 'is'; }?> <?=$numRows;?> <?php if ($numRows != 1) { echo 'spaces';} else { echo 'space'; }?>  to manage. </p>
        
		
        
        
        <div align="left"><a href="list_space.php" class="btn"><i class="icon-plus"></i> List Space</a></div>
		<table class="table table-hover">
        	<thead>
			<tr>
            	<th>Suite Number</th>
				<th>Address</th>
                <th>Square Footage</th>
                <th>Monthly Rents</th>
                <th>Lease Term</th>
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
            	<td><?=$row['suite_number'];?></td>
				<td><?=$row['address'];?> <?=$row['b.postal_code'];?></td>
                <td><?=$row['square_footage'].' sq-ft';?></td>
                <td><span class="add-on">$</span><?=$row['monthly_rents'];?></td>
                <td><?=$row['lease_term'];?></td>
                <td><?=$active;?></td>
                <td><a href="edit_space.php?id=<?=$row['space_id'];?>" class="btn btn-small"><i class="icon-pencil"></i> Edit</a> <a href="listing_actions_submit.php?id=<?=$row['space_id'];?>&action=delete" class="btn btn-small"><i class="icon-trash"></i> Delete</a> </td>
			</tr>
			<? $countLoop++; } ?>
            </tbody>
		</table>
		<table>
			<tr>
				<td><?= $pager->renderFullNav();?></td>
			<tr>
		</table>
			<? } else {	echo "<fieldset><p>This account currently has no listings to manage!</p></fieldset>";} ?>

</div>        
<?php
	require_once('../lib/sections/user_footer.php');
?>
</body>
</html>