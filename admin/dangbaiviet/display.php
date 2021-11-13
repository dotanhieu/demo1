<?php require_once("includes/connection.php"); ?>
<?php include "includes/header.php" ?>
<?php
	$id = -1;
	if (isset($_GET["id"])) {
		$id = intval($_GET['id']);
	}
	$sql = "select * from posts where id = $id";
	$query = mysqli_query($conn,$sql);
?>
			<table  class= "table table-dark">
			<?php 
				while ( $data = mysqli_fetch_array($query) ) {
			?>
				<thead>
		      <tr>
			  
			  <td>Người viết : <?php echo $data['title']; ?> </td> 
		   </tr> 
			<tr>
			  <td>Ngày tạo : <?php echo $data['createdate']; ?>  </td> 
		   </tr>
					<tr>
			  <td>Nội dung : <?php echo $data['content']; ?>  </td> 
		   </tr>
					</thead>
				</ br>
			
                <p><img src="images/<?php echo $row['img']; ?>" style="max-width: 100px;"</p>
				
			<?php } ?>
			</table>
		</main>
	<?php include "includes/menu.php" ?>
<?php include "includes/footer1.php" ?>