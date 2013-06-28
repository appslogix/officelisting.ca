<?PHP
require_once('../lib/connections/db.php');
include('../lib/functions/functions.php');

checkLogin('1');

$id=0;
if(isset($_GET['id'])){
	if(is_numeric($_GET['id'])){
		$id = strip_tags($_GET['id']);
		}
	}
	
$getbuilding = getBuildingRecords($id);
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
	<?php include('../lib/sections/admin_main_nav.php'); ?>
    
	<p>Edit Building</p>
	
    <div class="done"><p>Building updated successfully.</p><p><a href="manage_users.php">Click here</a> to continue managing buildings.</p></div><!--close done-->
	<div class="form">
    	<form id="editbuildingForm" action="edit_building_submit.php" method="post">
      
			<fieldset>
      			<legend>Edit the building information. All fields are required.</legend>
      
	  			<input type="hidden" name="id" value="<?=$id;?>" />
                
                <div class="field">
                    <label for="address"><strong>Address</strong></label><br />
                    <input id="address" type="text" name="address" value="<? if(isset($getbuilding[0]['address'])){echo $getbuilding[0]['address'];}?>" size="87" placeholder="Enter a location" autocomplete="off" />
                </div>

                <div class="field">
                    <label for="postal_code"><strong>Postal Code:</strong></label><br />
                    <input type="text" name="postal_code" value="<? if(isset($getbuilding[0]['postal_code'])){echo $getbuilding[0]['postal_code'];}?>" size="10"/>
                </div>     
      
                <div class="field">
                    <label for="description"><strong>Description:</strong></label><br />
                    <textarea id="description" cols="63" rows="5" name="description"><? if(isset($getbuilding[0]['description'])){echo $getbuilding[0]['description'];}?></textarea>
                </div> 
                
                <div class="field">
                    <input type="submit" name="editbuilding" value="Update" />
                    <img id="loading" src="../images/loading.gif" alt="Updating.." />
                    <div id="error">&nbsp;</div>
                </div>
      
     	 	</fieldset>
	  </form>
	</div><!--close form-->
<?php
	require_once('../lib/sections/footer.php');
?>   
</body>
</html>