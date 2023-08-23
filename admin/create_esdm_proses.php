<?php
	require_once '../_config/config.php';
	if (isset($_POST['add'])) {
		$id_esdm 			= $_POST['id_esdm'];
		$kepada 		 	= $_POST['kepada'];
		$nama_upt 		 	= $_POST['nama_upt'];
		$cabang	 		= $_POST['cabang'];
		$wilayah			= $_POST['wilayah'];
		$alamat 				= $_POST['alamat'];

		mysqli_query($con, "INSERT INTO m_esdm  (id_esdm, kepada, nama_upt, cabang, wilayah, alamat)
		 VALUES ('$id_esdm', '$kepada', '$nama_upt', '$cabang', '$wilayah', '$alamat')") or die(mysqli_error($con));

		echo "<script>window.location='create_esdm.php';</script>";

}
