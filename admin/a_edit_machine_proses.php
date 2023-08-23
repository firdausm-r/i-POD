<?php
	require_once '../_config/config.php';
		$id_machine 		= $_POST['id_machine'];
		$name_machine 		= $_POST['name_machine'];
		$since_machine 		= $_POST['since_machine'];
		$made_machine 		= $_POST['made_machine'];
		$capacity_machine 	= $_POST['capacity_machine'];
		$energy_machine 	= $_POST['energy_machine'];
		$electric_machine 	= $_POST['electric_machine'];
		$lp_machine 		= $_POST['lp_machine'];
		$hp_machine 		= $_POST['hp_machine'];
		$building 			= $_POST['building']; 
		$line_machine 		= $_POST['line_machine'];
		

		$query = "UPDATE m_machine SET name_machine='$name_machine', since_machine='$since_machine', made_machine='$made_machine', capacity_machine='$capacity_machine', energy_machine='$energy_machine', electric_machine='$electric_machine', lp_machine='$lp_machine', hp_machine='$hp_machine', building='$building', line_machine='$line_machine' WHERE id_machine='$id_machine' ";

		$proses1 = mysqli_query($con, $query);
		echo "<script>alert('Edit Machine Data success!');window.location='a_create_machine.php';</script>";
		

?>