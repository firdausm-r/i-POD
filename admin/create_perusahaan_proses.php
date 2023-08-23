<?php
	require_once '../_config/config.php';
	if (isset($_POST['add'])) {
		$plant_id 			= $_POST['plant_id'];
		$nama_perusahaan 	= $_POST['nama_perusahaan'];
		$alamat_perusahaan 	= $_POST['alamat_perusahaan'];
		$no_telp	 		= $_POST['no_telp'];
		$nama_cp			= $_POST['nama_cp'];
		$no_cp 				= $_POST['no_cp'];
		$lokasi_sumur 		= $_POST['lokasi_sumur'];
		$plant_manager 		= $_POST['plant_manager'];

		mysqli_query($con, "INSERT INTO m_plant  (plant_id, nama_perusahaan, alamat_perusahaan, no_telp, nama_cp, no_cp, lokasi_sumur, plant_manager)
		 VALUES ('$plant_id', '$nama_perusahaan', '$alamat_perusahaan', '$no_telp', '$nama_cp', '$no_cp', '$lokasi_sumur', '$plant_manager')") or die(mysqli_error($con));

		echo "<script>window.location='create_perusahaan.php';</script>";

}
