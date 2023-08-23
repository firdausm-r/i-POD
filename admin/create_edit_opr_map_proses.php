<?php
	require_once '../_config/config.php';
		$share_id 			= $_POST['share_id'];
		$id_machine 				= $_POST['id_machine'];
		

		$query = "UPDATE m_operator SET share_id='$share_id', id_machine='$id_machine' WHERE share_id='$share_id' ";

		$proses1 = mysqli_query($con, $query);
		echo "<script>alert('Edit Opr Data success!');window.location='create_opr_map.php';</script>";
		

?>