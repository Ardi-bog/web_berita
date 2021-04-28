<html>
<table border="1">
	<th>No</th>
	<th>Nama</th>
	<th>Email</th>

<?php  
	
	include 'koneksi.php';
	
	$query= 'select * from data';
	$hasil= msqli_query($conn , $query);
	$no=1;

	while ($data = mysqli_fetch_array($hasil)) {

	
?>		
	<tr>
		<td><?php echo @id; ?></td>
		<td><?php echo @data['nama']; ?></td>
		<td><?php echo @data['email']; ?></td>
	</tr>
	
<?php  
}
?>
</table>
</html>