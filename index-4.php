<?php

include_once 'blogic.php';
if(isset($_REQUEST['btn-upload']))
{    
  $allowed =  array('gif','png','jpg','jpeg','mp4','3gp');   
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = pathinfo($file,PATHINFO_EXTENSION);
 $folder="uploads/";

 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if((move_uploaded_file($file_loc,$folder.$final_file))&& (in_array($file_type,$allowed)))
 {  $sql="INSERT INTO upload(username,branch,year,file,type,size) VALUES('$_REQUEST[Name]','$_REQUEST[Branch]','$_REQUEST[Year]','$final_file','$file_type','$new_size')";
  ExecuteNonQuery($sql);
  ?>
  <script>
  alert('Successfully Uploaded');
        window.location.href='home.php';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('Error while Uploading File');
        window.location.href='index-4.php';
        </script>
  <?php
 }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Connect With Us</title>
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Economica:700' rel='stylesheet' type='text/css'>
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/TMForm.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
		})
		</script>
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
								<img src="images/logo.jpg" alt="TESORO:GEMS OF GLA">
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
							<li><a href="index-2.php">Gallery</a></li>
							<li><a href="index-3.php">Video</a></li>
							<li class="current"><a href="index-4.php">Connect With Us</a></li>
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
					<div class="grid_12">
						<div class="box">
							<div class="inner maxheight">
										<h4>CONNECT WITH US</h4>
										<form id="form" method="post">
											<div class="success_wrapper">
												<div class="success-message">Contact form submitted</div>
											</div>
											<label class="name">
												<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
												<span class="empty-message">*This field is required.</span>
												<span class="error-message">*This is not a valid name.</span>
											</label>
											<label class="email">
												<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
												<span class="empty-message">*This field is required.</span>
												<span class="error-message">*This is not a valid email.</span>
											</label>
											<label class="phone">
												<input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
												<span class="empty-message">*This field is required.</span>
												<span class="error-message">*This is not a valid phone.</span>
											</label>
											<label class="message">
												<textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
												<span class="empty-message">*This field is required.</span>
												<span class="error-message">*The message is too short.</span>
											</label>
											<div>
												<div class="clear"></div>
												<div class="btns">
                                                     
                                                     <a href="#" type="reset" class="btn">Clear</a>
													 <a href="#" type="submit" class="btn">Send</a>
                                                     

                                                    </div>
                                                    
                                            </div>
										</form>
                                        <form method="post" enctype="multipart/form-data"  id="form">
                                                    <label class="name">
                                                    <input type="text" name="Name" placeholder="Name:" data-constraints="@Required @JustText"/>
                                                    <span class="empty-message">*This field is required.</span>
                                                    <span class="error-message">*This is not a valid name</span>
                                                    </label>
                                                    <label class="name">
                                                    <input type="text" name="Branch" placeholder="Branch:" data-constraints="@Required @JustText"/>
                                                    <span class="empty-message">*This field is required.</span>
                                                    <span class="error-message">*This is not a valid branch name.</span> 
                                                    </label>
                                                    <label class="phone">
				                                    <input type="text" placeholder="Year:" data-constraints="@Required @JustNumbers" name="Year"/>
												    <span class="empty-message">*This field is required.</span>
												    <span class="error-message">*This is not a valid Year.</span>
											        </label>
                                                    <input type="file" name="file"/>
                                                    <div class="btns"><button type="submit" name="btn-upload" class="btn">Upload</button></div>
                                                    </form>
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
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
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