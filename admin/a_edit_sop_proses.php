<?php
	require_once '../_config/config.php';
		$id_sop 		= $_POST['id_sop'];
		$name_sop 		= $_POST['name_sop'];
		$ver_sop 		= $_POST['ver_sop'];
		$category_sop 	= $_POST['category_sop'];
		$id_machine 	= $_POST['id_machine'];
		$status_sop 	= $_POST['status_sop'];
		

		$query = "UPDATE m_sop SET name_sop='$name_sop', ver_sop='$ver_sop', category_sop='$category_sop', id_machine='$id_machine', status_sop='$status_sop' WHERE id_sop='$id_sop' ";

		$proses1 = mysqli_query($con, $query);
		echo "<script>alert('Edit SOP Data success!');window.location='a_create_sop.php';</script>";
		

?>