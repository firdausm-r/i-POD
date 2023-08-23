<?php
	require_once '../_config/config.php';
	if (isset($_POST['add'])) {
		$id_machine 		= $_POST['id_machine'];
		$name_machine 		= $_POST['name_machine'];
		$since_machine 		= $_POST['since_machine'];
		$made_machine 		= $_POST['made_machine'];
		$capacity_machine 	= $_POST['capacity_machine'];
		$energy_machine 	= $_POST['energy_machine'];
		$electric_machine 	= $_POST['electric_machine'];
		$lp_machine 		= $_POST['lp_machine'];
		$hp_machine 		= $_POST['hp_machine'];
		$building 			= $_POST['building'];
		$line_machine 		= $_POST['line_machine'];
		$gambar 			= $_FILES['gambar']['name'];

		if($gambar != "") {
			$ekstensi_diperbolehkan = array('png','jpg'); 
			$x = explode('.', $gambar); 
			$ekstensi = strtolower(end($x));
			$file_tmp = $_FILES['gambar']['tmp_name'];   
			$angka_acak     = rand(1,999);
			$kode 		= 'Mc';
			$nama_gambar_baru = $kode.'-'.$gambar; 
		    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
		        move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 
		        $query = "INSERT INTO m_machine (id_machine, name_machine, since_machine, made_machine, capacity_machine, energy_machine, electric_machine, lp_machine, hp_machine, building, line_machine, gambar) VALUES ('$id_machine', '$name_machine', '$since_machine', '$made_machine', '$capacity_machine', '$energy_machine', '$electric_machine', '$lp_machine', '$hp_machine', '$building', '$line_machine', '$nama_gambar_baru')";
		        $result = mysqli_query($con, $query);
		        if(!$result){
		            die ("Query gagal dijalankan: ".mysqli_errno($con).
		                " - ".mysqli_error($con));
		        } else {
		            echo "<script>alert('Data berhasil ditambah.');window.location='a_create_machine.php';</script>";
		            }

		        } else {     
		            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='a_create_machine.php';</script>";
		        }
		} else {
		   	$query = "INSERT INTO m_machine (id_machine, name_machine, since_machine, made_machine, capacity_machine, energy_machine, electric_machine, lp_machine, hp_machine, building, line_machine, gambar) VALUES ('$id_machine', '$name_machine', '$since_machine', '$made_machine', '$capacity_machine', '$energy_machine', '$electric_machine', '$lp_machine', '$hp_machine', '$building', '$line_machine', null)";
		    $result = mysqli_query($con, $query);
		        if(!$result){
		            die ("Query gagal dijalankan: ".mysqli_errno($con).
		                           " - ".mysqli_error($con));
		        } else {
		            echo "<script>alert('Data berhasil ditambah.');window.location='a_create_machine.php';</script>";
		    }
		}

	}
