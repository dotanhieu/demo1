<?php
	session_start(); 
	include "includes/header.php";
 ?>
<?php require_once("includes/connection.php"); ?>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$title = $_POST["title"];
		$content = $_POST["content"];
		$img = $_POST["img"];
		$is_public = 0;
		if (isset($_POST["is_public"])) {
			$is_public = $_POST["is_public"];
		}
		$sql = "INSERT INTO posts(title,img, content,  is_public, createdate, updatedate ) VALUES ( '$title','$img', '$content', '$is_public', now(), now())";
		// thực thi câu $sql với biến conn lấy từ file connection.php
		mysqli_query($conn,$sql);
		echo "Bài viết đã thêm thành công";
	}

?>

	<form action="them-bai-viet.php" method="post">
		<table>
			<tr>
				<td colspan="2"><h3>Thêm bài viết mới</h3></td>
			</tr>	
			<tr>
				<td nowrap="nowrap">Tiêu đề bài viết :</td>
				<td><input type="text" id="title" name="title"></td>
			</tr>
			<tr>
				<td>ảnh</td>
				<td><input type="file" name="img" ></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Nội dung :</td>
				<td><textarea name="content" id="content" rows="10" cols="150"></textarea></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Thêm bài viết"></td>
			</tr>
			<ul>
				
					<li><a href="index.php">Trang tin tức</a></li>
				</ul>
			</div>

		</table>
		
	</form>
<?php include "includes/footer.php" ?>