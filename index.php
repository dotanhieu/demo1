<?php session_start(); ?>

<html>
<head>
<title>WEB BÁN MÁY TÍNH</title>
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
  <!-- start slider -->
     <div id="fwslider">
        <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
                    <img src="images/New folder/1.jpeg" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h4 class="title">Laptop in the word</h4>
                        <!-- /Text title -->
                        
                        <!-- Text description -->
                        <p class="description">The word in my hand</p>
                        <!-- /Text description -->
                    </div>
                </div>
                 <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="images/New folder/2.jpeg" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Xuất Khẩu Từ Canada </h4>
                        <p class="description">Giá Rẻ Uy Tín</p>
                    </div>
                </div>
            </div>
			 <div class="slide">
                <img src="images/New folder/5.jpeg" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h4 class="title">Phù hợp với mọi lứa tuổi </h4>
                        <p class="description">Hãy đến với chúng tôi</p>
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->
<div class="main">
	<div class="wrap">
		<div class="section group">
		  <div class="cont span_2_of_3">
		  				
		  <h2 class="head">Sản Phẩm Bán Chạy</h2>
		  <?php
		include "config1.php";
	 	$sql = "select * from tbl_sv where loai = 'Hot' ";
	 	$result = mysqli_query($conn,$sql);
?>
		  	<?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
		  <div class="top-box1">
			  <div class="col_1_of_3 span_1_of_3">
			  	<a href="chitiet.php?id=<?php echo $row['id']; ?>">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img  src="images/<?php echo $row['img']; ?>"  />
					</div>
                     <div class="sale-box1"><span class="on_sale title_shop">Hot</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title"><?php echo $row['tensp'] ?></p>
							<div class="price1">
								<span class="actual">$<?php echo $row['giaban'] ?>đ</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
			<?php } ?>
				<div class="clear"></div>
			</div>	
			<div class="clear"></div>


					
		  <h2 class="head">SALE</h2>
		  <?php
		include "config1.php";
	 	$sql = "select * from tbl_sv where loai = 'Sale' ";
	 	$result = mysqli_query($conn,$sql);
?>
		  	<?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
		  <div class="top-box1">
			  <div class="col_1_of_3 span_1_of_3">
			  	<a href="chitiet.php?id=<?php echo $row['id']; ?>">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img  src="images/<?php echo $row['img']; ?>"  />
					</div>
                     <div class="sale-box1"><span class="on_sale title_shop">Sale</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title"><?php echo $row['tensp'] ?></p>
							<div class="price1">
								<span class="reducedfrom">$<?php echo $row['giaban'] ?>đ</span>
							  <span class="actual">$<?php echo $row['giakm'] ?>đ</span>
							</div>
						</div>
						
						
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
			<?php } ?>
				<div class="clear"></div>
			</div>	
			<div class="clear"></div>
			  
			  
	        <h2 class="head">Sản Phẩm Mới</h2>
		  <?php
		include "config1.php";
	 	$sql = "select * from tbl_sv where loai = 'New' ";
	 	$result = mysqli_query($conn,$sql);
?>
		  	<?php while ($row = mysqli_fetch_array($result)) {
				# code...
			 ?>
		  <div class="top-box1">
			  <div class="col_1_of_3 span_1_of_3">
			  	<a href="chitiet.php?id=<?php echo $row['id']; ?>">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img  src="images/<?php echo $row['img']; ?>"  />
					</div>
                     <div class="sale-box1"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title"><?php echo $row['tensp'] ?></p>
							<div class="price1"> 
								<span class="actual">$<?php echo $row['giaban'] ?>đ</span>
							</div>
						</div>
						
						
						
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
			
				<div class="clear"></div>
			</div>
			  	
			  
			  
			<div class="clear"></div>
		</div>
			
	</div>
		<?php } ?>
		
	
		 
			<div class="rsidebar span_1_of_left">
				<div class="top-border"> </div>
				 <div class="border">
	             <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
	             <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="all" />
				  <script src="js/jquery.nivo.slider.js"></script>
				    <script type="text/javascript">
				    $(window).load(function() {
				        $('#slider').nivoSlider();
				    });
				    </script>
					 
		    <div class="slider-wrapper theme-default">
              <div id="slider" class="nivoSlider">
               <img src="images/New folder/6.jpeg" alt="" />
               	<img src="images/New folder/7.jpeg"  alt="" />
                <img src="images/New folder/8.jpeg" alt="" />
              </div>
             </div>
					 
              <div class="btn"><a href="login.php">Đăng Nhập</a></div>
             </div>
           <div class="top-border"> </div>
			<div class="sidebar-bottom">
			   <h2 class="m_1">Thành viên mới<br></h2>
			    <p class="m_text">Hãy đến với chúng tôi</p>
			    <div class="subscribe">
					 <form>
					    <input name="userName" type="text" class="textbox">
					    <input type="submit" value="Subscribe">
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