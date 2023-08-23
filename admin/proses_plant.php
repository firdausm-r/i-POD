<?php
	require_once '../_config/config.php';
	if (isset($_POST['add'])) {
		$id_plant 			= $_POST['id_plant'];
		$plant_name 		= $_POST['plant_name'];
		$status_plant 		= $_POST['status_plant'];

		mysqli_query($con, "INSERT INTO t_plant  (id_plant, plant_name, status_plant)
		 VALUES ('$id_plant', '$plant_name', '$status_plant')") or die(mysqli_error($con));

		echo "<script>window.location='create_plant.php';</script>";

}
