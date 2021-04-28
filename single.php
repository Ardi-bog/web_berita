<?php
	session_start();
	include "koneksi.php";
	$getberita = $_GET['id_berita'];
	$tampil = mysqli_fetch_array(mysqli_query($koneksi,"select * from berita where id_berita = '$getberita'"));

	if(isset($_POST['kirim'])){
	$nama = $_SESSION ['username'];
	$email = $_SESSION ['email'];
    $komentar = $_POST['komentar']; 
	
	$query = "INSERT INTO komentar1 values('$nama','$email','$komentar','','$getberita')";
	$hasil=mysqli_query($koneksi,$query);
	
	if($query){
		header('location: single.php?id_berita='.$getberita);
	}
}
?>
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


					<div class="single_post">
						<div class="post_image"><img src="admin/upload/<?php echo $tampil['gambar_berita'];?>" alt=""></div>
						<div class="post_content">
							<div class="post_category cat_technology"><a href="sport.php">Olahraga</a></div>
							<div class="post_title"><a href="single.php?id_berita=<?php echo $tampil['id_berita']; ?>"><label><?php echo $tampil['judul_berita'];?></label></a></div>
							<div class="post_info d-flex flex-row align-items-center justify-content-start">
								</div>
							</div>
							<div class="post_text">
							<p><?php echo $tampil['isi_berita'];?> </p>
							</div>
						</div><br><br>
						<!-- Social Share -->
						
						


							<p><b><i><?php
                                    include "koneksi.php";
                                    $query = mysqli_query($koneksi,"SELECT * FROM komentar1 where id_berita='$getberita'");
                                    $hasil = mysqli_num_rows($query);

                                    echo $hasil;
                                    ?><b><i> Comment</i></b></p>						
<?php
include "koneksi.php";
?>
<?php $ambil = $koneksi -> query("select*from komentar1 where id_berita='$getberita' order by id_komentar DESC ");?>
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

										<?php if($tampil['id_komentar'] == $_SESSION['username']){?>
								<?php }?>
											<div class="comment_text">
												<p><?php echo $tampil['komentar'];?></p>
											</div>
										<?php if ($_SESSION['email'] == $tampil['email']) {?>
                                        <td><a href="delete3.php?id=<?php echo $tampil['id_komentar']; ?>" onclick="return confirm('Apakah anda yakin Menghapus Ini?')">Delete</a></td>
                                    <?php }?>
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
							<div class="reply_form_title">Tinggalkan Pesan</div>
							 <form action= ""method="POST">
						<input type="hidden" name="id_berita value="<?php echo $tampil['id_berita'];?>">
           
            <div class="form-group comment">
                <textarea class="form-control" id="inputComment" placeholder=""name="komentar"></textarea>
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