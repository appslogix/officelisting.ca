<?php
DEFINE('INCLUDE_CHECK',1);
require_once('../lib/connections/db.php');
include('../lib/functions/functions.php');

checkLogin('1');	

	$res = addBuilding($_POST['address'],$_POST['postal_code'],$_POST['description'],$_POST['image']);
			
			if($res == 4){
				die(msg(0,"An internal error has occured. Please contact the site admin!"));
			}
			if($res == 99){
				/* Redirect browser */
				header("Location: manage_buildings.php?message=Building Added.");
				/* Make sure that code below does not get executed when we redirect. */
				exit;
				die(msg(1,"Building has been added successfully!"));
			}

	function msg($status,$txt)
	{
		return '{"status":'.$status.',"txt":"'.$txt.'"}';
	}
	


?>
