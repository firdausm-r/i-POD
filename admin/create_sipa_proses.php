<?php
	require_once '../_config/config.php';
	if (isset($_POST['add'])) {
		$no_sipa 			= $_POST['no_sipa'];
		$sumber 			= $_POST['sumber'];
		$plant_id 			= $_POST['plant_id'];
		$nama_perusahaan 	= $_POST['nama_perusahaan'];
		$alamat_perusahaan 	= $_POST['alamat_perusahaan'];
		$no_telp	 		= $_POST['no_telp'];
		$nama_cp			= $_POST['nama_cp'];
		$no_cp 				= $_POST['no_cp'];
		$lokasi_pengambilan = $_POST['lokasi_pengambilan'];
		$tanggal_sipa 		= $_POST['tanggal_sipa'];
		$titik_sumur 		= $_POST['titik_sumur'];
		$koordinat_b 		= $_POST['koordinat_b'];
		$koordinat_l 		= $_POST['koordinat_l'];

		mysqli_query($con, "INSERT INTO m_sipa  (no_sipa, sumber, plant_id, nama_perusahaan, alamat_perusahaan, no_telp, nama_cp, no_cp, lokasi_pengambilan, tanggal_sipa, titik_sumur, koordinat_b, koordinat_l)
		 VALUES ('$no_sipa', '$sumber', '$plant_id', '$nama_perusahaan', '$alamat_perusahaan', '$no_telp', '$nama_cp', '$no_cp', '$lokasi_pengambilan', '$tanggal_sipa', '$titik_sumur', '$koordinat_b', '$koordinat_l')") or die(mysqli_error($con));

		echo "<script>window.location='create_sipa.php';</script>";

}
