<?php
	require_once '../_config/config.php';
		$id_ph_tr 	=$_POST['id_ph_tr'];
		$id_ph 		= $_POST['id_ph'];
		$id_wwtp	= $_POST['id_wwtp'];
		$phin5 		= $_POST['phin5'];
		$phin6 		= $_POST['phin6'];
		$phin7 		= $_POST['phin7'];
		$phin8 		= $_POST['phin8'];

		$phou5 		= $_POST['phou5'];
		$phou6 		= $_POST['phou6'];
		$phou7 		= $_POST['phou7'];
		$phou8 		= $_POST['phou8'];

		$tempin5 	= $_POST['tempin5'];
		$tempin6 	= $_POST['tempin6'];
		$tempin7 	= $_POST['tempin7'];
		$tempin8 	= $_POST['tempin8'];

		$tempou5 	= $_POST['tempou5'];
		$tempou6 	= $_POST['tempou6'];
		$tempou7 	= $_POST['tempou7'];
		$tempou8 	= $_POST['tempou8'];


		$inlet1_awal_s2 		= $_POST['inlet1_awal_s2'];
		$inlet1_akhir_s2 		= $_POST['inlet1_akhir_s2'];
		$inlet1_pemakaian_s2 	= $_POST['inlet1_pemakaian_s2'];
		
		$inlet2_awal_s2 		= $_POST['inlet2_awal_s2'];
		$inlet2_akhir_s2 		= $_POST['inlet2_akhir_s2'];
		$inlet2_pemakaian_s2 	= $_POST['inlet2_pemakaian_s2'];
		
		$total_inlet_2 			= $_POST['total_inlet_2'];
		
		$outlet_awal_s2 		= $_POST['outlet_awal_s2'];
		$outlet_akhir_s2 		= $_POST['outlet_akhir_s2'];
		$outlet_pemakaian_s2 	= $_POST['outlet_pemakaian_s2'];
		
		$release_sungai_s2 		= $_POST['release_sungai_s2'];
		

		$petugas2 		= $_POST['petugas2'];
		
		$catatan2 		= $_POST['catatan2'];
		
		$act2 			= $_POST['act2'];
		
		$wcatatan2 		= $_POST['wcatatan2'];
		$wact2 			= $_POST['wact2'];

		$query = "UPDATE t_ph SET 
			phin5='$phin5', 
			phin6='$phin6', 
			phin7='$phin7', 
			phin8='$phin8', 
			phou5='$phou5', 
			phou6='$phou6', 
			phou7='$phou7', 
			phou8='$phou8', 
			tempin5='$tempin5', 
			tempin6='$tempin6', 
			tempin7='$tempin7', 
			tempin8='$tempin8', 
			tempou5='$tempou5', 
			tempou6='$tempou6',
			tempou7='$tempou7',
			tempou8='$tempou8',
			petugas2='$petugas2',
			catatan2='$catatan2',
			act2='$act2'
		WHERE id_ph='$id_ph' ";

		$proses = mysqli_query($con, $query);
		if ($proses == true) {
			header("location:create_detail.php");
		}

		$query = "UPDATE t_wwtp SET 
			inlet1_awal_s2 		='$inlet1_awal_s2', 
			inlet1_akhir_s2		='$inlet1_akhir_s2', 
			inlet1_pemakaian_s2	='$inlet1_pemakaian_s2', 
			inlet2_awal_s2		='$inlet2_awal_s2', 
			inlet2_akhir_s2		='$inlet2_akhir_s2', 
			inlet2_pemakaian_s2	='$inlet2_pemakaian_s2', 
			total_inlet_2		='$total_inlet_2',
			outlet_awal_s2		='$outlet_awal_s2',
			outlet_akhir_s2		='$outlet_akhir_s2',
			outlet_pemakaian_s2	='$outlet_pemakaian_s2',
			petugas2			='$petugas2',
			wcatatan2			='$wcatatan2',
			wact2				='$wact2'
		WHERE id_wwtp='$id_wwtp' ";

		$proses = mysqli_query($con, $query);
		if ($proses == true) {
			header("location:create_detail.php");
		}
?>