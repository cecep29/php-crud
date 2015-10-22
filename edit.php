<?php 

	require_once('core/init.php'); 
	require_once('template/header.php'); 

	$id = $_GET['id'];
	$result = tampil_per_id($id);
	//print_r($result);
	if(isset($_POST['submit'])){
		$data = array (
							'nama' 		=> $_POST['nama'],
							'password'  => $_POST['password'],
							'umur'		=> $_POST['umur']
			);
		if(editData($data, $id)){
			header('Location: index.php');
		}else {
			echo "Edit data gagal";
		}
	}



?>

<h3>Edit Data</h3>
<?php while($row = mysqli_fetch_assoc($result)): ?> 
<form action="" method="post">
 	<div class="form-group"> 
 		<label for="nama">Nama</label>
    	<input type="text" class="form-control" name="nama" value="<?= $row['nama'];?>">
  </div>
  <div class="form-group"> 
 		<label for="password">Password</label>
    	<input type="text" class="form-control" name="password"  value="<?= $row['password'];?>">
  </div>
  <div class="form-group"> 
 		<label for="umur">Umur</label>
    	<input type="text" class="form-control" name="umur"  value="<?= $row['umur'];?>" >
  </div>
 <?php endwhile;?>
 	<button type="submit" name="submit"class="btn btn-default">Edit data</button>
 </form>