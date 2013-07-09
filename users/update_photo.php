<?php 
	$page_title = 'Update Photo';
	include('../lib/sections/user_header.php');
?>
 <div class="container">   
	<p><?php if(empty($getuser[0]['first_name']) || empty($getuser[0]['last_name'])){echo $getuser[0]['username'];} else {echo $getuser[0]['first_name']." ".$getuser[0]['last_name'];} ?>, update your photo.</p>
		<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ECECFB">
		<form name="updatephoto" method="post" enctype="multipart/form-data" action="process_photo.php">
			<tr>
				<td colspan="2">
				<?php 
					if ( isset( $error ) ) { echo '<p align="center"><span style="color:#f40000; font-weight:bold;">' . $error . '</span></p>';}
					if ( isset( $message ) ) { echo '<p align="center"><span style="color:#008c00; font-weight:bold;">' . $message . '</span></p>';}
				?>
				</td>
			</tr>			
			<input type="hidden" name="updatephoto" value="1" />
			<input type="hidden" name="id" value="<?= $getuser[0]['id'];?>" />
			<tr>
				<td><label for="image">Upload photo:</label></td>
				<td><input type="file" name="picture"  id="file" size="30" value="" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
				<input type="hidden" name="max" value="300000" />
				<input type="submit" name="submit" value="Upload Photo"/>
				</td>
			</tr>
		</form>
		</table>
</div>
	<?php
		include('../lib/sections/user_footer.php');
	?>
</body>
</html>