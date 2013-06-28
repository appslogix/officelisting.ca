<?php
DEFINE('INCLUDE_CHECK',1);
require_once('../lib/connections/db.php');
include('../lib/functions/functions.php');

checkLogin('1');

$id=0;
if(isset($_GET['id'])){
	if(is_numeric($_GET['id'])){
		$id = strip_tags($_GET['id']);
		$id = secureInput($_GET['id']);
		}
	}

$action="";
if(isset($_GET['action'])){
	$action = strip_tags($_GET['action']);
	$action = secureInput($_GET['action']);
	}
	
	if($action == "suspend"){
		$res = suspendBuilding($id);
				
			if($res == 1){
				header("Location: manage_buildings.php?error=An error occured while attempting to suspend building. Please try again.");
			}
			if($res == 2){
				header("Location: manage_buildings.php?error=An error occured selecting building to suspend.");
			}
			if($res == 99){
				header("Location: manage_buildings.php?message=Building suspended.");
			}
	}
	
	if($action == "unsuspend"){
		$res = unsuspendBuilding($id);
				
			if($res == 1){
				header("Location: manage_buildings.php?error=An error occured while attempting to unsuspend building. Please try again.");
			}
			if($res == 2){
				header("Location: manage_buildings.php?error=An error occured selecting building to unsuspend.");
			}
			if($res == 99){
				header("Location: manage_buildings.php?message=Building unsuspended.");
			}
	}
	
	if($action == "delete"){
		$res = deleteBuilding($id);
				
			if($res == 1){
				header("Location: manage_buildings.php?error=An error occured while attempting to delete building. Please try again.");
			}
			if($res == 2){
				header("Location: manage_buildings.php?error=An error occured selecting building to delete.");
			}
			if($res == 99){
				header("Location: manage_buildings.php?message=Building deleted.");
			}
	}

?>
