<?php

include "koneksi.php";

if(isset($_POST['tambah'])&& $_POST['tambah']=="TAMBAH"){
    $id=$_POST['id'];
    $judul = $_POST ['judul'];
    $lokasi= $_FILES ['gambar']['tmp_name']; 
	$isi = $_POST ['isi'];
	$gambar = $_FILES ['gambar']['name']; 
    
    move_uploaded_file($lokasi,"admin/upload/".$gambar);
	$query = "INSERT INTO berita values('$id','$judul','$isi','$gambar')";
	$hasil=mysqli_query($koneksi,$query);
	
	if($query){
		header('location:sport.php');
	}
}
?>