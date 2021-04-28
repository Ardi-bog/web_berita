<?php
session_start();
include 'koneksi1.php';
if (isset($_SESSION['level']) && isset($_SESSION['email'])) {
	

$id=$_GET['id'];
$query="DELETE FROM tb_user WHERE id_user='$id'";
$hasil=mysqli_query($koneksi, $query);
if ($hasil){
?>
<script language="javascript">document.location.href="tabeluser.php";</script>
<?php		
} else {
	echo "Gagal Hapus Data";
}
}
?>