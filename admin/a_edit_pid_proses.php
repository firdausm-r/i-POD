<?php
	require_once '../_config/config.php';
		$id_pid 		= $_POST['id_pid'];
		$name_pid 		= $_POST['name_pid'];
		$id_machine 		= $_POST['id_machine'];
		

		$query = "UPDATE m_pid SET name_pid='$name_pid', id_machine='$id_machine' WHERE id_pid='$id_pid' ";

		$proses1 = mysqli_query($con, $query);
		echo "<script>alert('Edit PiD Data success!');window.location='a_create_pid.php';</script>";
		

?>