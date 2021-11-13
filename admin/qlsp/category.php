<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<?php
		include "config.php";
	 	$sql = "select * from tbl_sv ";
	 	$result = mysqli_query($con,$sql);

?>

<div class="infor">

				<table class= "table"  width="900" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;" >
					<tr>
						<th width="50px;">Mã sản phẩm</th>
						<th width="50px;">Tên sản phẩm</th>
						<th width="200px;">Ảnh</th>
						<th width="200px;">Ngày nhập</th>
						<th width="100px;">Số lượng nhập</th>
						<th width="200px;">Số lượng còn</th>
						<th width="100px;"><a href="index.php?quanly=add">Thêm</a></th>
					</tr>
			<?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
					<tr>
						<td><?php echo $row['masanpham']; ?> </td>
						<td><?php echo $row['tensp']; ?></td>
						<td><img src="images/<?php echo $row['img']; ?>" style="max-width: 100px;"</td>
						<td><?php echo $row['ngaynhap']; ?></td>
						<td><?php echo $row['slnhap']; ?></td>
						<td><?php echo $row['slcon']; ?></td>
						<td><a href="index.php?quanly=edit&id=<?php echo $row['id']; ?>">Sửa</a>
							<a onclick="return window.confirm('Bạn muốn xóa không');" href="index.php?quanly=delete&id=<?php echo $row['id']; ?>">Xóa</a>
						</td>
					</tr>
			 <?php } ?>
					
				</table>
			</div>