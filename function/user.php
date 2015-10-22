<?php 

	function run($query){
		global $connect;
		if(mysqli_query($connect, $query)){
			return true;
		}else {return false;}

	}

	function tambahData($data){
		$kunci = implode(", ", array_keys($data));

		$i = 0;
		foreach($data as $key=>$value){
			if(!is_int($value)){
				$nilaiarray[$i] ="'" .$value."'";
			}else {
				$nilaiarray[$i] = $value;
			}
			$i++;
			
		}

		$nilai = implode(", ",$nilaiarray);

		$query = "INSERT INTO users ($kunci) VALUES($nilai)";
		return run($query);
		
	}

	function editData($data, $id){
		
		$i = 0;
		foreach($data as $key=>$value){
			if(!is_int($value)){
				$nilaiarray[] = $key . " = '" . $value . "'";
			}else {
				$nilaiarray[] = $key . " = " .$value;
			}
			$i++;
		}

		$nilai = implode(" ,", $nilaiarray);
		$query = "UPDATE users SET $nilai WHERE id = $id";
		return run($query);
	}

	function hapusData($id){
		

		$query = "DELETE FROM users WHERE id = $id";
		
		return run($query);
	}

	function tampil(){
		global $connect;		

		$query = "SELECT * FROM users";
		$result = mysqli_query($connect, $query) or die('query tampil gagal');
		return $result;
	}

	function tampil_per_id($id){
		global $connect;

		$query = "SELECT * FROM users WHERE id = $id";
		$result = mysqli_query($connect, $query) or die('query tampil gagal');
		return $result;
	}



 ?>