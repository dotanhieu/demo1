<?php
		$hostname = "localhost";
		$user = "root";
		$pass = "24102000";
		$db = "webdt";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>