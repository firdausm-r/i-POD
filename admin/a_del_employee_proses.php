<?php 
	require_once '../_config/config.php';
	mysqli_query($con, "DELETE FROM m_employee WHERE share_id='$_GET[share_id]'") or die (mysqli_error($con));
	echo "<script>window.location='a_create_employee.php';</script>";
?>