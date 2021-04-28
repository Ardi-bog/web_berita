<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['level']) && isset($_SESSION['email'])) {
	

$id=$_GET['id'];
$query="DELETE FROM tb_komentar WHERE id_komentar='$id'";
$hasil=mysqli_query($koneksi, $query);
if ($hasil){
?>
<script language="javascript">document.location.href="tabelkomen.php";</script>
<?php		
} else {
	echo "Gagal Hapus Data";
}
}
?>