<?php
	require_once '../_config/config.php';
		$id_ph_tr 	=$_POST['id_ph_tr'];
		$id_ph 		= $_POST['id_ph'];
		$id_wwtp	= $_POST['id_wwtp'];
		$phin9 		= $_POST['phin9'];
		$phin10 	= $_POST['phin10'];
		$phin11 	= $_POST['phin11'];
		$phin12 	= $_POST['phin12'];

		$phou9 		= $_POST['phou9'];
		$phou10 	= $_POST['phou10'];
		$phou11 	= $_POST['phou11'];
		$phou12 	= $_POST['phou12'];

		$tempin9 	= $_POST['tempin9'];
		$tempin10 	= $_POST['tempin10'];
		$tempin11 	= $_POST['tempin11'];
		$tempin12 	= $_POST['tempin12'];

		$tempou9 	= $_POST['tempou9'];
		$tempou10 	= $_POST['tempou10'];
		$tempou11 	= $_POST['tempou11'];
		$tempou12 	= $_POST['tempou12'];


		$inlet1_awal_s3 		= $_POST['inlet1_awal_s3'];
		$inlet1_akhir_s3 		= $_POST['inlet1_akhir_s3'];
		$inlet1_pemakaian_s3 	= $_POST['inlet1_pemakaian_s3'];
		
		$inlet2_awal_s3 		= $_POST['inlet2_awal_s3'];
		$inlet2_akhir_s3 		= $_POST['inlet2_akhir_s3'];
		$inlet2_pemakaian_s3 	= $_POST['inlet2_pemakaian_s3'];
		
		$total_inlet_3 			= $_POST['total_inlet_3'];
		
		$outlet_awal_s3 		= $_POST['outlet_awal_s3'];
		$outlet_akhir_s3 		= $_POST['outlet_akhir_s3'];
		$outlet_pemakaian_s3 	= $_POST['outlet_pemakaian_s3'];
		
		$release_sungai_s3 		= $_POST['release_sungai_s3'];
		

		$petugas3 		= $_POST['petugas3'];
		
		$catatan3 		= $_POST['catatan3'];
		
		$act3 			= $_POST['act3'];
		
		$wcatatan3 		= $_POST['wcatatan3'];
		$wact3 			= $_POST['wact3'];

		$query = "UPDATE t_ph SET 
			phin9='$phin9', 
			phin10='$phin10', 
			phin11='$phin11', 
			phin12='$phin12', 
			phou9='$phou9', 
			phou10='$phou10', 
			phou11='$phou11', 
			phou12='$phou12', 
			tempin9='$tempin9', 
			tempin10='$tempin10', 
			tempin11='$tempin11', 
			tempin12='$tempin12', 
			tempou9='$tempou9', 
			tempou10='$tempou10',
			tempou11='$tempou11',
			tempou12='$tempou12',
			petugas3='$petugas3',
			catatan3='$catatan3',
			act3='$act3'
		WHERE id_ph='$id_ph' ";

		$proses = mysqli_query($con, $query);
		if ($proses == true) {
			header("location:create_detail.php");
		}

		$query = "UPDATE t_wwtp SET 
			inlet1_awal_s3 		='$inlet1_awal_s3', 
			inlet1_akhir_s3		='$inlet1_akhir_s3', 
			inlet1_pemakaian_s3	='$inlet1_pemakaian_s3', 
			inlet2_awal_s3		='$inlet2_awal_s3', 
			inlet2_akhir_s3		='$inlet2_akhir_s3', 
			inlet2_pemakaian_s3	='$inlet2_pemakaian_s3', 
			total_inlet_3		='$total_inlet_3',
			outlet_awal_s3		='$outlet_awal_s3',
			outlet_akhir_s3		='$outlet_akhir_s3',
			outlet_pemakaian_s3	='$outlet_pemakaian_s3',
			petugas3			='$petugas3',
			wcatatan3			='$wcatatan3',
			wact3				='$wact3'
		WHERE id_wwtp='$id_wwtp' ";

		$proses = mysqli_query($con, $query);
		if ($proses == true) {
			header("location:create_detail.php");
		}
?>