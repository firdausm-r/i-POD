<?php
	require_once '../_config/config.php';
		$id_wiring 		= $_POST['id_wiring'];
		$name_wiring 		= $_POST['name_wiring'];
		$id_machine 		= $_POST['id_machine'];
		

		$query = "UPDATE m_wiring SET name_wiring='$name_wiring', id_machine='$id_machine' WHERE id_wiring='$id_wiring' ";

		$proses1 = mysqli_query($con, $query);
		echo "<script>alert('Edit Wiring Data success!');window.location='a_create_wiring.php';</script>";
		

?>