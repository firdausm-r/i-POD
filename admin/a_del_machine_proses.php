<?php 
	require_once '../_config/config.php';
	mysqli_query($con, "DELETE FROM m_machine WHERE id_machine='$_GET[id_machine]'") or die (mysqli_error($con));
	echo "<script>window.location='a_create_machine.php';</script>";
?>