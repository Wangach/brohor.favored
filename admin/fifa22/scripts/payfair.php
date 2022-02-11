<?php 
	include 'database.php';
	$output = '';

	//Pay Unpaid matches All The Unpaid Matches
	$pay = "UPDATE f2fair SET paymentstat = '1' WHERE paymentstat = '0'";
	$runPay = mysqli_query($dbcon, $pay);

	if ($runPay) {
		//payment successful
		$output = 'Payment Successful';
		echo $output;
	}else{
		$output = 'Error Has Occured'.mysqli_error($dbcon);
		echo $output;
	}


 ?>