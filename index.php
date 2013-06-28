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
	<h3>Welcome to OfficeListing.ca</h3>
    <p>List and find your ideal office space.</p>
    <hr/>
    <?php
    include('./lib/sections/featured_listings.php');
    ?>
    <?php
	require_once('./lib/sections/footer.php');
?>  
</body>
</html>
