<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home</title>
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
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<div class="main">
			<header>
				<div class="clear"></div>
				<div class="container_12">
					<div class="grid_12">
						<h1>
							<a href="index.php">
								<img src="images/logo.jpg" height="100px" alt="TESORO:GEMS OF GLA">
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
							<li class="current"><a href="home.php">Home</a></li>
							<li><a href="#">Thoughts</a></li>
							<li><a href="index-2.php">Gallery</a></li>
							<li><a href="index-3.php">Video</a></li>
							<li><a href="index-4.php">Connect With Us</a></li>
                            <li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="main">
<!--==============================Content=================================-->
			<div class="content"><div class="ic"></div>
				<div class="container_12">
					<div class="grid_6">
						<div class="p1_box left cl1">
							<div class="type"></div>
							<?php $imagesDir = 'uploads/*/';

                              $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

                                 $randomImage = $images[array_rand($images)];
                                 echo '<img src="'.$randomImage.'" alt="random image" height="300px" width="500px">'; ?>
							<a href="index-2.php" class="bot">Photography<span><?php $imagesDir = 'uploads/*/';

                              $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                                
                                    if ( $images != false )
                                         {
                                           $filecount = count( $images );
                                           echo $filecount." Photos";
                                         }
                                    else
                                      {
                                        echo 0;
                                      }?></span></a>
						</div>
						<div class="p1_box left cl2">
							<div class="type"></div>
							<div class="gray_block">
								<span class="col1"></span>
								<span class="col1"></span>
							</div>
							<a href="#" class="bot">Master Class<span>5 <br>Thoughts</span></a>
						</div>
						<div class="p1_box left cl1 pos1">
							<div class="type"></div>
							<?php $imagesDir = 'uploads/wildlife/';

                              $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

                                 $randomImage = $images[array_rand($images)];
                                 echo '<img src="'.$randomImage.'" alt="random image" height="300px" width="500px">'; ?>
							<a href="index-2.php" class="bot">WildLife<span><?php $imagesDir = 'uploads/wildlife/';
                             
                              $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                                
                                    if ( $images != false )
                                         {
                                           $filecount = count( $images );
                                           echo $filecount." Images";
                                         }
                                    else
                                      {
                                        echo 0;
                                      }?></span></a>
						</div>
						<div class="p1_box left cl3 pos1">
							<div class="type"></div>
							<?php 
                                       include 'blogic.php';
                                       $sql="select * from upload where type='mp4' or type='3gp' or type='gif'";
                                       $result = ExecuteQuery($sql);
                                       while ($row = mysql_fetch_array($result))
                                        {   
                                        $src=$row['file'];
                                       $dbPath = "uploads/";
                                       $home=$dbPath.$src;
                                       ?>
                                          <video width="450" height="320" controls>
      <source src="<?php echo $home ?>" type="video/mp4"  >
    </video> 
 <?php

            }

        ?>

							<a href="index-3.php" class="bot">Coexisting with Nature<span><strong class="fa-angle-right fa"></strong></span></a>
						</div>
					</div>
					<div class="grid_6">
						<div class="p1_box right cl1">
							<div class="type"></div>
							<?php $imagesDir = 'uploads/nature/';

                              $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

                                 $randomImage = $images[array_rand($images)];
                                 echo '<img src="'.$randomImage.'" alt="random image" height="300px" width="500px">'; ?>
							<a href="index-2.php" class="bot">Pics of Nature <span><?php $imagesDir = 'uploads/nature/';
                             
                              $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                                
                                    if ( $images != false )
                                         {
                                           $filecount = count( $images );
                                           echo $filecount." Images";
                                         }
                                    else
                                      {
                                        echo 0;
                                      }?></span></a>
						</div>
						<div class="p1_box right cl3">
							<div class="type"></div>
						<?php 
                                       
                                       $sql="select * from upload where type='mp4' or type='3gp' or type='gif'";
                                       $result = ExecuteQuery($sql);
                                       while ($row = mysql_fetch_array($result))
                                        {   
                                        $src=$row['file'];
                                       $dbPath = "uploads/";
                                       $home=$dbPath.$src;
                                       ?>
                                          <video width="450" height="320" controls>
      <source src="<?php echo $home ?>" type="video/mp4"  >
    </video> 
 <?php

            }

        ?>

							<a href="index-3.php" class="bot">Videos<span><strong class=" fa-angle-right fa"></strong></span></a>
						</div>
						<div class="p1_box right cl4">
							<div class="type"></div>
							<a href="#" class="bot">Inspirational Resources</a>
						</div>
						<div class="p1_box right cl5">
							<div class="type"></div>
							<blockquote>To me, photography is an art of observation. It’s about finding something interesting in an ordinary place... I’ve found it has little to do with the things you see and everything to do with the way you see them. </blockquote>
							<a href="#" class="bot">Elliott Erwitt <span>8 <br>comments</span></a>
						</div>
						<div class="p1_box right cl2">
							<div class="type"></div>
							<img src="images/page1_img7.jpg" alt="">
							<a href="#" class="bot">Latests<span><strong class=" fa-angle-right fa"></strong></span></a>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_12">
						<a href="#" class="round"> Older Posts</a>
					</div>
				</div>
			</div>
<!--==============================footer=================================-->
			<footer>
				<div class="hor bg3"></div>
				<div class="container_12">
					<div class="grid_12">
						<div class="socials">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<div class="clear"></div>
						</div>
						<div class="copy">
							&copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br>
							Website designed by Shivangi Tripathi & Yashasvi Vashistha
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>