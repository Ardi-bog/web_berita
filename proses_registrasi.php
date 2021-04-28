<?php
    include"koneksi.php";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $ulang_password=$_POST['konfirmasi'];
    $kirim=$_POST['kirim'];
    //acak pass
    $acak="4c4k";
    $password_acak=md5($acak.md5($password).$acak);
    if($password = $ulang_password){ 
    if($kirim){
        $query="INSERT INTO tb_login VALUES('$username','$password_acak')";
        $hasil=mysqli_query($koneksi,$query);
            echo "Registrasi User Berhasil<br>";
            echo"<a href='login.php'>Login User</a>";
    }else{
        echo "Registrasi User Gagal";
    }
}
?>