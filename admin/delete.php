<?php

		include "config.php";
		$sql = "delete from user where id = '$_GET[id]'";
		mysqli_query($con,$sql);
		header('location:index.php?quanly=category');

?>