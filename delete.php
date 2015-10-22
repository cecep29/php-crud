<?php 

	require_once('core/init.php'); 
	require_once('template/header.php'); 
	//nangkep id by get
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		//echo "id = " . $_GET['id'];

		//jalankan fungsi hapusData
		if(hapusData($id)){
			header('Location: index.php'); 
		} else {

			echo "<p class='alert alert-error'>hapus data gagal</p>";
		}
	}
?>