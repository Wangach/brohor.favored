<?php 
	include '../../script/database.php';
	$exhibit = '';

	$gtQur = "SELECT * FROM transactions";
	$per = mysqli_query($initialize, $gtQur);

	$exhibit = mysqli_num_rows($per);

	echo $exhibit;
 ?>