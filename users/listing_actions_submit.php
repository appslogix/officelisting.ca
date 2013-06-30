<?php
DEFINE('INCLUDE_CHECK',1);
require_once('../lib/connections/db.php');
include('../lib/functions/functions.php');

checkLogin('2');
$getuser = getUserRecords($_SESSION['user_id']);
$user_id = $getuser[0]['id'];

$id=0;
if(isset($_GET['id'])){
	if(is_numeric($_GET['id'])){
		$space_id = strip_tags($_GET['id']);
		$space_id = secureInput($_GET['id']);
		}
	}

$action="";
if(isset($_GET['action'])){
	$action = strip_tags($_GET['action']);
	$action = secureInput($_GET['action']);
	}
	
	if($action == "delete"){
				
				$sql = "SELECT * FROM spaces WHERE space_id = '".$space_id."' AND user_id = '".$user_id."'";
				$res = mysql_query($sql);
				
				if ($res){
					$del = "DELETE FROM spaces WHERE space_id = '".$space_id."' AND user_id = '".$user_id."'"; 
					$result = mysql_query($del);
						if($result) {
							header("Location: manage_listings.php?message=Space has been deleted.");
						} else {
						header("Location: manage_listings.php?error=An error occured while attempting to delete space. please try again.");
						}
				}
				header("Location: manage_listings.php?error=An error occured selecting space to delete.");

	}

?>
