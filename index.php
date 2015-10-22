<?php 
	require_once('core/init.php'); 
	require_once('template/header.php'); 
	$result = tampil();
?>


<a href="add.php" class="btn btn-primary">Tambah data</a>
<table class="table table-striped">
	<tr>
		<td>Nama</td>
		<td>Umur</td>
		<td>Password</td>
		<td>Aksi</td>

	</tr>
	

<?php while($row = mysqli_fetch_assoc($result)) :?>
	<tr>
		<td><?= $row['nama'];?></td>
		<td><?= $row['password'];?></td>
		<td><?= $row['umur'];?></td>
		<td><a href="delete.php?id=<?= $row['id'];?>" class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</a>  
			<a href="edit.php?id=<?= $row['id'];?>" class="btn btn-primary">Edit</a>
		</td>
	</tr>
<?php endwhile;?>
</table>


