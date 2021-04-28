<?php
	session_start();
	include ("mailer/src/PHPMailer.php");
	include ("mailer/src/SMTP.php");
	include ("mailer/src/Exception.php");
	include ("koneksi.php");
	
	if(isset($_POST['lupa'])){
	    $get_email       = $_POST['email'];
		$mail            = new PHPMailer\PHPMailer\PHPMailer();
		$mail->Host      = "ssl://smtp.gmail.com";
		$mail->Mailer    = "smtp";
		$mail->SMTPAuth  = true;
		$mail->Username  = "dwirustianto01@gmail.com";
		$mail->Password  = "donywahyu123";
		$webmaster_email = "dwirustianto01@gmail.com";
		$query = mysqli_query($db,"select * from login where email='$get_email'");
		$hasil = mysqli_fetch_array($query);
		$id = $hasil['email'];
		$nama            = "Admin Codes";
		$mail->From      = $webmaster_email;
		$mail->FromName  = "Dwi Rustianto";
		$mail->addAddress($get_email);
		$mail->addReplyTo($webmaster_email);
		$mail->WordWrap  = 50;
		$mail->IsHTML(true);
		$mail->Subject   = "Lupa Password";
		$mail->Body      = "Karena Password anda terenkripsi maka reset password dilink ini : <a href='localhost/ta/reset.php?email=$id'>Reset password</a>";
		$mail->AltBody   = "";
		if(!$mail->Send()){
			echo "Mailer Error : ".$mail->ErrorInfo; 
		}
		else{
			echo "<script>alert('Cek Email untuk reset password');window.location = 'index.php';</script>";
		}
	}
?>