<script>var __adobewebfontsappname__="dreamweaver"</script>
     <script src="http://use.edgefonts.net/arizonia:n4:default;cedarville-cursive:n4:default;cherry-cream-soda:n4:default;chewy:n4:default;chivo:n4:default;annie-use-your-telescope:n4:default.js" type="text/javascript"></script>
<style type="text/css">
     @import url("css/form.css");
     body,td,th {
    font-family: annie-use-your-telescope;
    color: #000000;
    font-style: normal;
    font-weight: 400;
}
body {
    margin-left: 400px;
    background-image: url(images/New%20folder/4.jpeg);
    background-repeat: no-repeat;
}
     </style>
<?php 

include 'config1.php';
session_start();
  if(isset($_POST['Submit']) && $_POST['username'] != '' && $_POST['password'] != '' ){
	  $name_admin = $_POST["username"];
	  $pass_admin = $_POST["password"];
	  $username = $_POST["username"];
	  $password = $_POST["password"];
	  $password = md5($password);
	  $pass_admin = md5($pass_admin);
	  if($name_admin== "hieu" and $pass_admin="24102000"){
		  $sql = "SELECT * FROM user WHERE username='$name_admin' AND password='$pass_admin' ";
	      $user= mysqli_query($conn,$sql);
		  if(mysqli_num_rows($user) >0){
		  echo'Xin chào Admin';
    ?>
    <h1> bấm vào đây để đi đến trang Quản lí </h1>
   <a href='admin/index.php'>Quản lí user</a>
  <a href='admin/qlsp/index.php'>Quản lí sản phẩm</a>
  <a href='admin/dangbaiviet/them-bai-viet.php'>Quản lí bài viết</a>
     <?php
	  }
	  }
   else{
	  $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' ";
	  $user= mysqli_query($conn,$sql);
	  if(mysqli_num_rows($user) >0){
		  $row = mysqli_fetch_assoc($user);
		  $_SESSION['user']=$row ;
		  header('location:index.php');
		  ?>
     
     <!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
     


   <br> </br>
   
		 <?php
	  }else{
		  echo 'Bạn đã nhập sai Mật khẩu hoặc Tài Khoản';
		  
		  ?>
    <h1> BẤM ĐỂ QUAY VỀ TRANG ĐĂNG NHẬP </h1>
     <a href="login.php"> Trang Đăng Nhập </a>
    <?php
	  }
	  }
  } 
else{
	  header("location:login.php");
	  }
?>
