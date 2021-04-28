<table border="1">
	<th>Id</th>
	<th>Nama</th>
	<th>Email</th>

<?php  
	
	include 'db.php';
	
	$query= " SELECT * from data ";
	$hasil = mysqli_query($conn , $query);
	$no=1;

	while ($data = mysqli_fetch_array($hasil)) {
	
?>		
	<tr>
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['email']; ?></td>
	</tr>

<?php  
}
?>