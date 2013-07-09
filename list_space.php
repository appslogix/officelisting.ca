<?PHP
require_once('./lib/connections/db.php');
include('./lib/functions/functions.php');

//checkLogin('2');

if (isset($_POST['step-3'])) {
	// Make the extra variable associations:
		$building_id = $_POST['building_id'];
		$suite_number = $_POST['suite_number'];
		$square_footage = $_POST['square_footage'];
		$lease_term = $_POST['lease_term'];
		$description = $_POST['description'];
		$first_name = strip_tags($_POST['first_name']);
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
		$monthly_rents = $_POST['monthly_rents'];
		
		// Write query to add space to database
		$sql = "INSERT INTO spaces (building_id, suite_number, square_footage, lease_term, description, first_name, last_name, email, phone_number, monthly_rents) VALUES ('".$building_id."', '".$suite_number."', '".$square_footage."', '".$lease_term."', '".$description."', '".$first_name."', '".$last_name."', '".$email."', '".$phone_number."', '".$monthly_rents."')";
		// run add space query
		$res = mysql_query($sql);
		
		if ($res){ // If it ran OK.
			/* Redirect browser */
				header("Location: find_space.php?message=Space added succesfully.");
				/* Make sure that code below does not get executed when we redirect. */
				exit;
		}
}

?>



<?php 
	include('./lib/sections/public_header.php');
?>


<?php
	 if (!isset($_GET['step']) || ($_GET['step'] == 1)) {
?>
    <script>
      $(function(){
        $("#geocomplete").geocomplete({
          map: ".map_canvas",
          details: "form",
          types: ["geocode", "establishment"],
        });

        $("#find").click(function(){
          $("#geocomplete").trigger("geocode");
        });
      });
    </script>
<?php
	 }
?>

<?php
	if (isset($_GET['step']) && (($_GET['step'] == 2)) ) {
?>
    <script>
      $(function(){
      	$("#geocomplete").geocomplete({
          map: ".map_canvas",
		  
        });
        
        $("#geocomplete").geocomplete("find", "<?=$_POST['address'];?>");
        
        $("#center").click(function(){
          var map = $("#geocomplete").geocomplete("map"),
            center = new google.maps.LatLng(10, 0);
          
          map.setCenter(center);
          map.setZoom(3);
        });
      });
    </script>
<?php
	 }
?>

<?php
	if (isset($_GET['step']) && (($_GET['step'] == 3)) ) {
?>
    <script>
      $(function(){
      	$("#geocomplete").geocomplete({
          map: ".map_canvas",
		  
        });
        
        $("#geocomplete").geocomplete("find", "<?=$_POST['address'];?>");
        
        $("#center").click(function(){
          var map = $("#geocomplete").geocomplete("map"),
            center = new google.maps.LatLng(10, 0);
          
          map.setCenter(center);
          map.setZoom(3);
        });
      });
    </script>
<?php
	 }
?>
    

<div class="container">
	<h3>List Space</h3>
    
    
    
 
    	
	
    
    
    <?php 
        /*BEGIN STEP ONE*/
            if (!isset($_GET['step']) || ($_GET['step'] == 1)) {
        ?>
        
         
       	<form id="addbuildingForm" action="list_space.php?step=2$" method="post" accept-charset="utf-8" >
    
        
            <fieldset>
            
            <legend>Step 1. Find location of building</legend>
            
            
                
                    <input id="geocomplete" class="span5" type="text" name="address" placeholder="Type in the address" autocomplete="off" size="80" value="<?php if (isset($_POST['address'])) { print $_POST['address']; }?>"> <input type="submit" value="Submit"  name="findbuilding" />
                
            
                 <div class="map_canvas"></div>
                    
                
            
          
            
            
       		</fieldset>
    
    	</form> 
    	
        
        <?php
         }
        /*END STEP ONE*/
        ?>
        
        <?php 
		/*BEGIN STEP TWO*/
		
		 if (isset($_GET['step']) && ($_GET['step'] == 2)) {
			 
	 			if (isset($_POST['address'])) { // If everything's OK.
					$address = strip_tags($_POST['address']);
		
					$sql = "SELECT * FROM buildings WHERE address LIKE '". $address . "' LIMIT 1"; 
					$res = mysql_query($sql);
					
					while ($row = mysql_fetch_array($res)) {
						$id = $row["id"];
						$address = $row["address"];
						$postal_code = $row["postal_code"];
						$description = $row["description"];
					}
		
	 			}
			 	if (!isset($id)) {
					 echo ' The address was not found';
			 	} else {
		?>
		<form enctype="multipart/form-data" action="list_space.php?step=3&building_id=<?=$id;?>" method="post" accept-charset="utf-8">
			<fieldset>
					<legend>Step 2. Confirm Address</legend>
					                        <div class="field">
                            <label for="address"><strong>Address</strong></label><br />          
                            <input id="geocomplete" type="text" name="address" value="<?=$address;?>" size="80" placeholder="Type in an address" readonly />
                        </div>
                        
					 <div class="map_canvas"></div>
                     

                        
                        
                        <div class="field">
                            <label for="description"><strong>Description</strong></label><br /> 
                            
                            <textarea id="description" cols="63" rows="5" name="description"><?=$description;?></textarea>
                            
                        </div>
							
		
				<br clear="all" />
			
			<div class="field">
			<input type="button" class="back" value="Back" name="back"  onclick="self.location='list_space.php?step=1&address=<?=$address;?>'" /> 
			<input type="submit" name="step-2" value="Continue" class="button" /></div>
			
			
			</fieldset>
		
		</form> 
		<?php
			 }
		
		 }
		/*END STEP TWO*/
		?>
        
        
        
        
        <?php 
/*BEGIN STEP THREE*/
 if (isset($_GET['step']) && ($_GET['step'] == 3)) {
	 
	 	if (isset($_GET['building_id'])) { // If everything's OK.
			$building_id = strip_tags($_GET['building_id']);
			$sql = "SELECT * FROM buildings WHERE id = '$building_id' LIMIT 1";
			$res = mysql_query($sql);
			while ($row = mysql_fetch_array($res)) {
				$id = $row['id'];
				$address = $row['address'];
				$postal_code = $row['postal_code'];
				$description = $row['description'];
				$image = $row['image'];
			}
	 	}
	 
?>

<form enctype="multipart/form-data" action="list_space.php?step=3&building_id=<?=$id;?>" method="post" accept-charset="utf-8"> 
	<fieldset>
			<legend>Step 3. Enter Office Space Details</legend>
      <input id="geocomplete" type="hidden" name="address" value="<?=$address;?>" size="80" placeholder="Type in an address"  />
      <div class="map_canvas"></div>
      
               <input type="hidden" name="building_id" value="<?=$id;?>"/>     
            
            <div class="field"><strong>Address</strong><br />          
                    <span><?=$address;?></span>
                    </div>
             <br /> 
             <div class="field"><strong>Postal Code</strong><br />          
                    <span><?=$postal_code;?></span>
                    </div>
                    			
              <br />       
             <div class="field"><strong>Description</strong><br />          
                    <span><?=$description;?></span>
                    </div>
             <br />        
            
            
            <h3>Office Space Information</h3>
			
            <div class="field">
           		<label for="suite_number"><strong>Suite Number</strong></label><br />   
            	<input id="suite_number" type="text" name="suite_number">
            </div>
                    
              
                     
            <div class="field">
            	<label for="square_footage"><strong>Square Footage</strong></label><br />          
               <input id="square_footage" type="text" name="square_footage">
            </div>
                    
            <div class="field">
            	<label for="lease_term"><strong>Lease Term</strong></label><br />          
                <input id="lease_term" type="text" name="lease_term">
            </div>
            
                        <div class="field">
            	<label for="monthly_rents"><strong>Monthly Rents</strong></label><br />          
                <input id="monthly_rents" type="text" name="monthly_rents">
            </div>
                    
            <div class="field">
            	<label for="description"><strong>Description</strong></label><br />
                <textarea id="description" cols="75" rows="5" name="description"></textarea> 
            </div>
                    
            <h3>Contact Details</h3>
                    
            <div class="field">
            	<label for="first_name"><strong>First Name</strong></label><br />          
                <input id="first_name" type="text" name="first_name">
            </div>
                    
            <div class="field">
            	<label for="last_name"><strong>Last Name</strong></label><br /> 
                <input id="last_name" type="text" name="last_name">
            </div>
                        			
            <div class="field">
            	<label for="email"><strong>Email Address</strong></label><br />          
                <input id="email" type="text" name="email">
            </div>
                    
            <div class="field">
            	<label for="phone_number"><strong>Phone Number</strong></label><br />          
                <input id="phone_number" type="text" name="phone_number">
            </div>
                    	
	
	<br clear="all" />
	
	<div class="field">
    <input type="button" class="back" value="Back" name="back"  onclick="self.location='list_space.php?step=2&address=<?=$address;?>'" /> 
    <input type="submit" name="step-3" value="Submit" class="button" /></div>
	
	
	</fieldset>

</form> 
<?php
 }
/*END STEP THREE*/
?>
    
    
    
    
    
    
    </div>
    
    
</div>    
<?php
	require_once('./lib/sections/footer.php');
?>  
</body>
</html>
