<?php 
// Opens a connection to a mySQL server 
require_once('../connections/db.php');

	 
// Get parameters from URL
	// $center_lat = $_GET["lat"];
	// $center_lng = $_GET["lng"];
	// $radius = $_GET["radius"];

// Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);


// Select the rows in the building and space table

if (isset($_GET['square_footage']) && ($_GET['square_footage'] != '')) {
	// Collect values into variables from form
		$square_footage = $_GET['square_footage'];
		$monthly_price = $_GET['monthly_price'];
		// Set ranges for Square footage
		if ($square_footage == 0) {
			$min_sq_ft = 0;
			$max_sq_ft = 500;
		}		
		if ($square_footage == 501) {
			$min_sq_ft = 501;
			$max_sq_ft = 999;
		}		
		if ($square_footage == 1000) {
			$min_sq_ft = 1000;
			$max_sq_ft = 1999;
		}		
		if ($square_footage == 2000) {
			$min_sq_ft = 2000;
			$max_sq_ft = 3499;
		}	
		if ($square_footage == 3500) {
			$min_sq_ft = 3500;
			$max_sq_ft = 100000;
		}	
		// Set ranges for price
		if ($monthly_price == 0) {
			$min_price = 0;
			$max_price = 1999.00;
		}	
		if ($monthly_price == 2000) {
			$min_price = 2000.00;
			$max_price = 4999.00;
		}		
		if ($monthly_price == 5000) {
			$min_price = 5000.00;
			$max_price = 9999.00;
		}		
		if ($monthly_price == 10000) {
			$min_price = 10000.00;
			$max_price = 100000.00;
		}
		$query = "SELECT * FROM spaces INNER JOIN buildings on spaces.building_id = buildings.id WHERE 
		(square_footage >= $min_sq_ft) AND
		(square_footage <= $max_sq_ft) AND
		(monthly_rents >= $min_price) AND
		(monthly_rents <= $max_price)
		";
} else if (isset($_GET['building_id']) && ($_GET['building_id'] != '')) {
	$building_id = $_GET['building_id'];
	$query = "SELECT * FROM buildings WHERE id = $building_id";	  
} else {
	$query = "SELECT * FROM buildings";
}



$result = mysql_query($query);

if (!$result) {
  die("Invalid query: " . mysql_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $html = '<div><p>';
  $html .= '<a href="building_detail.php?id='.$row['id'].'"><img src="../users/uploads/buildings/'.$row['image'].'" width="100px" align="left"   style="margin: 0 10px 0 0;" /></a>';
  $html .= '<span>'.$row['address'].'<br />'.$row['lat'].'<br />'.$row['lng'].'</span>';
  $html .= '</p></div>';
  $newnode->setAttribute("name", $html);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
}

echo $dom->saveXML();
?>
