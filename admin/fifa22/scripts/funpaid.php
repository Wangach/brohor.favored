<?php 
	include 'database.php';
	$output = '';

	//Get All The Unpaid Matches
	$getUnpaid = "SELECT * FROM f2fair WHERE paymentstat = '0'";
	$runUnpaid = mysqli_query($dbcon, $getUnpaid);

	$output = mysqli_num_rows($runUnpaid);

	echo $output;


 ?>