<h2>Featured Offices</h2>

<?php

require_once('./lib/connections/db.php');

?>

<?php
// Make the query:
$sql = 'SELECT * FROM spaces INNER JOIN buildings ON spaces.building_id = buildings.id ORDER BY space_id ASC';

$res = mysql_query ($sql);
while ($row = mysql_fetch_array($res)) {

?>
<div>
<p><img src="images/spaces/<?=$row['image']?>" width="150"/><br />
<?php
	$address = $row['address'];
?>
<span><?=$address?></span><br />
<span>Suite: <?=$row['suite_number']?></span><br />
<span>Square Footage: <?=$row['square_footage']?></span><br />
<span>Monthly Rents: <?=$row['monthly_rents']?></span><br />
<a href="space_detail.php?id=<?=$row['space_id']?>">View Details</a>
</p>

</div>

<?php
}
?>