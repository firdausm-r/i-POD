<?php
	require_once '../_config/config.php';
	if (isset($_POST['add'])) {
		$id_sumur 		= $_POST['id_sumur'];
		$id_ph_tr 		= $_POST['id_ph_tr'];
		$id_header 		= $_POST['id_header'];
		$tanggal 	 	= $_POST['tanggal'];
		$bulan  		= $_POST['bulan'];
		$sumur_awal 	= $_POST['sumur_awal'];
		$sumur_akhir 	= $_POST['sumur_akhir'];
		$sumur_pemakaian = $_POST['sumur_pemakaian'];
		$hod_awal 		= $_POST['hod_awal'];
		$hod_akhir 		= $_POST['hod_akhir'];
		$hod_pemakaian 	= $_POST['hod_pemakaian'];
		$utility_awal 	= $_POST['utility_awal'];
		$utility_akhir 	= $_POST['utility_akhir'];
		$utility_pemakaian = $_POST['utility_pemakaian'];
		$umum_awal 		= $_POST['umum_awal'];
		$umum_akhir 	= $_POST['umum_akhir'];
		$umum_pemakaian = $_POST['umum_pemakaian'];
		$air_pakai 		= $_POST['air_pakai'];
		$tandon_awal 	= $_POST['tandon_awal'];
		$tandon_akhir 	= $_POST['tandon_akhir'];
		$tandon_pemakaian = $_POST['tandon_pemakaian'];
		$rwh_awal 		= $_POST['rwh_awal'];
		$rwh_akhir 		= $_POST['rwh_akhir'];
		$rwh_pemakaian 	= $_POST['rwh_pemakaian'];

		$petugas 		= $_POST['petugas'];
		$catatan 		= $_POST['catatan'];

		mysqli_query($con, "INSERT INTO t_sumur  (id_sumur, id_ph_tr, id_header, tanggal, bulan, sumur_awal, sumur_akhir, sumur_pemakaian, hod_awal, hod_akhir, hod_pemakaian, utility_awal, utility_akhir, utility_pemakaian, umum_awal, umum_akhir, umum_pemakaian, air_pakai, tandon_awal, tandon_akhir, tandon_pemakaian, rwh_awal, rwh_akhir, rwh_pemakaian, petugas, catatan)
		 VALUES ('$id_sumur', '$id_ph_tr', '$id_header', '$tanggal', '$bulan', '$sumur_awal', '$sumur_akhir', '$sumur_pemakaian', '$hod_awal', '$hod_akhir', '$hod_pemakaian', '$utility_awal', '$utility_akhir', '$utility_pemakaian', '$umum_awal', '$umum_akhir', '$umum_pemakaian', '$air_pakai', '$tandon_awal', '$tandon_akhir', '$tandon_pemakaian', '$rwh_awal', '$rwh_akhir', '$rwh_pemakaian', '$petugas', '$catatan')") or die(mysqli_error($con));

		echo "<script>alert('Data Sumur berhasil tersimpan');window.location='create_detail.php';</script>";
	}
