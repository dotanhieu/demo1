<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Free Leoshop Website Template | Login :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- dropdown -->
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
					<li class="active"><a href="login.php">Tài Khoản</a></li> |
					<li><a href="checkout.php">Wishlist</a></li> |
					<li><a href="checkout.php">Giỏ Hàng</a></li> |
					<li><a href="login.php">Đăng nhập</a></li> |
					<li><a href="register.php">Đăng kí</a></li>
				</ul>
			</div>
			<div class="clear"></div>
 		</div>
	 </div>
	<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=""/></a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
			<li class="active grid"><a href="index.php">Trang Chủ</a></li>
			<li><a class="color4" href="#">Tin Tức </a>
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
								<h4>Phụ Kiện </h4>
								<ul>
									<li><a href="mens.html">Chuột </a></li>
									<li><a href="banphim.html">Bàn Phím</a></li>
									<li><a href="mienglatchuot.html">Miếng lát chuột </a></li>
									<li><a href="taiphone.html">Tai Phone</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Other</h4>
								<ul>
									
								</ul>	
							</div>												
						</div>
					  </div>
					</div>
				</li>				
				<li><a class="color5" href="#">Loại Sản Phẩm </a>
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
						<div class="col1">
							<div class="h_nav">
								
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								
								<ul>
								</ul>	
							</div>												
						</div>
					</div>
				</li>
				<li><a class="color7" href="other.html">Phụ Kiện</a></li>
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
					
				</ul>
			</li>
		</ul>
		<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c2" href="#"> </a>
				<ul class="sub-icon1 list">
					
				</ul>
			</li>
		</ul>
	    <ul class="last"><li><a href="#">Cart(0)</a></li></ul>
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>
        <div class="login">
          	<div class="wrap">
				<div class="col_1_of_login span_1_of_login">
					<h4 class="title">Thành Viên Mới</h4>
					<p>Hãy trải nghiệm shop mua và bán hàng mang tên NamKD, với mẫu mã mới nhất đẹp nhất được xuất nhập khẩu tại Canada</p>
					<div class="button1">
					   <a href="register.php"><input type="submit" name="Submit" value="Create an Account"></a>
					 </div>
					 <div class="clear"></div>
				</div>
				<div class="col_1_of_login span_1_of_login">
				<div class="login-title">
	           		<h4 class="title">Đăng Nhập</h4>
					<div id="loginbox" class="loginbox">
						<form action="login_submit.php" method="post" name="login" id="login-form">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">Tài Khoản :</label>
						      <input id="modlgn_username" type="text" name="username" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">Mật Khẩu</label>
						      <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
						    </p>
						    <div class="remember">
							    <p id="login-form-remember">
							      <label for="modlgn_remember"><a href="#">Quên mật khẩu ? </a></label>
							   </p>
							    <input type="submit" name="Submit" class="button" value="Đăng nhập"><div class="clear"></div>
							 </div>
						  </fieldset>
						 </form>
					</div>
			    </div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
     <div class="footer">
		<div class="footer-top">
			<div class="wrap">
			  <div class="section group example">
				<div class="col_1_of_2 span_1_of_2">
					<ul class="f-list">
					    <li><img src="images/2.png"><span class="f-text">Free ship với đơn hàng trên 15.000.000đ</span><div class="clear"></div></li>
					</ul>
				</div>
				<div class="col_1_of_2 span_1_of_2">
					<ul class="f-list">
					  <li><img src="images/3.png"><span class="f-text">Liên hệ: 0386.464.607 (MR.NAM)  </span><div class="clear"></div></li>
					</ul>
				</div>
				<div class="clear"></div>
		      </div>
			</div>
		</div>
		<div class="footer-middle">
			<div class="wrap">
			 <!-- <div class="section group">
			  	<div class="f_10">
					<div class="col_1_of_4 span_1_of_4">
						<h3>Facebook</h3>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="like_box">	
							<div class="fb-like-box" data-href="http://www.facebook.com/w3layouts" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
						</div>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<h3>From Twitter</h3>
						<div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
							</div>
							<div class="clear"> </div>
						</div>
						<div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Ds which don't look even slightly believable. If you are <a href="#">going to use nibh euismod</a> tincidunt ut laoreet adipisicing</p>
							</div>
							<div class="clear"> </div>
						</div>
					</div>
				</div>
				<div class="f_10">
					<div class="col_1_of_4 span_1_of_4">
					    <h3>Information</h3>
						<ul class="f-list1">
						    <li><a href="#">Duis autem vel eum iriure </a></li>
				            <li><a href="#">anteposuerit litterarum formas </a></li>
				            <li><a href="#">Tduis dolore te feugait nulla</a></li>
				             <li><a href="#">Duis autem vel eum iriure </a></li>
				            <li><a href="#">anteposuerit litterarum formas </a></li>
				            <li><a href="#">Tduis dolore te feugait nulla</a></li>
			         	</ul>
					</div>
					<div class="col_1_of_4 span_1_of_4">
						<h3>Contact us</h3>
						<div class="company_address">
					                <p>500 Lorem Ipsum Dolor Sit,</p>
							   		<p>22-56-2-9 Sit Amet, Lorem,</p>
							   		<p>USA</p>
					   		<p>Phone:(00) 222 666 444</p>
					   		<p>Fax: (000) 000 00 00 0</p>
					 	 	<p>Email: <span>mail[at]leoshop.com</span></p>
					   		
					   </div>
					   <div class="social-media">
						     <ul>
						        <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Google"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Linked in"><a href="#" target="_blank"> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Rss"><a href="#" target="_blank"> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a href="#" target="_blank"> </a></span></li>
						    </ul>
					   </div>
					</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		  </div>-->
		   
		   
		   
		   
		   
		   <div class="section group example">
			  <div class="col_1_of_f_1 span_1_of_f_1">
				 <div class="section group example">
				   <div class="col_1_of_f_2 span_1_of_f_2">
				      <h3>Facebook</h3>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="like_box">	
										<div class="fb-like-box" data-href="https://www.facebook.com/Nam.khodo" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
						</div>
 				  </div>
				  <div class="col_1_of_f_2 span_1_of_f_2">
						<h3>From Twitter</h3>
				       <div class="recent-tweet">
							
							<div class="recent-tweet-info">
								
							</div>
							<div class="clear"> </div>
					   </div>
					   <div class="recent-tweet">
							<div class="recent-tweet-icon">
								<span> </span>
							</div>
							<div class="recent-tweet-info">
								<p>Đây là một trang web mà bạn cảm thấy đáng tin cậy</p>
							</div>
							<div class="clear"> </div>
					  </div>
				</div>
				<div class="clear"></div>
		      </div>
 			 </div>
			 <div class="col_1_of_f_1 span_1_of_f_1">
			   <div class="section group example">
				 <div class="col_1_of_f_2 span_1_of_f_2">
				    <h3>Information</h3>
						<ul class="f-list1">
						    <li><a href="https://www.facebook.com/Nam.khodo">Nam Phan (MR Giám đốc) </a></li>
				            <li><a href="https://www.facebook.com/profile.php?id=100039108215062">Tiến Trần (MR Quản lý)</a></li>
							<li><a href="https://www.facebook.com/profile.php?id=100024310086517">Phước Kđ (MR Nhân viên)</a></li>
							<li><a href="https://www.facebook.com/profile.php?id=100010352115047">Đỗ Tấn Hiệu (MR Nhân viên quèn) </a></li>
			         	</ul>
 				 </div>
				 <div class="col_1_of_f_2 span_1_of_f_2">
				   <h3>Contact us</h3>
						<div class="company_address">
					                 <p>Billiard Đệ Nhất,</p>
							   		<p>Phường Hiệp Thành, Tp. TDM. BD,</p>
							   		<p>VN</p>
					   		<p>Phone: 0386.464.607</p>
					   		<p>Fax: (000) 000 00 00 0</p>
					 	 	<p>Email: <span>mail[at]znamkhodoz@gmail.com</span></p>
					   		
					   </div>
					   <div class="social-media">
						     <ul>
						       <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="Zalo"><a href=https://id.zalo.me/account?continue=https%3A%2F%2Fchat.zalo.me%2F> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Google Analyss "><a href=https://analytics.google.com/analytics/web/provision/#/provision> </a> </span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Google Map"><a href=https://www.google.com/maps/place/Bida+%C4%90%E1%BB%87+Nh%E1%BA%A5t/@10.9935649,106.6606674,17z/data=!3m1!4b1!4m5!3m4!1s0x3174d110c860b8a9:0x9377d16b0aff151c!8m2!3d10.9935649!4d106.6628614?hl=vi-VN> </a></span></li>
						        <li><span class="simptip-position-bottom simptip-movable" data-tooltip="Facebook"><a href=https://www.facebook.com/DICK-SHOP-103258041506677 target="_blank"> </a></span></li>
						    </ul>
					   </div>
				</div>
				<div class="clear"></div>
		    </div>
		   </div>
		  <div class="clear"></div>
		    </div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="wrap">
	                <div class="copy">
			            <p>© 2020 Template by <a href="https://www.facebook.com/Nam.khodo" target="_blank">Đàn em Phong</a></p>
		            </div>
		       <div class="f-list2">
				<ul>
					<li class="active"><a href="about.html">Giới thiệu</a></li> |
					<li><a href="delivery.html">Giao hàng - Trả hàng</a></li> |
					<li><a href="delivery.html">Điều khoản - Điều kiện</a></li> |
					<li><a href="contact.php">Liên hệ</a></li> 
				</ul>
			  </div>
				<div class="clear"></div>
		      </div>
			</div>
		</div>
</body>
</html>