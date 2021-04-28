<?php
$koneksi =new mysqli("localhost","root","","online_shop");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                   
                    
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                           <a href="login.php">Login</a>
                        </li>
                                                <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                        
						<li>
                            <a href="tabeluser.php"><i class="fa fa-table fa-fw"></i> Manage User</a>
                        </li>
                        <li>
                            <a href="berita.php"><i class="fa fa-table fa-fw"></i> Tambah Berita</a>
                        </li>
						<li>
                            <a href="tabeldata.php\><i class="fa fa-table fa-fw"></i> Manage Data</a>
                        </li>
						<li>
                            <a href="tabelkomen.php"><i class="fa fa-table fa-fw"></i> Manage Komentar</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Produk</h1>
                </div>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama</label>
						<input class="form-control" type="text" name="judul"></input>
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input class="form-control" type="text" name="isi"></input>
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" type="text" name="deskripsi" rows="10"></textarea>
					</div>
					<div class="form-group">
						<label>Foto</label>
						<input class="form-control" type="file" name="foto"></input>
					</div>
					<button class="btn btn-primary" name="save">Simpan</button>
				</form>
            </div>
				<?php
					if (isset($_POST['save']))
					{
						$nama =$_FILES['foto']['name'];
						$lokasi =$_FILES['foto']['tmp_name'];
						move_uploaded_file($lokasi, "../foto_produk/".$nama);
						$koneksi->query("INSERT INTO produk
						(nama_produk,harga_produk,foto,deskripsi_produk)
						VALUES('$_POST[nama]','$_POST[harga]','$nama','$_POST[deskripsi]')");
						
						echo "<div class='alert alert-info'>Data Tersimpan</div>";
						echo"<meta http-equiv='refresh' content='1;url=tablesuser.php?halaman=produk'>";
					}	
				?>

        </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
