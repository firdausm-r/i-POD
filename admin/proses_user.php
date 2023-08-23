<?php
	require_once '../_config/config.php';
	if (isset($_POST['add'])) {
		$nik 			= $_POST['nik'];
		$nama 			= $_POST['nama'];
		$jabatan 		= $_POST['jabatan'];
		$departement 	= $_POST['departement'];
		$id_plant 		= $_POST['id_plant'];
		$username 		= $_POST['username'];
		$password 		= $_POST['password'];
		$level 			= $_POST['level'];
		$status_level 	= $_POST['status_level'];

		mysqli_query($con, "INSERT INTO user  (nik, nama, jabatan, departement, id_plant, username, password, level, status_level)
		 VALUES ('$nik', '$nama', '$jabatan', '$departement', '$id_plant', '$username', '$password', '$level', '$status_level')") or die(mysqli_error($con));

		echo "<script>window.location='create_user.php';</script>";

}
