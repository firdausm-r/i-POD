<?php
	require_once '../_config/config.php';
	if (isset($_POST['add'])) {
		$share_id 		= $_POST['share_id'];
		$nik 		= $_POST['nik'];
		$employee_name 	 	= $_POST['employee_name'];
		$gol  		= $_POST['gol'];
		$neo_sku 	 	= $_POST['neo_sku'];

		$posisi_by_sunfish = $_POST['posisi_by_sunfish'];

		$cek = mysqli_num_rows(mysqli_query($con, "SELECT * FROM m_employee WHERE share_id='$share_id'"));
		if ($cek > 0) {
			echo "<script>window.alert('Share Id / Employee name is registered in the database, the transaction is reject!')
			window.location='a_create_employee.php'</script>";
		} else{
			mysqli_query($con, "INSERT INTO m_employee  (share_id, nik, employee_name, gol, neo_sku, posisi_by_sunfish)
			 VALUES ('$share_id', '$nik', '$employee_name', '$gol', '$neo_sku', '$posisi_by_sunfish')") or die(mysqli_error($con));

			echo "<script>alert('Insert New Employee success!');window.location='a_create_employee.php';</script>";
		}
	}
?>
