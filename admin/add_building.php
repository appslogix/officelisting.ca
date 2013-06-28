<?PHP
require_once('../lib/connections/db.php');
include('../lib/functions/functions.php');

checkLogin('1');

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Add Building</title>
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
	
			$('#addbuildingForm').submit(function(e) {
				addbuilding();
				e.preventDefault();	
			});	
		});
	</script>
    </head>
    <?php include('../lib/sections/admin_head.php'); ?>


<body> 
    <?php include('../lib/sections/admin_main_nav.php'); ?>
    
    
	<p style="font-weight:bold;">Add Building</p>
    
	<div class="done"><p>Building added successfully.</p><p><a href="manage_buildings.php">Click here</a> to continue managing buildings.</p></div><!--close done-->
    
	<div class="form">
    
   	<form id="addbuildingForm" action="add_building_submit.php" method="post" >
        <fieldset>
                
                <legend>Fill out the form to add a building. All fields are required.</legend>
                
                <div class="field">
                    <label for="address"><strong>Address</strong></label><br />
                    <input id="address" type="text" name="address" placeholder="Enter a location" autocomplete="off" size="87">
                </div>
            
                <div class="field">
                    <label for="price"><strong>Postal Code</strong></label><br />
                    <input id="postal_code" type="text" name="postal_code" size="10">
                </div>
                
                <div class="field">
                    <label for="description"><strong>Description</strong></label><br />
                    <textarea id="description" cols="63" rows="5" name="description"></textarea>
                </div>
    
                <div class="field">
                    <label for="image"><strong>Image</strong></label><br />
                    <input type="file" name="image">
                </div>
        
                <br clear="all" />
        
                <div class="field">
                    <input type="submit" value="Update"  name="updatebuilding" />
                    <img id="loading" src="../images/loading.gif" alt="Updating.." />
                </div>
    
        </fieldset>
	</form> 
 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

	</div><!--close form-->

<?php
	require_once('../lib/sections/footer.php');
?>  
</body>
</html>