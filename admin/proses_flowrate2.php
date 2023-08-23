<?php
	require_once '../_config/config.php';
	if (isset($_POST['add'])) {
		$name_flowrate 	= $_POST['name_flowrate'];
		$id_header 		= $_POST['id_header'];
		$tanggal 	 	= $_POST['tanggal'];
		$bulan  		= $_POST['bulan'];
		$conductivity 	= $_POST['conductivity'];
		$flowrate 		= $_POST['flowrate'];
		$ph_sumber 		= $_POST['ph_sumber'];
		$temp_sumber 	= $_POST['temp_sumber'];
		$status_flowrate = $_POST['status_flowrate'];
		$petugas 		= $_POST['petugas'];

		mysqli_query($con, "INSERT INTO t_flowrate  (name_flowrate, id_header, tanggal, bulan, conductivity, flowrate, ph_sumber, temp_sumber, status_flowrate, petugas)
		 VALUES ('$name_flowrate', '$id_header', '$tanggal', '$bulan', '$conductivity', '$flowrate', '$ph_sumber', '$temp_sumber', '$status_flowrate', '$petugas')") or die(mysqli_error($con));

		echo "<script>alert('Data flowrate berhasil tersimpan');window.location='create_detail.php';</script>";
	}
