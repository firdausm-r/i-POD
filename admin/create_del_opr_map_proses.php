<?php 
	require_once '../_config/config.php';
	mysqli_query($con, "DELETE FROM m_operator WHERE share_id='$_GET[share_id]'") or die (mysqli_error($con));
	echo "<script>window.location='create_opr_map.php';</script>";
?>