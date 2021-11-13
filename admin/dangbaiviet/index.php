<?php require_once("includes/connection.php"); ?>
<?php include "includes/header.php" ?>
<?php

	$sql = "select * from posts ";
	$query = mysqli_query($conn,$sql);
?>
			<div class="innertube">
				<table width="100%" border="1">
					<tr>
					<?php
						$i = 0;
						while ( $data = mysqli_fetch_array($query) ) {
							if ($i == 4) {
								echo "</tr>";
								$i = 0;
							}
					?>
						<td >
							<b><?php echo $data["title"];// In ra title bài viết ?></b>
							<p><?php echo substr($data["content"], 0, 100)." ...";?></p>
							<a href="display.php?id=<?php echo $data["id"];?>"> Xem thêm</a>
						</td>
					
					<?php
							$i++;
						}
					?>
				</table>	
			</div>
		</main>
		
		
<?php include "includes/footer.php" ?>