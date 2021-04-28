<?php
session_start();
include "koneksi.php";

if(isset($_POST['tambah'])){
	$judul = $_POST ['judul'];
	$nama = $_SESSION['username'];
	$kategori = $_POST['kategori'];
	$deskripsi = $_POST['deskripsi'];
    $lokasi= $_FILES ['gambar']['tmp_name']; 
	$isi = $_POST ['isi'];
	$gambar = $_FILES ['gambar']['name']; 
    $tgl = $_POST['tgl'];

    move_uploaded_file($lokasi,"admin/upload/".$gambar);
	$query = "INSERT INTO upload values('','$judul','$deskripsi','$gambar','$isi','$nama','$kategori','$tgl')";
	$hasil=mysqli_query($koneksi,$query);
	
	if($query){
		header('location:profil.php');
	}
}
?>