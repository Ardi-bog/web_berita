<?php

include "koneksi.php";

if(isset($_POST['tambah'])&& $_POST['tambah']=="TAMBAH"){
	$id=$_POST['id'];
	$deskripsi = $_POST['deskripsi'];
	$kategori = $_POST['kategori'];
	$judul = $_POST ['judul'];
    $lokasi= $_FILES ['gambar']['tmp_name']; 
	$isi = $_POST ['isi'];
	$gambar = $_FILES ['gambar']['name']; 
    
    move_uploaded_file($lokasi,"../upload/".$gambar);
	$query = "INSERT INTO berita3 values('$id','$judul','$isi','$gambar','$deskripsi','$kategori')";
	$hasil=mysqli_query($koneksi,$query);
	
	if($query){
		header('location:tabeldata3.php');
	}
}
?>