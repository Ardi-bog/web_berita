<?php
session_start();
include"koneksi.php";
$username=$_POST['username'];
$password=$_POST['password'];
$kirim=$_POST['kirim'];

$query="SELECT * FROM tb_login WHERE username = '$username'";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);

$acak="4c4k";
if(md5($acak.md5($password).$acak)==$data['password']){
    $_SESSION['username'] = $username;
    echo "User Anda :".$_SESSION['username']."<br>";
    echo "Session ID:".session_id()."<br>";
    echo "<a href = 'index.php'>Masuk</a><br>";
    echo "<a href = 'logout.php'>Logout</a><br>";
}
else{
    echo "Login Gagal";
}

?>