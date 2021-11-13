<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!--start slider -->
    <link rel="stylesheet" href="css/fwslider.css" media="all">
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/css3-mediaqueries.js"></script>
    <script src="js/fwslider.js"></script>
<!--end slider -->
<script src="js/jquery.easydropdown.js"></script>
</head>
<body>
     <div class="header-top">
	   <div class="wrap"> 
			  <div class="header-top-left">
			  	   <div class="box">
   				      <select tabindex="4" class="dropdown">
							<option value="" class="label" value="">Ngôn Ngữ :</option>
							<option value="1">Vietnamese</option>
							<option value="2">English</option>
							<option value="3">German</option>
					  </select>
   				    </div>
   				    <div class="box1">
   				        <select tabindex="4" class="dropdown">
							<option value="" class="label" value="">Thanh Toán :</option>
							<option value="1">$ Vietnamdong</option>
						</select>
   				    </div>
   				    <div class="clear"></div>
   			 </div>
			 <div class="cssmenu">
				<ul>
					<li class="active"><a href="index.php">Welcome</a></li> |
					<li><a href="checkout.php">Wishlist</a></li> |
					<li><a href="checkout.php">Giỏ Hàng</a></li> |
					<?php if(isset($_SESSION['user'])): ?>
					<li> <a href="profile.php"> <?php echo $_SESSION['user']['username']; ?></a></li> |
					<li> <a href="logout.php"> Logout</a></li> |
					<?php else: ?>
					<li><a href="login.php">Đăng nhập</a></li> |
					<li><a href="register.php">Đăng kí</a></li>
					<?php endif ?>
					
					
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	</div>
	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.php"><img src="images/logo.jpg" alt=""/></a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
			<li class="active grid"><a href="index.php">Trang Chủ</a></li>
			<li><a class="color4" href="#">Tin Tức</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Máy tính</h4>
								<ul><li><a href="womens.html">Dell</a></li>
									<li><a href="womens.html">ASUS</a></li>
									<li><a href="womens.html">HP</a></li>
									<li><a href="womens.html">ROG</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Phụ Kiện</h4>
								<ul>
									<li><a href="mens.html">Chuột </a></li>
									<li><a href="banphim.html">Bàn Phím</a></li>
									<li><a href="mienglatchuot.html">Miếng lát chuột </a></li>
									<li><a href="taiphone.html">Tai Phone</a></li>
								</ul>
								</div>							
						</div>
										
				<li><a class="color5" href="#">Loại Sản Phẩm</a>
				<div class="megapanel">
					<div class="col1">
							<div class="h_nav">
								<ul>
									<li><a href="mens.html">Chuột </a></li>
									<li><a href="banphim.html">Bàn Phím</a></li>
									<li><a href="mienglatchuot.html">Miếng lát chuột </a></li>
									<li><a href="taiphone.html">Tai Phone</a></li>
								</ul>	
							</div>							
						</div>
						
					</div>
				</li>
				<li><a class="color6" href="other.html">Phụ Kiện</a></li>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">	  
				<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		 </div>
	  <div class="tag-list">
	    <ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c1" href="#"> </a>
				<ul class="sub-icon1 list">
					<li><h3>Gửi lời yêu thương
						</h3><a href=""></a></li>
					<li><p></a></p></li>
					
				</ul>
			</li>
		</ul>
		<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c2" href="#"> </a>
				<ul class="sub-icon1 list">
					<li><h3></h3><a href=""></a></li>
					<li><p>Chưa có sản phẩm được chọn</a></p></li>
					
				</ul>
			</li>
		</ul>
	    <ul class="last"><li><a href="#">Cart(0)</a></li></ul>
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>