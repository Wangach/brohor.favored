<?php 

date_default_timezone_set("Africa/Nairobi");
include '../../../script/database.php';

//Predefined Variables
$output = "";

if (isset($_POST['trans'])) {
	#get the data from the form fields
	$transType = mysqli_real_escape_string($initialize, $_POST['aina']);
	$nameOfTransactor = mysqli_real_escape_string($initialize, $_POST['cusjina']);
	$amountTransacted = mysqli_real_escape_string($initialize, $_POST['kiwango']);
	$transactionDesc = mysqli_real_escape_string($initialize, $_POST['maelezo']);
	$tNow = date("h:i:sa");
	$dToday = date("d/m/Y");

	//We Fill The Data In THe Database Depending on the type of cash
	//Thiscan either be cr for credit or db for debit
	switch ($transType) {
		case 'cr':
			#This Is money coming into our account
			//Since in this case we are earning, the credit value should be +
			$moneyIn = $amountTransacted;
			$moneyOut = 0;
			$totals = $moneyIn + $moneyOut;
			//Generate A Random Value
			$random = ["A", "B", "C", "O", "Y", "W", "1", "2", "3", "5", "6"];
			$holder = "CSHIN";

			for ($i=0; $i < 6; $i++) {
				$val1 = rand(0, 9);
				$genVal = $random[$val1];
				$holder = $holder.$genVal;
			}
			//Using The Values Obtained from the above
			$mkTr = "INSERT INTO transactions(trName, trId, credit, debit, amount, trDte, trTme) VALUES('$nameOfTransactor', '$holder', '$moneyIn', '$moneyOut', '$totals', '$dToday', '$tNow')";
			$axn = mysqli_query($initialize, $mkTr);

			//Check FOR A Successful transfer
			if ($axn) {
				$output = "<script>";
				$output .= "alert('Transaction $holder Has Been Successful! Thank You!');";
				$output .= "</script>";

				echo $output;
			}else{
				/*$output = "<script>";
				$output .= "alert('Sorry But There Has Been An Error!');";
				$output .= "</script>";

				echo $output;*/
				echo mysqli_error($initialize);
			}
			break;

		case 'db':
			#This Is money getting out of our account
			//Since in this case we are earning, the credit value should be +
			$moneyIn = 0;
			$moneyOut = $amountTransacted;
			$totals = $moneyIn +- $moneyOut;
			//Generate A Random Value
			$random = ["A", "B", "C", "O", "Y", "W", "1", "2", "3", "5", "6"];
			$holder = "CSHOUT";

			for ($i=0; $i < 6; $i++) {
				$val1 = rand(0, 9);
				$genVal = $random[$val1];
				$holder = $holder.$genVal;
			}
			//Using The Values Obtained from the above
			$mkTr = "INSERT INTO transactions(trName, trId, credit, debit, amount, trDte, trTme) VALUES('$nameOfTransactor', '$holder', '$moneyIn', '$moneyOut', '$totals', '$dToday', '$tNow')";
			$axn = mysqli_query($initialize, $mkTr);

			//Check FOR A Successful transfer
			if ($axn) {
				$output = "<script>";
				$output .= "alert('Transaction $holder Has Been Successful! Thank You!');";
				$output .= "</script>";

				echo $output;
			}else{
				$output = "<script>";
				$output .= "alert('Sorry But There Has Been An Error!');";
				$output .= "</script>";

				echo $output;
			}
			break;
		default:
			$output = "<script>";
				$output .= "alert('This Operation Cannot be Performed!');";
				$output .= "</script>";

				echo $output;
			break;
	}

}

 ?>