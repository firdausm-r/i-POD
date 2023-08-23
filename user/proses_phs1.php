<?php
	require_once '../_config/config.php';
		$id_ph_tr 			=$_POST['id_ph_tr'];
		$id_ph 			= $_POST['id_ph'];
		$id_wwtp		= $_POST['id_wwtp'];
		$phin1 			= $_POST['phin1'];
		$phin2 			= $_POST['phin2'];
		$phin3 			= $_POST['phin3'];
		$phin4 			= $_POST['phin4'];

		$phou1 			= $_POST['phou1'];
		$phou2 			= $_POST['phou2'];
		$phou3 			= $_POST['phou3'];
		$phou4 			= $_POST['phou4'];

		$tempin1 		= $_POST['tempin1'];
		$tempin2 		= $_POST['tempin2'];
		$tempin3 		= $_POST['tempin3'];
		$tempin4 		= $_POST['tempin4'];

		$tempou1 		= $_POST['tempou1'];
		$tempou2 		= $_POST['tempou2'];
		$tempou3 		= $_POST['tempou3'];
		$tempou4 		= $_POST['tempou4'];


		$inlet1_awal_s1 		= $_POST['inlet1_awal_s1'];
		$inlet1_akhir_s1 		= $_POST['inlet1_akhir_s1'];
		$inlet1_pemakaian_s1 	= $_POST['inlet1_pemakaian_s1'];
		
		$inlet2_awal_s1 		= $_POST['inlet2_awal_s1'];
		$inlet2_akhir_s1 		= $_POST['inlet2_akhir_s1'];
		$inlet2_pemakaian_s1 	= $_POST['inlet2_pemakaian_s1'];
		
		$total_inlet_1 			= $_POST['total_inlet_1'];
		
		$outlet_awal_s1 		= $_POST['outlet_awal_s1'];
		$outlet_akhir_s1 		= $_POST['outlet_akhir_s1'];
		$outlet_pemakaian_s1 	= $_POST['outlet_pemakaian_s1'];
		
		$release_sungai_s1 		= $_POST['release_sungai_s1'];
		

		$petugas1 		= $_POST['petugas1'];
		
		$catatan1 		= $_POST['catatan1'];
		
		$act1 			= $_POST['act1'];
		
		$wcatatan1 		= $_POST['wcatatan1'];
		$wact1 			= $_POST['wact1'];

		$query = "UPDATE t_ph SET 
			phin1='$phin1', 
			phin2='$phin2', 
			phin3='$phin3', 
			phin4='$phin4', 
			phou1='$phou1', 
			phou2='$phou2', 
			phou3='$phou3', 
			phou4='$phou4', 
			tempin1='$tempin1', 
			tempin2='$tempin2', 
			tempin3='$tempin3', 
			tempin4='$tempin4', 
			tempou1='$tempou1', 
			tempou2='$tempou2',
			tempou3='$tempou3',
			tempou4='$tempou4',
			petugas1='$petugas1',
			catatan1='$catatan1',
			act1='$act1'
		WHERE id_ph='$id_ph' ";

		$proses = mysqli_query($con, $query);
		if ($proses == true) {
			header("location:create_detail.php");
		}

		$query = "UPDATE t_wwtp SET 
			inlet1_awal_s1='$inlet1_awal_s1', 
			inlet1_akhir_s1='$inlet1_akhir_s1', 
			inlet1_pemakaian_s1='$inlet1_pemakaian_s1', 
			inlet2_awal_s1='$inlet2_awal_s1', 
			inlet2_akhir_s1='$inlet2_akhir_s1', 
			inlet2_pemakaian_s1='$inlet2_pemakaian_s1', 
			total_inlet_1='$total_inlet_1',
			outlet_awal_s1='$outlet_awal_s1',
			outlet_akhir_s1='$outlet_akhir_s1',
			outlet_pemakaian_s1='$outlet_pemakaian_s1',
			petugas1='$petugas1',
			wcatatan1='$wcatatan1',
			wact1='$wact1'
		WHERE id_wwtp='$id_wwtp' ";

		$proses = mysqli_query($con, $query);
		if ($proses == true) {
			header("location:create_detail.php");
		}
		

?>