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
<?php
include "koneksi.php";
$cari= $_POST['cari'];
$query="SELECT * FROM berita where judul_berita like'$cari'";
$hasil = mysqli_query($koneksi,$query);
while ($data = mysqli_fetch_array($hasil)){
echo"
<div class='content_container'>
		
		<!-- Featured Title -->
		<div class=featured_title>
			<div class=container>
				<div class=row>
					<div class=col>
						<div class=section_title_container d-flex flex-row align-items-start justify-content-start>
							<div>
								<div class=section_title>Terbaru</div>
								<div class='section_subtitle'></div>
							</div>
							<div class='section_bar'></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class='container'>
			<div class='row'>

			 	<!-- Main Content -->

				<div class='col-lg-9'>
					<div class='main_content'>
						
						<!-- Featured -->

						<div class='featured'>
							<div class='row'>
								<div class='col-lg-8'>

									<!-- Post -->
									<div class='post_item post_v_large d-flex flex-column align-items-start justify-content-start'>
										<div class='post_image'><img src='admin/upload/<?php echo $tampil['gambar_berita'];?>'alt='https://unsplash.com/@cgower'></div>
										<div class='post_content'>
											<div class='post_category cat_technology'><a href=>Olahraga</a></div>
											<div class='post_title'><a href='single.php?id_berita=<?php echo $tampil['id_berita']; ?> '><label><?php echo $tampil['judul_berita'];?></label></a></div>
											<div class='post_info d-flex flex-row align-items-center justify-content-start'>
												<div class='post_author d-flex flex-row align-items-center justify-content-start'>
												</div>
												
												<div class='post_text'>
												<p><?php echo $tampil['deskripsi'];?></p>
											</div>
										</div>
									</div>
								</div>
								<div class='col-lg-4'>

									
								</div>
							</div>
						</div>
";
}
echo "</table>";
echo "<a href ='index.php'>Kembali</a>"
?>