<?php
	require_once '../_config/config.php';
	if (isset($_POST['add'])) {
		$id_ph 			= $_POST['id_ph'];
		$id_ph_tr 		= $_POST['id_ph_tr'];
		$id_wwtp 		= $_POST['id_wwtp'];
		$id_wwtp_tr 	= $_POST['id_wwtp_tr'];
		$id_header 		= $_POST['id_header'];
		$tanggal 	 	= $_POST['tanggal'];
		$bulan  		= $_POST['bulan'];
		$max_release 	= $_POST['max_release'];
		$status_ph 	 	= $_POST['status_ph'];



		mysqli_query($con, "INSERT INTO t_ph_tr  (id_ph_tr, id_header, tanggal, bulan, status_ph)
		 VALUES ('$id_ph_tr', '$id_header', '$tanggal', '$bulan', '$status_ph')") or die(mysqli_error($con));

		mysqli_query($con, "INSERT INTO t_ph  (id_ph, id_ph_tr, id_header, tanggal, bulan, status_ph)
		 VALUES ('$id_ph', '$id_ph_tr', '$id_header', '$tanggal', '$bulan', '$status_ph')") or die(mysqli_error($con));

		mysqli_query($con, "INSERT INTO tr_wwtp  (id_wwtp_tr, id_header, tanggal, bulan, max_release, status_ph)
		 VALUES ('$id_wwtp_tr', '$id_header', '$tanggal', '$bulan', '$max_release', '$status_ph')") or die(mysqli_error($con));

		mysqli_query($con, "INSERT INTO t_wwtp  (id_wwtp, id_wwtp_tr, id_header, tanggal, bulan, max_release, status_ph)
		 VALUES ('$id_wwtp', '$id_wwtp_tr', '$id_header', '$tanggal', '$bulan', '$max_release', '$status_ph')") or die(mysqli_error($con));

		echo "<script>alert('Data Create Header berhasil tersimpan, Lakukan transaksi pada Input data detail');window.location='create_detail.php';</script>";
	}
