<?php 

	require_once('core/init.php'); 
	require_once('template/header.php'); 

	if(isset($_POST['submit'])){

		$data = array(
						'nama' => $_POST['nama'],
						'password' => $_POST['password'],
						'umur' => (int)$_POST['umur'],
					);
		if(tambahData($data)){
			header('Location: index.php');
		}else {
			echo "tambah data gagal";
		}
	}

 ?>

 <form action="" method="post">
 	<div class="form-group"> 
 		<label for="nama">Nama</label>
    	<input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
  </div>
  <div class="form-group"> 
 		<label for="password">Password</label>
    	<input type="text" class="form-control" name="password" placeholder="Masukan password">
  </div>
  <div class="form-group"> 
 		<label for="umur">Umur</label>
    	<input type="text" class="form-control" name="umur" placeholder="Masukan umur">
  </div>
 	
 	<button type="submit" name="submit"class="btn btn-default">Tambah data</button>
 </form>