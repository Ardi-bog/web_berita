<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['level']) && isset($_SESSION['email'])) {
	

$id=$_GET['id'];
$query="DELETE FROM berita1 WHERE id_berita='$id'";
$hasil=mysqli_query($koneksi, $query);
if ($hasil){
?>
<script language="javascript">document.location.href="tabeldata1.php";</script>
<?php		
} else {
	echo "Gagal Hapus Data";
}
}
?>