<hr />
    <!-- footer -->
    <div id="footer">
      <div class="container">
         <div class="indent">
         <p></p>
            <div class="fleft">&copy; <?php echo date("Y"); ?> - <a href="index.php">OfficeListing.ca</a> All rights reserved.</div>
         </div>
      </div>
    </div>
   
	<script>
        var autocomplete = new google.maps.places.Autocomplete($("#address")[0], {});
    
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace();
            console.log(place.address_components);
        });
    </script>