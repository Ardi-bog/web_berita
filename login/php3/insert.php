<html>
<body>
	<table border="1">
		<form method="POST" action="">
			<tr>
				<td>ID</td><td> : </td><td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama Siswa</td><td> : </td><td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Email Siswa</td><td> : </td><td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="kirim" value="KIRIM"></td>
			</tr>
		</form>
	</table>
</body>
</html>

<?php

include "connect.php";
@$id=$_POST['id'];
@$nama=$_POST['nama'];
@$email=$_POST['email'];
@$kirim=$_POST['kirim'];

$query="INSERT INTO data VALUES('$id', '$nama', '$email')";

if ($kirim) {
	$hasil = mysqli_query ($conn,$query);
	echo "DATA BERHASIL DISIMPAN";

}else{
	echo "Cant Save Data";
}
?>