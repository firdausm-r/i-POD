<?php
	require_once '../_config/config.php';
	if (isset($_POST['add'])) {
		$id_header 			= $_POST['id_header'];
		$tanggal_header 	= $_POST['tanggal_header'];
		$minggu_header 		= $_POST['minggu_header'];
		$bulan_header 		= $_POST['bulan_header'];
		$periode_header 	= $_POST['periode_header'];

		$sumber2_awal 		= $_POST['sumber2_awal'];
		$sumber3a_awal 		= $_POST['sumber3a_awal'];
		$sumber3b_awal 		= $_POST['sumber3b_awal'];
		$sumber4_awal 		= $_POST['sumber4_awal'];
		$sumber5_awal 		= $_POST['sumber5_awal'];

		$overflow2_awal 	= $_POST['overflow2_awal'];
		$overflow3a_awal 	= $_POST['overflow3a_awal'];
		$overflow3b_awal 	= $_POST['overflow3b_awal'];
		$overflow4_awal 	= $_POST['overflow4_awal'];

		$mks5_awal 			= $_POST['mks5_awal'];
		$mks6_awal 			= $_POST['mks6_awal'];
		$mks12_awal 		= $_POST['mks12_awal'];
		$mks26_awal			= $_POST['mks26_awal'];
		$bbp7_awal 			= $_POST['bbp7_awal'];
		$bbp13_awal			= $_POST['bbp13_awal'];

		$mas1_awal 			= $_POST['mas1_awal'];
		$mas2_awal 			= $_POST['mas2_awal'];
		$mas3_awal 			= $_POST['mas3_awal'];
		$mas4_awal 			= $_POST['mas4_awal'];
		$mas20_awal 		= $_POST['mas20_awal'];
		$mas21_awal 		= $_POST['mas21_awal'];
		$mas22_awal 		= $_POST['mas22_awal'];
		$mas23_awal 		= $_POST['mas23_awal'];
		$mas24_awal 		= $_POST['mas24_awal'];
		$mas25_awal 		= $_POST['mas25_awal'];

		mysqli_query($con, "INSERT INTO t_header  (id_header, tanggal_header, minggu_header, bulan_header, periode_header, sumber2_awal, sumber3a_awal, sumber3b_awal, sumber4_awal, sumber5_awal, overflow2_awal, overflow3a_awal, overflow3b_awal, overflow4_awal, mks5_awal, mks6_awal, mks12_awal, mks26_awal, bbp7_awal, bbp13_awal, mas1_awal, mas2_awal, mas3_awal, mas4_awal, mas20_awal, mas21_awal, mas22_awal, mas23_awal, mas24_awal, mas25_awal)
		 VALUES ('$id_header', '$tanggal_header', '$minggu_header', '$bulan_header', '$periode_header', '$sumber2_awal', '$sumber3a_awal', '$sumber3b_awal', '$sumber4_awal', '$sumber5_awal', '$overflow2_awal', '$overflow3a_awal', '$overflow3b_awal', '$overflow4_awal', '$mks5_awal', '$mks6_awal', '$mks12_awal', '$mks26_awal', '$bbp7_awal', '$bbp13_awal', '$mas1_awal', '$mas2_awal', '$mas3_awal', '$mas4_awal', '$mas20_awal', '$mas21_awal', '$mas22_awal', '$mas23_awal', '$mas24_awal', '$mas25_awal')") or die(mysqli_error($con));

		echo "<script>window.location='create_header.php';</script>";

}
