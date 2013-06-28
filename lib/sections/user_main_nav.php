<div align="right">
    	<a href="index.php">Home</a> | 
		<? if (!empty($getuser[0]['thumb_path'])){echo "<a href='manage_photo.php'>Manage My Photo</a> | ";} else {echo "<a href='upload_photo.php'>Upload Photo</a> | ";} ?>
        <a href="find_space.php">Find Space</a> |
        
        <a href="#">Manage My Favourites</a> |
        <a href="list_space.php">List Space</a> |
        
        <a href="#">Manage My Listings</a> |
        <a href="change_pass.php">Change Password</a> | 
        <a href="edit_profile.php">Edit Profile</a> | 
        <a href="log_off.php?action=logoff">Sign Out</a>
    </div>
    <hr />