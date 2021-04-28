<?php

include "koneksi.php";

if(isset($_POST['tambah'])&& $_POST['tambah']=="TAMBAH"){
	$id=$_POST['id'];
	$deskripsi = $_POST['deskripsi'];
	$judul = $_POST ['judul'];
    $lokasi= $_FILES ['gambar']['tmp_name']; 
	$isi = $_POST ['isi'];
	$gambar = $_FILES ['gambar']['name']; 
    
    move_uploaded_file($lokasi,"../upload/".$gambar);
	$query = "INSERT INTO trending values('$id','$judul','$isi','$gambar','$deskripsi')";
	$hasil=mysqli_query($koneksi,$query);
	
	if($query){
		header('location:tabeldata.php');
	}
}
?>