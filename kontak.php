<?php
session_start();
$koneksi = new mysqli("localhost","root","","siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Tech Mag template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="lo/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="lo/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="lo/styles/contact.css">
<link rel="stylesheet" type="text/css" href="lo/styles/contact_responsive.css">
</head>
<body>


		<!-- Header Navigation & Search -->
		<div class="header_nav_container" id="header">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
							
							<!-- Logo -->
							<div class="logo_container">
								<a href="#">
									<div class="logo"><span>Tech</span>mag</div>
									<div class="logo_sub">Innovation & Technology Magazine</div>
								</a>
							</div>

							<!-- Navigation -->
               
							              <nav class="main_nav">
                <ul class="main_nav_list d-flex flex-row align-items-center justify-content-start">
                  <li><a href="home.php">Home</a></li>
                  <li><a href="sport.php">Olahraga</a></li>
                  <li><a href="konten.php">Teknologi</a></li>
                  <li><a href="politic.php">Politik</a></li>
                  <li><a href="kontak.php">Kontak</a></li>
                  <li><a href="profil.php">Beritamu</a></li>
                 <li><a href="user_upload.php">Upload Beritamu</a></li>
                </ul>
              </nav>

							<!-- Search -->
							<div class="header_search_container ml-auto">
								<div class="header_search">
									<form action="#" id="header_search_form" class="header_search_form d-flex flex-row align-items-center justfy-content-start">
										<div><div class="header_search_activation"><i class="fa fa-search" aria-hidden="true"></i></div></div>
										<input type="text" class="header_search_input" placeholder="Search" required="required">
									</form>
								</div>
							</div>

							<!-- Hamburger -->
							<div class="hamburger ml-auto menu_mm"><i class="fa fa-bars  trans_200 menu_mm" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="courses.html">Tech</a></li>
				<li class="menu_mm"><a href="instructors.html">Innovation</a></li>
				<li class="menu_mm"><a href="#">Videos</a></li>
				<li class="menu_mm"><a href="blog.html">World</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_subscribe"><a href="#">Subscribe</a></div>
		<div class="menu_extra">
			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
		<div class="home_content_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Contact</div>
							<div class="breadcrumbs">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li><a href="index.html">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<!-- Contact Content -->
				<div class="col-lg-4 contact_col">
					<div class="contact_content">
						<div class="contact_title">Get in Touch</div>
						<div class="contact_text">
							<p> Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.Lorem ipsum dolor sit amet, consectetur adipiscin.</p>
						</div>
						<div class="contact_social">
						</div>
						<div class="contact_info">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
										<div class="contact_info_icon"><img src="images/icon_9.svg" alt=""></div>
									</div>
									<div class="contact_info_content">1481 Creekside Lane Avila Beach, CA 931</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
										<div class="contact_info_icon"><img src="images/icon_10.svg" alt=""></div>
									</div>
									<div class="contact_info_content">+53 345 7953 32453</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div class="contact_info_box d-flex flex-column align-items-center justify-content-center">
										<div class="contact_info_icon"><img src="images/icon_11.svg" alt=""></div>
									</div>
									<div class="contact_info_content">yourmail@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-8 contact_col">
					<div class="contact_form_container">
            <form action= "proses_submit.php"method="POST">
          
            <div class="form-group comment">
                <textarea class="form-control" id="inputComment" placeholder="Leave a Message"name="komentar"></textarea>
            </div>

            <button type="submit" class="btn btn-submit red"name="kirim"value="KIRIM">Submit</button>
            
        </form>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Google Map -->
	
	
</div>

<script src="lo/js/jquery-3.2.1.min.js"></script>
<script src="lo/styles/bootstrap-4.1.2/popper.js"></script>
<script src="lo/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="lo/plugins/greensock/TweenMax.min.js"></script>
<script src="lo/plugins/greensock/TimelineMax.min.js"></script>
<script src="lo/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="lo/plugins/greensock/animation.gsap.min.js"></script>
<script src="lo/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="lo/plugins/easing/easing.js"></script>
<script src="lo/plugins/progressbar/progressbar.min.js"></script>
<script src="lo/plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="lo/js/contact.js"></script>
</body>
</html>