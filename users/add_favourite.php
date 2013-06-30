<?PHP

require_once('../lib/connections/db.php');
include('../lib/functions/functions.php');

checkLogin('2');

if(isset($_GET['space_id'])) {
	
	$getuser = getUserRecords($_SESSION['user_id']);
	$user_id = $getuser[0]['id'];
	$space_id = $_GET['space_id'];
	
	$sql = "INSERT INTO favourites (user_id, space_id) VALUES ('$user_id','$space_id')";
	$res = mysql_query($sql);
	
	if ($res) {
		header ('Location: index.php?message=Space has been added to your favourites');
	}
	
}



?>
