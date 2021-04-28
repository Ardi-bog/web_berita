<?php
session_start();
include "koneksi.php";

if(isset($_POST['kirim'])&& $_POST['kirim']=="KIRIM"){
	$id = $_POST['id_komentar'];
	$nama = $_SESSION ['nama'];
	$email = $_SESSION ['email'];
    $komentar = $_POST['komentar']; 
	
	$query = "INSERT INTO tb_komentar values('$nama','$email','$komentar','')";
	$hasil=mysqli_query($koneksi,$query);
	
	if($query){
		header('location:kontak.php');
	}
}
?>