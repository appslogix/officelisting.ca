<?PHP
require_once('../lib/connections/db.php');
include('../lib/functions/functions.php');
include('../lib/functions/ps_pagination.php');

checkLogin('1');

$message="";
if(isset($_GET['message'])){
	$message = strip_tags($_GET['message']);
	}
	
$error="";
if(isset($_GET['error'])){
	$error = strip_tags($_GET['error']);
	}
	
$getuser = getUserRecords($_SESSION['user_id']);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?=$getuser[0]['username'];?>'s Home Page.</title>
<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
</head>

<body>
	
    <?php include('../lib/sections/admin_main_nav.php'); ?>
    
    
	<p><?php if(empty($getuser[0]['first_name']) || empty($getuser[0]['last_name'])){echo $getuser[0]['username'];} else {echo $getuser[0]['first_name']." ".$getuser[0]['last_name'];} ?>, manage Buildings.</p>
	<?
	  //Select all users and display paginated results
		$sql = "SELECT * FROM buildings"; 
		$res = mysql_query($sql) or die(mysql_error());
		$numRows = mysql_num_rows($res);
		if ((mysql_num_rows($res)) > 0){
		$pager = new PS_Pagination($conn, $sql, 10, 5, "");
	  ?>
		<p>There are <?=$numRows;?> buildings on this site.</p>
		<? if (!empty($message)){echo "<div class='message'>".$message."</div>";} ?>
		<? if (!empty($error)){echo "<div id='error'>".$error."</div>";} ?>
        
        <div align="right"><a href="add_building.php">Add a building</a></div>
        
		<table width="100%" border="1" cellspacing="1" cellpadding="1">
			<tr>
				<td>Address</td>
                <td>Postal Code</td>
                
                <td>Status</td>
                <td>Action</td>
			</tr>
			<? 
			   $countLoop = 0;
			   $rs = $pager->paginate();
				if(!$rs) die(mysql_error());
					while($row = mysql_fetch_array($rs)){ 
					 if($row['active'] == 1){$active = "<span style='color:#008040;'>Active</span>";}
					 if($row['active'] == 0){$active = "<span style='color:#f40000;'>Suspended</span>";}
			?>	
			<tr>
				<td><?=$row['address'];?></td>
                <td><?=$row['postal_code'];?></td>
                
                <td><?=$active;?></td>
                <td><a href="edit_building.php?id=<?=$row['id'];?>">Edit</a> | <a href="building_actions_submit.php?id=<?=$row['id'];?>&action=delete">Delete</a> | <? if($row['active']==1){echo "<a href='building_actions_submit.php?id=".$row['id']."&action=suspend'>Suspend</a>";}?><? if($row['active']== 0){echo "<a href='building_actions_submit.php?id=".$row['id']."&action=unsuspend'>Unsuspend</a>";} ?></td>
			</tr>
			<? $countLoop++; } ?>
		</table>
		<table>
			<tr>
				<td><?= $pager->renderFullNav();?></td>
			<tr>
		</table>
			<? } else {	echo "<fieldset><p>There are currently no buildings to manage!</p></fieldset>";} ?>

<?php
	require_once('../lib/sections/footer.php');
?>   
</body>
</html>