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
	<h3>Find Space</h3>
    
    
    
    <div>
    
    <form id="findspaceForm" action="find_space_result.php" method="post" accept-charset="utf-8" >
    
        
            <fieldset><legend>Select the options below to search for your ideal office.</legend>
                
                <div class="field">
                    <label for="square_footage"><strong>Square Footage</strong></label><br>
                    <select id="square_footage" class="" name="square_footage" >
                        <option value="0" selected="selected">Less than 500 Sq-Ft</option>
                        <option value="501">501 to 999 Sq-Ft</option>
                        <option value="1000">1,000 to 1,999 Sq-Ft</option>
                        <option value="2000">2,000 to 3,499 Sq-Ft</option>
                        <option value="3500">Over 3,500 Sq-Ft</option>
                    
                    </select>
                    
                </div>
                
                  <div class="field">
                    <label for="monthly_price"><strong>Monthly Price</strong></label><br>
                    <select id="monthly_price" class="" name="monthly_price" >
                        <option value="0" selected="selected">Less than $1,999</option>
                        <option value="2000">$2,000 to $4,999</option>
                        <option value="5000">$5,000 to $9,999</option>
                        <option value="10000">More than $10,000</option>
                    
                    </select>
                    
                </div>
                    
            	<br clear="all" />
            
                <div class="field">
                    <input type="submit" value="Find"  name="findbuilding" />
                    <img id="loading" src="../images/loading.gif" alt="Updating.." />
                </div>
            
            
            </fieldset>
    
    	</form> 
    </div>
    
    
    
    <?php
	require_once('./lib/sections/footer.php');
?>  
</body>
</html>
