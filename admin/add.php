<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


<?php
			include "config.php";
			
			if(isset($_POST["process"]))
			{
				$username = mysqli_escape_string($con,$_POST["username"]);
				$password = mysqli_escape_string($con,$_POST["password"]);
				$hoten = mysqli_escape_string($con,$_POST["hoten"]);
				$email = mysqli_escape_string($con,$_POST["email"]);
				


				move_uploaded_file($tmp_name,$path.$anh);
					$sql = "insert into user(username,password,hoten,email) values('$username','$password','$hoten','$email')";
					mysqli_query($con,$sql);
					header('location:index.php?quanly=category');
				}
			

?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Thêm Tài Khoản</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table class="table" width="500"  border="1" style="margin: auto;">
			
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" ></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" ></td>
			</tr>
			<tr>
				<td>Họ tên</td>
				<td><input type="text" name="hoten" ></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" ></td>
			</tr>
			

				<tr>
				<td></td>
				<td><input type="submit" name="process" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>