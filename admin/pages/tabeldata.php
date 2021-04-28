<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BB News</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index.html">BB News</a>
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
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                        
                        <li>
                            <a href="tabeluser.php"><i class="fa fa-table fa-fw"></i> Manage User</a>
                        </li>
                        <li>
                            <a href="berita.php"><i class="fa fa-table fa-fw"></i> Tambah Berita </a>
                            <ul>
                                <li>
                                    <a href="berita.php"><i class="fa fa-table fa-fw"></i> Tambah Berita Olahraga </a> 
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="berita1.php"><i class="fa fa-table fa-fw"></i> Tambah Berita Teknologi </a> 
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a href="berita3.php"><i class="fa fa-table fa-fw"></i> Tambah Berita Politik </a> 
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="tabeldata.php"><i class="fa fa-table fa-fw"></i> Manage Data </a>
                            <ul>
                                <li>
                                    <a href="tabeldata.php"><i class="fa fa-table fa-fw"></i> Manage Data Sport </a> 
                                </li>
                            </ul>
                            <ul>
                                <li>
                            <a href="tabeldata1.php"><i class="fa fa-table fa-fw"></i> Manage Data Teknologi</a>
                        </li>
                        
                            </ul>
                            <ul>
                                
                        <li>
                            <a href="tabeldata3.php"><i class="fa fa-table fa-fw"></i> Manage Data Politik</a>
                        </li>
                            </ul>
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
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th> NO</th>
                                        <th>Judul Berita</th>
                                        <th>Gambar Berita</th>
										 <th>Isi Berita</th>
                                         <th>Deskripsi</th>
                                         <th>Kategori</th>
                                         <th colspan="2">Aksi</th>
                                    </tr>
									<?php
										include"koneksi.php";
										$query = "SELECT * FROM berita order by id_berita DESC";
										$hasil = mysqli_query ($koneksi,$query);
										$no =1;
										while($tampil = mysqli_fetch_array($hasil)){	
									?>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $tampil['judul_berita'];?></td>
                                        <td><?php echo $tampil['gambar_berita'];?></td>
                                        <td><?php echo $tampil['isi_berita'];?></td>
                                        <td><?php echo $tampil['deskripsi'];?></td>
                                        <td><?php echo $tampil['kategori'];?></td>
                                        <td><a href="edit.php?id=<?php echo $tampil['id_berita']; ?>">Edit</a></td>
                                        <td><a href="delete.php?id=<?php echo $tampil['id_berita']; ?>" onclick="return confirm('Apakah anda yakin Menghapus Ini?')">Delete</a></td>
                                    </tr>
                                   <?php
										}
									?>
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>

