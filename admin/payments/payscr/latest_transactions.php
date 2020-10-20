<?php 
	
	include '../../../script/database.php';

	//Fetching The latest transactions
$transGetter = "SELECT * FROM (SELECT * FROM transactions ORDER BY trDte DESC LIMIT 3) as r ORDER BY trDte";
$latestTrans = mysqli_query($initialize, $transGetter);

if (mysqli_num_rows($latestTrans) > 0) {
	while ($row = mysqli_fetch_assoc($latestTrans)) {
		#get the rows individual data
		$nameOfTransactor = $row['trName'];
		$transactionId = $row['trId'];
		$transactedAmt = $row['amount'];
		$dateOfTransaction = $row['trDte'];
	}
}

 ?>