<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['level']) && isset($_SESSION['email'])) {
	

$id=$_GET['id_berita'];
$query="DELETE FROM berita WHERE id_berita='$id'";
$hasil=mysqli_query($koneksi, $query);
if ($hasil){
?>
<script language="javascript">document.location.href="tabeldata.php";</script>
<?php		
} else {
	echo "Gagal Hapus Data";
}
}
?>