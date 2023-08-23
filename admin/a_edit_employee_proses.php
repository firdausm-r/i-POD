<?php
	require_once '../_config/config.php';
		$share_id 			= $_POST['share_id'];
		$nik 				= $_POST['nik'];
		$employee_name 		= $_POST['employee_name'];
		$gol 				= $_POST['gol'];
		$neo_sku 			= $_POST['neo_sku'];
		$posisi_by_sunfish 	= $_POST['posisi_by_sunfish'];
		

		$query = "UPDATE m_employee SET nik='$nik', employee_name='$employee_name', gol='$gol', neo_sku='$neo_sku', posisi_by_sunfish='$posisi_by_sunfish' WHERE share_id='$share_id' ";

		$proses1 = mysqli_query($con, $query);
		echo "<script>alert('Edit Employee Data success!');window.location='a_create_employee.php';</script>";
		

?>