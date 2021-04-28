<?php
	session_start();
	include "koneksi.php";
	$username = $_POST['username'];	
	$password = $_POST['password'];
	
	$query = "SELECT * FROM tb_user WHERE username = '$username'";
	$hasil = mysqli_query($koneksi,$query);
	$data = mysqli_fetch_array($hasil);
	
	$pengacak = "p3ng4c4k";
	
	$passmd = md5($pengacak . md5($password));
	if ($passmd == $data['password'])
	{
		$_SESSION['level'] = $data['level'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['email'] = $data['email'];
		echo "<script>alert('Berhasil Login');window.location= '../admin/index.php';</script>";
	}
	
?>