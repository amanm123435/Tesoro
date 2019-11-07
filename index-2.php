
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Photography</title>
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/touchTouch.css">
		<link rel="stylesheet" href="css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Economica:700' rel='stylesheet' type='text/css'>
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/touchTouch.jquery.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('.gallery a.gal').touchTouch();
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
							<li><a href="#">Thoughts</a></li>
							<li class="current"><a href="index-2.php">Photography</a></li>
							<li><a href="index-3.php">Videos</a></li>
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
					<div class="grid_12">
						<div class="box bx1">
							<div class="inner">
								<h3>Photography</h3>
								<div class="gallery">
                                    <?php
                                    $imagesDir = 'uploads/*/';
                                    $files = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                                    for ($i=1; $i<count($files); $i++)
                                         {
	                                     $num = $files[$i];
	                                     echo '<a class="gal" href="'.$num.'"><img src="'.$num.'" alt="random image" height="300px" width="400px"></a>'."&nbsp;&nbsp;";
                                         
	                                     }
                                    ?>
     
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
							Website designed by 
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>