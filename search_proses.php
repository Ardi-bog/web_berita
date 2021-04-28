<?php
include "koneksi.php";
$cari= $_POST['cari'];
$query="SELECT * FROM berita where judul_berita like'$cari'";
$hasil = mysqli_query($koneksi,$query);?>

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
<link rel="stylesheet" type="text/css" href="lo/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="lo/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="lo/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="lo/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="lo/styles/responsive.css">
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
                <form action="search_proses.php" id="header_search_form" class="header_search_form d-flex flex-row align-items-center justfy-content-start">
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
      <form action="proses.php" class="header_search_form menu_mm">
        <input type="search" class="search_input menu_mm" placeholder="Search" required="required">
        <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
          <i class="fa fa-search menu_mm" aria-hidden="true"></i>
        </button>
      </form>
    </div>
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

  
  <!-- Intro -->

  
  <!-- Content Container -->

  <div class="content_container">
    
    <!-- Featured Title -->
    <div class="featured_title">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section_title_container d-flex flex-row align-items-start justify-content-start">
              <div>
                <div class="section_title">Terbaru</div>
                <div class="section_subtitle"></div>
              </div>
              <div class="section_bar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">

        <!-- Main Content -->

        <div class="col-lg-9">
          <div class="main_content">
            
            <!-- Featured -->

            <div class="featured">
              <div class="row">
                <div class="col-lg-8">

                  <!-- Post -->
                  <div class="post_item post_v_large d-flex flex-column align-items-start justify-content-start">

                    <div class="post_image"><img src="admin/upload/<?php echo $tampil['gambar_berita'];?>" alt="https://unsplash.com/@cgower"></div>
                    <div class="post_content">
                      <div class="post_category cat_technology"><a href="">Olahraga</a></div>

                      <div class="post_title"><a href="single.php?id_berita=<?php echo $tampil['id_berita']; ?> "><label><?php echo $hasil['judul_berita'];?></label></a></div>

                      <div class="post_info d-flex flex-row align-items-center justify-content-start">
                        <div class="post_author d-flex flex-row align-items-center justify-content-start">
                        </div>
                        
                        <div class="post_comments ml-auto"><a href="#"><?php
                      $tgl = date('l,d-m-Y');
                      echo $tgl;

                    ?>
                      
                    </a></div>
                      </div>
 
                      <div class="post_text">
                        <p><?php echo "".$data['deskripsi'].""?></p>
                     <?php while ($data = mysqli_fetch_array($hasil)){?>

                                              </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  
                </div>
              </div>
            </div>
<?php }?>
<script src="lo/js/jquery-3.2.1.min.js"></script>
<script src="lo/styles/bootstrap-4.1.2/popper.js"></script>
<script src="lo/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="lo/plugins/greensock/TweenMax.min.js"></script>
<script src="lo/plugins/greensock/TimelineMax.min.js"></script>
<script src="lo/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="lo/plugins/greensock/animation.gsap.min.js"></script>
<script src="lo/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="lo/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="lo/plugins/easing/easing.js"></script>
<script src="lo/plugins/parallax-js-master/parallax.min.js"></script>
<script src="lo/js/custom.js"></script>
</body>
</html>