<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<?php
			include "config.php";
				$sql = "select * from tbl_sv where id = '$_GET[id]' ";
					$result = mysqli_query($con,$sql);
					$row = mysqli_fetch_array($result);


			if(isset($_POST["process"]))
			{
				$masanpham = mysqli_escape_string($con,$_POST["masanpham"]);
				$tensp = mysqli_escape_string($con,$_POST["tensp"]);
				$ngaynhap = mysqli_escape_string($con,$_POST["ngaynhap"]);
				$slnhap = mysqli_escape_string($con,$_POST["slnhap"]);
				$slcon = mysqli_escape_string($con,$_POST["slcon"]);
				$anh = $_FILES['c_img']['name'];

				if($anh != null)
				{


				$path = "images/";
				$tmp_name = $_FILES['c_img']['tmp_name'];
				$anh = $_FILES['c_img']['name'];

				move_uploaded_file($tmp_name,$path.$anh);
					$sql = "update tbl_sv set img = '$anh' where id ='$_GET[id]'";
					mysqli_query($con,$sql);
					header('location:index.php');
				}

					$sql = "update tbl_sv set masanpham= '$masanpham', tensp = '$tensp'  , ngaynhap = '$ngaynhap', slcon = '$slcon' , slnhap = '$slnhap' where id = '$_GET[id]' ";
					mysqli_query($con,$sql);
					header('location:index.php?quanly=category');
			}

?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Thêm nội dung</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table class= "table" width="500"  border="1" style="margin: auto;">
			<tr>
				<td>Mã sản phẩm</td>
				<td><input type="text" name="masanpham" value="<?php echo $row['masanpham']; ?>" ></td>
			</tr>
			<tr>
				<td>Tên sản phẩm</td>
				<td><input type="text" name="tensp" value="<?php echo $row['tensp']; ?>" ></td>
			</tr>
			<tr>
				<td>ảnh</td>
				<td><input type="file" name="c_img"></td>
				<td><img src="upload/<?php echo $row['img']; ?>" style="max-width: 100px;"></td>
				
			</tr>
			
			<tr>
				<td>Ngày nhập</td>
				<td><input type="date" name="ngaynhap" value="<?php echo $row['ngaynhap']; ?>" ></td>
			</tr>
			<tr>
				<td>Số lượng nhập</td>
				<td><input type="text" name="slnhap"  value="<?php echo $row['slnhap']; ?>"></td>
			</tr>
			<tr>
				<td>Số lượng còn</td>
				<td><input type="text" name="slcon" value="<?php echo $row['slcon']; ?>" ></td>
			</tr>

				<tr>
				<td></td>
				<td><input type="submit" name="process" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>