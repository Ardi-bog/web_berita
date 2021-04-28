<?php

include "koneksi.php";

if(isset($_POST['kirim'])&& $_POST['kirim']=="KIRIM"){
	$id = $_POST['id_komentar'];
	$nama = $_POST ['nama'];
	$email = $_POST ['email'];
    $komentar = $_POST['komentar']; 
	
	$query = "INSERT INTO komentar4 values('$nama','$email','$komentar','')";
	$hasil=mysqli_query($koneksi,$query);
	
	if($query){
		header('location:konten.php');
	}
}
?>