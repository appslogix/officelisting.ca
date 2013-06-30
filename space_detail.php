<?PHP
require_once('./lib/connections/db.php');
include('./lib/functions/functions.php');

checkLogin('1');

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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<title>Home Page</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index, follow" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
</head>
<body>

		<?php 
		include('./lib/sections/public_main_nav.php');
		?>
	<hr/>
		<h3>Building Information</h3>
            <div class="field"><strong>Address</strong><br />          
                    <span><?=$address;?></span>
                    </div>
             <br /> 
             <div class="field"><strong>Postal Code</strong><br />          
                    <span><?=$postal_code;?></span>
                    </div>
                    			
              <br />       
             <div class="field"><strong>Description</strong><br />          
                    <span><?=$building_description;?></span>
                    </div>
             <br />        
            
            
            <h3>Office Space Information</h3>
                        <div class="field"><strong>Suite Number</strong><br />          
                    <span><?=$suite_number;?></span>
                    </div>
             <br /> 
             <div class="field"><strong>Square Footage</strong><br />          
                    <span><?=$square_footage;?></span>
                    </div>
                    			
              <br />       
             <div class="field"><strong>Lease Term</strong><br />          
                    <span><?=$lease_term;?></span>
                    </div>
             <br /> 
              <div class="field"><strong>Space Description</strong><br />          
                    <span><?=$description;?></span>
                    </div>
             <br /> 
             
             <h3>Other Office Spaces on same Building</h3>
             
             	
             
             
             <table width="100%" border="1" cellspacing="1" cellpadding="1">
			<tr>
                <td>Suite Number</td>
                <td>Square Footage</td>
                <td>Lease Term</td>
                <td>Monthly Rents</td>
                <td>Status</td>
                <td>Actions</td>
			</tr>
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
                <td><a href="space_detail.php?id=<?=$row['space_id'];?>">View Details</a></td>
			</tr>
                    
                    <?php
				}
				 
			 
			 ?>
             </table>
            
            
    <?php
	require_once('./lib/sections/footer.php');
?>  
</body>
</html>
