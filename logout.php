<?php
	session_start();
	
	unset($_SESSION['username']);
	unset($_SESSION['level']);
	
	session_destroy();
	echo "<script>alert('Berhasil Logout');window.location= 'index.php';</script>";
?>