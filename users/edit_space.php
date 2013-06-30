<?PHP
require_once('../lib/connections/db.php');
include('../lib/functions/functions.php');

checkLogin('2');
$getuser = getUserRecords($_SESSION['user_id']);
$user_id = $getuser[0]['id'];

if((isset($_GET['action'])) && ($_GET['action'] == 'update')){
				$space_id = $_POST["space_id"];
				$building_id = $_POST["building_id"];
				$suite_number = $_POST["suite_number"];
				$square_footage = $_POST["square_footage"];
				$lease_term = $_POST["lease_term"];
				$description = $_POST["description"];
				$first_name = $_POST["first_name"];
				$last_name = $_POST["last_name"];
				$email = $_POST["email"];
				$phone_number = $_POST["phone_number"];
				$monthly_rents = $_POST["monthly_rents"];
				
				$sql = "UPDATE spaces SET suite_number = '" . $suite_number . "', square_footage = '" . $square_footage . "', lease_term = '" . $lease_term . "', description = '" . $description . "', first_name = '" . $first_name . "', last_name = '" . $last_name . "', email = '" . $email . "', phone_number = '" . $phone_number . "', monthly_rents = '" . $monthly_rents . "' WHERE space_id = '" . $space_id . "'";	
				$res = mysql_query($sql);
				if ($res) {
				header("Location: manage_listings.php?message=Space updated successfully.");
				}
	
}


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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Edit Building.</title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index, follow" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
    <script src="./js/address_geocoder.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
	
			$('#editbuildingForm').submit(function(e) {
				getbuilding();
				e.preventDefault();	
			});	
		});
	</script>
</head>

<body>
	<?php include('../lib/sections/user_main_nav.php'); ?>
    
	<p>Edit Space</p>
	
    <div class="done"><p>Space updated successfully.</p><p><a href="manage_spaces.php">Click here</a> to continue managing spaces.</p></div><!--close done-->
	<div class="form">
    	
        
        
        <?php 
/*BEGIN STEP THREE*/

	 
?>

<form enctype="multipart/form-data" action="edit_space.php?action=update" method="post" accept-charset="utf-8"> 
	<fieldset>
			<legend>Step 3. Edit Office Space Space Details</legend>
      
               <input type="hidden" name="space_id" value="<?=$id;?>"/>     
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
			
            <div class="field">
           		<label for="suite_number"><strong>Suite Number</strong></label><br />   
            	<input id="suite_number" type="text" name="suite_number" value="<?=$suite_number?>" size="87">
            </div>
                    
              
                     
            <div class="field">
            	<label for="square_footage"><strong>Square Footage</strong></label><br />          
               <input id="square_footage" type="text" name="square_footage" value="<?=$square_footage?>">
            </div>
                    
            <div class="field">
            	<label for="lease_term"><strong>Lease Term</strong></label><br />          
                <input id="lease_term" type="text" name="lease_term" value="<?=$lease_term?>">
            </div>
                    
            <div class="field">
            	<label for="description"><strong>Description</strong></label><br />
                <textarea id="description" cols="75" rows="5" name="description" ><?=$description?></textarea> 
            </div>
                    
            <h3>Contact Information</h3>
                    
            <div class="field">
            	<label for="first_name"><strong>First Name</strong></label><br />          
                <input id="first_name" type="text" name="first_name" value="<?=$first_name?>">
            </div>
                    
            <div class="field">
            	<label for="last_name"><strong>Last Name</strong></label><br /> 
                <input id="last_name" type="text" name="last_name" value="<?=$last_name?>">
            </div>
                        			
            <div class="field">
            	<label for="email"><strong>Email Address</strong></label><br />          
                <input id="email" type="text" name="email" value="<?=$email?>">
            </div>
                    
            <div class="field">
            	<label for="phone_number"><strong>Phone Number</strong></label><br />          
                <input id="phone_number" type="text" name="phone_number" value="<?=$phone_number?>">
            </div>
                    
            <div class="field">
            	<label for="monthly_rents"><strong>Monthly Rents</strong></label><br />          
                <input id="monthly_rents" type="text" name="monthly_rents" value="<?=$monthly_rents?>">
            </div>
                    
                   
			
	
	<br clear="all" />
	
	<div class="field">
    <input type="button" class="back" value="Back" name="back"  onclick="self.location='add_space.php?step=2&address=<?=$address;?>'" /> 
    <input type="submit" name="step-3" value="Submit" class="button" /></div>
	
	
	</fieldset>

</form> 
<?php

/*END STEP THREE*/
?>

        
        
        
	</div><!--close form-->
<?php
	require_once('../lib/sections/footer.php');
?>   
</body>
</html>