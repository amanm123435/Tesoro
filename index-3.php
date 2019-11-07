
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Videos</title>
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Economica:700' rel='stylesheet' type='text/css'>
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
		})
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body id="top">
<!--==============================header=================================-->
		<div class="main">
			<header>
				<div class="clear"></div>
				<div class="container_12">
					<div class="grid_12">
						<h1>
							<a href="home.php">
								<img src="images/logo.jpg" height="100px" width="300px" alt="TESORO:GEMS OF GLA">
							</a>
						</h1>
					</div>
				</div>
			</header>
		</div>
		<div class="menu_block">
			<div class="container_12">
				<div class="grid_12">
					<nav class="horizontal-nav full-width horizontalNav-notprocessed">
						<ul class="sf-menu">
							 <li><a href="home.php">Home</a></li>
							 <li><a href="index-1.php">Thoughts</a></li>
							 <li><a href="index-2.php">Photography</a></li>
							 <li class="current"><a href="index-3.php">Videos</a></li>
							 <li><a href="index-4.php">Connect With Us</a></li>
						</ul>
					</nav>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="main">
<!--==============================Content=================================-->
			<div class="content">
				<div class="container_12">
					<div class="grid_8">
						<div class="box">
							<div class="inner maxheight">
								<h3>Video</h3>
                                
						            <?php

                                       $dir = "uploads/videos/";
                                       $videoW = 400;
                                       $videoH = 320;

                                       if (is_dir($dir))
                                        {
                                         if ($dh = opendir($dir)){

                                           while (($file = readdir($dh)) !== false){

                                             if($file != '.' && $file != '..'){

                                                echo 
                                                    "
                                                      <figure class='video'>
                                                      <video width=\"$videoW\" height=\"$videoH\" controls>
                                                      <source src=\"". $dir . $file ."\" type=\"video/mp4\">
                                                      </video>
                    
                                                    ";

                                            }

                                           }

                                           closedir($dh);

                                         }
                                       }
                          ?>
                          
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="box">
							<div class="inner maxheight">
								<h4>Top Videos</h4>
								<ul class="list">
									<li class="li"><a href="#">Aahatein Cover By Shreya Verma</a></li>
									<li class="li"><a href="#">Kitna Pyara Mashup By Anyora Maheshwari</a></li>
									<li class="li"><a href="#">Poetry Rendition By Shivani Dixit </a></li>
									<li class="li"><a href="#">Shayari By Saed Saad Tirmizi</a></li>
									<li class="li"><a href="#">Sukoon Official Video Featuring Anyora Maheshwari</a></li>
									<li class="li"><a href="#">Galtiyan Self Composed By Shreya Verma</a></li>
									<li class="li"><a href="#">Dance Performance By Shraddha and Kamini</a></li>
									<li class="li"><a href="#">Count On Me Cover By Shreya Verma</a></li>
									<li class="li"><a href="#">College Dance Performance</a></li>
									<li class="li"><a href="#">Flash Mob Dance Performance</a></li>
								</ul>
								<h4 class="head1">Archive</h4>
								<div class="block2">
									<time datetime="2013-01-01"><span>21</span>Nov</time>
									<div class="extra_wrapper">
										<p class="col2"><strong><a href="#">Aahatein Cover </a></strong></p>Shreya Verma
									</div>
								</div>
								<div class="block2">
									<time datetime="2013-01-01"><span>30</span>Nov</time>
									<div class="extra_wrapper">
										<p class="col2"><strong><a href="#">Sukoon Official Video </a></strong></p>Anyora Maheshwari
									</div>
								</div>
								<div class="block2">
									<time datetime="2013-01-01"><span>12</span>Dec</time>
									<div class="extra_wrapper">
										<p class="col2"><strong><a href="#">Shayari </a></strong></p>Saed Saad Tarmizi
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!--==============================footer=================================-->
			<footer>
				<div class="hor bg3"></div>
				<div class="container_12">
					<div class="grid_12">
						<div class="socials">
							<a href="http://www.facebook.com"></a>
							<a href="http://www.twitter.com"></a>
							<a href="http://www.pinterest.com"></a>
							<div class="clear"></div>
						</div>
						<div class="copy">
							&copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br>
							Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>