<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password1 = $_POST['pass1'];
	$password2 = $_POST['pass2'];
	$level = "user";
	
	if($password1 == $password2){
		
	include "koneksi.php";
	
	$pengacak= "p3ng4c4k";
	
	$passmd = md5($pengacak . md5($password1));
	
	$query = "INSERT INTO tb_user VALUES('$username', '$passmd', '$level','$email')";
	$hasil = mysqli_query($koneksi,$query);
	
	if($hasil) echo "<script>alert('Berhasil Register');window.location= 'login.php';</script>";
	else echo "Username sudah ada yang memiliki";
	}
	else echo "Password yang dimasukkan tidak sama";
?>