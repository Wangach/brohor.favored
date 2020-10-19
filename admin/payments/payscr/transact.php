<?php 
include '../../../script/database.php';

if (isset($_POST['trans'])) {
	#get the data from the form fields
	$transType = mysqli_real_escape_string($initialize, $_POST['aina']);
	$nameOfTransactor = mysqli_real_escape_string($initialize, $_POST['cusjina']);
	$amountTransacted = mysqli_real_escape_string($initialize, $_POST['kiwango']);
	$transactionDesc = mysqli_real_escape_string($initialize, $_POST['maelezo']);

	//We Fill The Data In THe Database Depending on the type of cash
	//Thiscan either be cr for credit or db for debit
	switch ($transType) {
		case 'cr':
			# code...
			break;
		
		default:
			# code...
			break;
	}

}

 ?>