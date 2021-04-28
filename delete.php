<?php
include 'koneksi.php';
$query="DELETE FROM komentar WHERE nama";
$hasil=mysqli_query($koneksi, $query);
if ($hasil){
?>
<script language="javascript">document.location.href="sport.php";</script>
<?php		
} else {
	echo "Gagal Hapus Data";
}

?>