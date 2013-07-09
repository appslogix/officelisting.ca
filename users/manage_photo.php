<?php 
	$page_title = 'Manage Photo';
		include('../lib/sections/user_header.php');
		?>
 <div class="container">       
	<p><?php if(empty($getuser[0]['first_name']) || empty($getuser[0]['last_name'])){echo $getuser[0]['username'];} else {echo $getuser[0]['first_name']." ".$getuser[0]['last_name'];} ?>, manage your photo.</p>
		<?php 
			if ( isset( $error ) ) { echo '<p align="center"><span style="color:#f40000; font-weight:bold;">' . $error . '</span></p>';}
			if ( isset( $message ) ) { echo '<p align="center"><span style="color:#008c00; font-weight:bold;">' . $message . '</span></p>';}
		?>
			<?
			$query="SELECT id,thumb_path FROM users WHERE id='".$uid."'";
			$result=mysql_query($query) or die(mysql_error());
				echo "<table width = '200' border = '0' cellspacing = '5' cellpadding = '3'>";
					echo "<tr>";
						while($row=mysql_fetch_array($result)){
							if (!empty($row['thumb_path'])){
								echo "<td align='center'><img src='".$row['thumb_path']."' width='150' height='100' hspace='3' alt='' /><p>";
									echo "<a href='update_photo.php?id=".$row['id']."'>Change Photo</a> | ";
									echo "<a href='process_photo.php?id=".$row['id']."&action=delete'>Delete Photo</a></p>";
								echo "</td>";
								} else {echo"<td><img src='pics/no_image.png' width='150' height='150' /></td>";}
							}	 
					echo "</tr>"; 
				echo "</table>";
			?>
</div>
                        <?php
	require_once('../lib/sections/user_footer.php');
?>
</body>
</html>