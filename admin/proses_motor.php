<?php
	require_once '../_config/config.php';
	if (isset($_POST['add'])) {
		$id_motor 		 = $_POST['id_motor'];
		$nama_motor 	 = $_POST['nama_motor'];
		$deskripsi_motor = $_POST['deskripsi_motor'];
		$kategori_motor  = $_POST['kategori_motor'];
		$area_motor 	 = $_POST['area_motor'];
		$id_plant 		 = $_POST['id_plant'];
		$status_motor 	 = $_POST['status_motor'];

		mysqli_query($con, "INSERT INTO t_meteran  (id_motor, nama_motor, deskripsi_motor, kategori_motor, area_motor, id_plant, status_motor)
		 VALUES ('$id_motor', '$nama_motor', '$deskripsi_motor', '$kategori_motor', '$area_motor', '$id_plant', '$status_motor')") or die(mysqli_error($con));

		mysqli_query($con, "INSERT INTO t_meteran_all  (id_motor, id_plant)
		 VALUES ('$id_motor', '$id_plant')") or die(mysqli_error($con));

		echo "<script>window.location='create_motor.php';</script>";

}
