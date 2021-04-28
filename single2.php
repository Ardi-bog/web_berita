<!DOCTYPE html>
<html lang="en">
<head>
<title>BB News</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Tech Mag template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="lo/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="lo/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="lo/styles/single.css">
<link rel="stylesheet" type="text/css" href="lo/styles/single_responsive.css">
</head>
<body>

		<!-- Header Content -->

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
                  <li><a href="sport.php">Sport</a></li>
                  <li><a href="konten.php">Technology</a></li>
                  <li><a href="politic.php">Politic</a></li>
                  <li><a href="kontak.php">Contact</a></li>
                  <li><a href="profil.php">User Upload</a></li>
                 <li><a href="user_upload.php">Profil User</a></li>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div>
		<div class="home_content_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">Article</div>
							<div class="breadcrumbs">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li><a href="index.php">Home</a></li>
									<li>Article</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Content Container -->

	<div class="content_container">
		<div class="container">
			<div class="row">

				<!-- Single Post -->

				<div class="col-lg-9">
<?php
include "koneksi.php";
$query="SELECT * FROM late WHERE id_berita";
$hasil=mysqli_query($koneksi, $query);
$tampil=mysqli_fetch_array($hasil);
?>
					<div class="single_post">
						<div class="post_image"><img src="admin/upload/<?php echo $tampil['gambar_berita'];?>" alt=""></div>
						<div class="post_content">
							<div class="post_category cat_technology"><a href="sport.php">sport</a></div>
							<div class="post_title"><a href="single.html"><label><?php echo $tampil['judul_berita'];?></label></a></div>
							<div class="post_info d-flex flex-row align-items-center justify-content-start">
								<div class="post_author d-flex flex-row align-items-center justify-content-start">
									<div><div class="post_author_image"><img src="images/author_1.jpg" alt=""></div></div>
									<div class="post_author_name"><a href="#">Michael Smith</a></div>
								</div>
								<div class="post_date"><a href="#">29 April 2018</a></div>
								<div class="post_comments_num ml-auto"><a href="#">3 comments</a></div>
							</div>
							<div class="post_text">
								<p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi convallis metus purus, eget imperdiet ipsum viverra et. Quisque mattis ullamcorper ultricies. Nullam dui dui, porta non vulputate sed, rutrum in ipsum. Quisque nunc velit, feugiat sed mattis a, luctus ac nisl. Praesent pellentesque sapien efficitur, elementum mi sit amet, rutrum mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam venenatis mi ac enim mattis vehicula. Integer sit amet ornare quam. Nullam ultrices tempus felis, eget efficitur neque mollis in. Proin congue maximus augue eget scelerisque. Sed fermentum dolor orci, vestibulum vehicula dolor porta sit amet. Morbi cursus ante sed felis luctus semper. Phasellus sed orci mattis, rhoncus arcu ut, vehicula orci. Curabitur sagittis ante vitae egestas tincidunt.</p>
								<p>Pellentesque in mauris lacinia sem pharetra cursus. Cras a turpis tortor. Nullam vestibulum, velit vitae mattis ultricies, dui est tempor nibh, quis maximus tortor diam vel justo. Ut nec fermentum nisl. Ut mattis massa ullamcorper dui sagittis, et varius sem faucibus. Suspendisse iaculis rutrum leo, non tempus odio mollis a. Aliquam dictum iaculis nunc et vestibulum. Donec vitae facilisis erat. Suspendisse ut risus sed ligula tristique condimentum consectetur non odio. Donec augue diam, ultricies eu tincidunt a, venenatis in lectus. Etiam eget nulla blandit, dictum felis et, egestas lacus. Aliquam sit amet elementum enim. </p>
							</div>
						</div>

						<!-- Social Share -->
						<div class="post_share d-flex flex-row align-items-center justify-content-start">
							<div class="post_share_title">Share:</div>
							<ul class="post_share_list d-flex flex-row align-items-center justify-content-center">
								<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						
						<!-- Comments -->
					
						<!-- Reply  -->
			<p><b><i><?php
                                    include "koneksi.php";
                                    $query = mysqli_query($koneksi,"SELECT * FROM komentar2");
                                    $hasil = mysqli_num_rows($query);

                                    echo $hasil;
                                    ?><b><i> Comment</i></b></p>						
<?php
include "koneksi.php";
?>
<?php $ambil = $koneksi -> query("select*from komentar2 order by id_komentar DESC");?>
<?php while($tampil = $ambil -> fetch_assoc()){?>

						<div class="post_comments_container">


							<!-- Comments -->
							<div class="post_comments">
								
								<ul class="post_comments_list">
									
									<!-- Comment -->
									<li class="comment">
										<div class="comment_info d-flex flex-row align-items-center justify-content-start">
											<div class="comment_author"><a href="#"><?php echo $tampil['nama'];?></a></div>
										</div>
										<div class="comment_content">
											<div class="comment_text">
												<p><?php echo $tampil['komentar'];?></p>
											</div>
										</div>
									</li>

									<!-- Comment -->
									
								</ul>

							</div>
						</div>
<?php
}
?>


						<!-- Reply  -->
						<div class="reply_form_container">
							<div class="reply_form_title">Leave a reply</div>
							 <form action= "proses_submit3.php"method="POST">
            <div class="form-group">
                <input type="text" class="form-control" id="inputName" placeholder="Name" name="nama">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email"name="email">
            </div>
            <div class="form-group comment">
                <textarea class="form-control" id="inputComment" placeholder="Leave a Reply"name="komentar"></textarea>
            </div>

            <button type="submit" class="btn btn-submit red"name="kirim"value="KIRIM">Submit</button>
            
        </form>
						</div>
					</div>

				</div>

				<!-- Sidebar -->

				<div class="col-lg-3">
					<div class="sidebar">

						<!-- Latest Posts -->
                        <?php
include "koneksi.php";
?>

<?php $ambil = $koneksi -> query("select*from late order by id_berita DESC");?>
<?php while($tampil = $ambil -> fetch_assoc()){?>
						<div class="sidebar_latest">
							<div class="sidebar_title">Latest Posts</div>
							<div class="latest_posts">
								
								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_post_image"><img src="admin/upload/<?php echo $tampil['gambar_berita'];?>" alt=""></div></div>
									<div class="latest_post_content">
										<div class="post_category_small cat_video"><a href="">Sport</a></div>
										<div class="latest_post_title"><a href="single2.php?id_berita=<?php echo $tampil['id_berita']; ?>"><?php echo $tampil['judul_berita'];?></a></div>
										<div class="latest_post_date">March 12, 2018</div>
									</div>
								</div>
<?php
}
?>
								
						<!-- Extra -->
					
<script src="lo/js/jquery-3.2.1.min.js"></script>
<script src="lo/styles/bootstrap-4.1.2/popper.js"></script>
<script src="lo/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="lo/plugins/greensock/TweenMax.min.js"></script>
<script src="lo/plugins/greensock/TimelineMax.min.js"></script>
<script src="lo/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="lo/plugins/greensock/animation.gsap.min.js"></script>
<script src="lo/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="lo/plugins/easing/easing.js"></script>
<script src="lo/plugins/parallax-js-master/parallax.min.js"></script>
<script src="lo/js/single.js"></script>
</body>
</html>