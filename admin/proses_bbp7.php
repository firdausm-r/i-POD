<?php
	require_once '../_config/config.php';
	if (isset($_POST['add'])) {
		$id_header 		= $_POST['id_header'];
		$tanggal 	 	= $_POST['tanggal'];
		$minggu 		= $_POST['minggu'];
		$bulan  		= $_POST['bulan'];
		$id_motor 	 	= $_POST['id_motor'];
		$meter_awal 	= $_POST['meter_awal'];
		$meter_akhir 	= $_POST['meter_akhir'];
		$pemakaian 		= $_POST['pemakaian'];
		$pemantauan 	= $_POST['pemantauan'];
		$catatan 		= $_POST['catatan'];
		$petugas 		= $_POST['petugas'];

		mysqli_query($con, "INSERT INTO t_detail  (id_header, tanggal, minggu, bulan, id_motor, meter_awal, meter_akhir, pemakaian, pemantauan, catatan, petugas)
		 VALUES ('$id_header', '$tanggal', '$minggu', '$bulan', '$id_motor', '$meter_awal', '$meter_akhir', '$pemakaian', '$pemantauan', '$catatan', '$petugas')") or die(mysqli_error($con));

		mysqli_query($con, "INSERT INTO t_bbp7  (id_motor, id_header, tanggal, bulan, meter_awal, meter_akhir, pemakaian, pemantauan)
		 VALUES ('$id_motor', '$id_header', '$tanggal', '$bulan', '$meter_awal', '$meter_akhir', '$pemakaian', '$pemantauan')") or die(mysqli_error($con));

		echo "<script>alert('Data Meteran BBP M-7 berhasil tersimpan');window.location='create_detail.php';</script>";
	}
