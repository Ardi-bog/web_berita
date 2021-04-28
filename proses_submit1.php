<?php

include "koneksi.php";

if(isset($_POST['kirim'])&& $_POST['kirim']=="KIRIM"){
	$id = $_POST['id_komentar'];
	$idb = $_POST['id_berita'];
	$nama = $_POST ['nama'];
	$email = $_POST ['email'];
    $komentar = $_POST['komentar']; 
	
	$query = "INSERT INTO komentar values('$nama','$email','$komentar','$idb')";
	$hasil=mysqli_query($koneksi,$query);
	
	if($query){
		header('location:kontak.php');
	}
}
?>