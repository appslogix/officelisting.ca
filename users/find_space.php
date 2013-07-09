

		<?php 
		$page_title = 'Find Space';
		include('../lib/sections/user_header.php');
		?>
     <div class="container">
	<h3>Find Space</h3>
    
    
    
    <div>
    
    <form id="findspaceForm" action="find_space_result.php" method="post" accept-charset="utf-8" >
    
        
            <fieldset><legend>Select the options below to search for your ideal office.</legend>
                
             <div class="row">
             		<div class="span3">
                        <label for="square_footage"><strong>Square Footage</strong></label>
                        <select id="square_footage" class="span3" name="square_footage" >
                            <option value="0" selected="selected">Less than 500 Sq-Ft</option>
                            <option value="501">501 to 999 Sq-Ft</option>
                            <option value="1000">1,000 to 1,999 Sq-Ft</option>
                            <option value="2000">2,000 to 3,499 Sq-Ft</option>
                            <option value="3500">Over 3,500 Sq-Ft</option>
                        
                        </select>
                    </div>
               
                
                  	<div class="span3">
                        <label for="monthly_price"><strong>Monthly Price</strong></label>
                        <select id="monthly_price" class="span3" name="monthly_price" >
                            <option value="0" selected="selected">Less than $1,999</option>
                            <option value="2000">$2,000 to $4,999</option>
                            <option value="5000">$5,000 to $9,999</option>
                            <option value="10000">More than $10,000</option>
                        </select>
                    </div>
            </div>
                    
            	<br clear="all" />
            
                <div class="field">
                    <input type="submit" value="Find"  name="findbuilding" />
                    <img id="loading" src="../images/loading.gif" alt="Updating.." />
                </div>
            
            
            </fieldset>
    
    	</form> 
    </div>
</div>    
    <?php
	require_once('../lib/sections/user_footer.php');
?>  
</body>
</html>
