<?php
include 'database.php';
    $transType = mysqli_real_escape_string($dbcon, $_POST['txnType']);
	$nameOfTransactor = mysqli_real_escape_string($dbcon, $_POST['cusjina']);
	$amountTransacted = mysqli_real_escape_string($dbcon, $_POST['kiwango']);
    $paymentMethod = mysqli_real_escape_string($dbcon, $_POST['txnMode']);
	$transactionDesc = mysqli_real_escape_string($dbcon, $_POST['maelezo']);
	// $tNow = date("h:i:sa");
	// $dToday = date("d/m/Y");

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
			$random = ["I", "J", "K", "L", "M", "N", "9", "8", "7", "6", "5"];
			$holder = "CSHIN";

			for ($i=0; $i < 6; $i++) {
				$val1 = rand(0, 9);
				$genVal = $random[$val1];
				$holder = $holder.$genVal;
			}
			//Using The Values Obtained from the above
			$mkTr = "INSERT INTO f2transactions(trName, trId, credit, debit, amount, pmeth, trDesc) 
            VALUES('$nameOfTransactor', '$holder', '$moneyIn', '$moneyOut', '$totals',  '$paymentMethod', '$transactionDesc')";
			$axn = mysqli_query($dbcon, $mkTr);

			//Check FOR A Successful transfer
			if ($axn) {
				echo "Transaction "."<strong class='text text-success'>".$holder."</strong>" . "  Has Been Successful! Thank You!";
			}else{
				echo mysqli_error($dbcon);
			}
			break;

		case 'db':
			#This Is money getting out of our account
			//Since in this case we are earning, the credit value should be +
			$moneyIn = 0;
			$moneyOut = $amountTransacted;
			$totals = $moneyIn +- $moneyOut;
			//Generate A Random Value
			$random = ["U", "V", "W", "X", "Y", "Z", "1", "3", "5", "7", "9"];
			$holder = "CSHOUT";

			for ($i=0; $i < 6; $i++) {
				$val1 = rand(0, 9);
				$genVal = $random[$val1];
				$holder = $holder.$genVal;
			}
			//Using The Values Obtained from the above
			$mkTr = "INSERT INTO f2transactions(trName, trId, credit, debit, amount, pmeth, trDesc)
             VALUES('$nameOfTransactor', '$holder', '$moneyIn', '$moneyOut', '$totals', '$paymentMethod', '$transactionDesc')";
			$axn = mysqli_query($dbcon, $mkTr);

			//Check FOR A Successful transfer
			if ($axn) {
				echo "Transaction "."<strong class='text text-danger'>".$holder."</strong>" . "  Has Been Successful! Thank You!";
			}else{
				echo "Sorry But There Has Been An Error!";
			}
			break;
		default:
				echo "This Operation Cannot be Performed!";
			break;
	}
?>