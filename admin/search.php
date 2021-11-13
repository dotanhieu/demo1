<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<div class="infor">
	<div class="search" style="padding-left: 100px; margin-top: 20px;">

		<?php
					include("config.php");
					if(isset($_POST["search"]))
					{
						$name_search = $_POST['nhap'];
						$sql = "select * from user where username = '$name_search'";
						mysqli_query($con,$sql);
					}else
					{
						$sql = "select * from user";
					}
					$result = mysqli_query($con,$sql);

		?>
		<form action="" method="POST" enctype="multipart/form-data">
		<tr>
			<td ><input type="text" name="nhap" size="100">
				<input type="submit" name="search" value="Tìm kiếm">
			</td>
		</tr>
	</form>
	</div>
				<table class="table" width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;" >
					<tr><th width="50px;">ID</th>
						<th width="50px;">Username</th>
						<th width="50px;">Password</th>
						<th width="200px;">Họ Tên</th>
						<th width="200px;">Email</th>
						<th width="100px;"><a href="index.php?quanly=add">Thêm</a></th>
					</tr>
			<?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['id']; ?> </td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['password']; ?></td>
						<td><?php echo $row['hoten']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><a href="index.php?quanly=edit&id=<?php echo $row['id']; ?>">Sửa</a>
							<a onclick="return window.confirm('Bạn muốn xóa không');" href="index.php?quanly=delete&id=<?php echo $row['id']; ?>">Xóa</a>
						</td>
					</tr>
			 <?php } ?>
					
				</table>
			</div>