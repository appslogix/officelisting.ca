<?PHP
require_once('../lib/connections/db.php');
include('../lib/functions/functions.php');
include('../lib/functions/ps_pagination.php');

checkLogin('2');

$message="";
if(isset($_GET['message'])){
	$message = strip_tags($_GET['message']);
	}
	
$error="";
if(isset($_GET['error'])){
	$error = strip_tags($_GET['error']);
	}

$getuser = getUserRecords($_SESSION['user_id']);

$user_id = $getuser[0]['id'];

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?=$getuser[0]['username'];?>'s Favourites</title>
</head>

<body>
	    <?php 
		include('../lib/sections/user_main_nav.php');
		?>
        
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
        
        
        
        <table width="100%" border="1" cellspacing="1" cellpadding="1">
			<tr>
				<td>Address</td>
                <td>Suite Number</td>
                
                <td>Square Footage</td>
                <td>Lease Term</td>
                <td>Monthly Rents</td>
                <td>Status</td>
                <td>Actions</td>
			</tr>
			<? 
			   $countLoop = 0;
			   $rs = $pager->paginate();
				if(!$rs) die(mysql_error());
					while($row = mysql_fetch_array($rs)){ 
					 if($row['space_active'] == 1){$active = "<span style='color:#008040;'>Active</span>";}
					 if($row['space_active'] == 0){$active = "<span style='color:#f40000;'>Suspended</span>";}
			?>	
			<tr>
				<td><?=$row['address'];?> <?=$row['b.postal_code'];?></td>
                <td><?=$row['suite_number'];?></td>
                <td><?=$row['square_footage'].' sq-ft';?></td>
                <td><?=$row['lease_term'];?></td>
                <td><?='$'.$row['monthly_rents'];?></td>
                <td><?=$active;?></td>
                <td><a href="space_detail.php?id=<?=$row['space_id'];?>">View Details</a> | <a href="favourite_actions_submit.php?id=<?=$row['favourite_id'];?>&action=delete">Delete</a> </td>
			</tr>
			<? $countLoop++; } ?>
		</table>
		<table>
			<tr>
				<td><?= $pager->renderFullNav();?></td>
			<tr>
		</table>
        
        
        
        <? } else {	echo "<fieldset><p>There are currently no favouritess to manage!</p></fieldset>";} ?>
	
        
        
	

            <?php
	require_once('../lib/sections/footer.php');
?>
</body>
</html>