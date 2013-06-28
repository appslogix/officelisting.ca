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
		$res = suspendSpace($id);
				
			if($res == 1){
				header("Location: manage_spaces.php?error=An error occured while attempting to suspend space. Please try again.");
			}
			if($res == 2){
				header("Location: manage_spaces.php?error=An error occured selecting space to suspend.");
			}
			if($res == 99){
				header("Location: manage_spaces.php?message=Space suspended.");
			}
	}
	
	if($action == "unsuspend"){
		$res = unsuspendSpace($id);
				
			if($res == 1){
				header("Location: manage_spaces.php?error=An error occured while attempting to unsuspend space. Please try again.");
			}
			if($res == 2){
				header("Location: manage_spaces.php?error=An error occured selecting space to unsuspend.");
			}
			if($res == 99){
				header("Location: manage_spaces.php?message=Space unsuspended.");
			}
	}
	
	if($action == "delete"){
		$res = deleteSpace($id);
				
			if($res == 1){
				header("Location: manage_spaces.php?error=An error occured while attempting to delete space. Please try again.");
			}
			if($res == 2){
				header("Location: manage_spaces.php?error=An error occured selecting space to delete.");
			}
			if($res == 99){
				header("Location: manage_spaces.php?message=Space deleted.");
			}
	}

?>
