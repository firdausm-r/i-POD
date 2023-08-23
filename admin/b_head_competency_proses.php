<?php
	require_once '../_config/config.php';
	if (isset($_POST['add'])) {
		$id_competency 		= $_POST['id_competency'];
		$title_competency 	= $_POST['title_competency'];
		$id_machine 	 	= $_POST['id_machine'];
		$status_competency  = $_POST['status_competency'];

		mysqli_query($con, "INSERT INTO m_competency  (id_competency, title_competency, id_machine, status_competency)
		 VALUES ('$id_competency', '$title_competency', '$id_machine', '$status_competency')") or die(mysqli_error($con));

		echo "<script>alert('Insert Head Successful');window.location='b_head_competency.php';</script>";
	}
?>