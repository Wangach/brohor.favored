<?php 
date_default_timezone_set("Africa/Nairobi");
include '../../../script/database.php';

$showData = '';

//get user name
$searchTerm = mysqli_real_escape_string($initialize, $_POST['cusname']);
$rightNow = date("m/Y");

//We want to check the loosers table first for played matches
$getLooser = "SELECT SUM(debt) AS madeni FROM lmatches WHERE looser = '$searchTerm'";
	$found = mysqli_query($initialize, $getLooser);

	//If data relating to the query is found
	if (mysqli_num_rows($found) > 0) {
		while ($row = mysqli_fetch_assoc($found)) {
			$matchesInDebt = $row['madeni'];
			//echo $matchesInDebt;
		}
	}

//In the transactions table identify transactions made by the user
$getTransactions = "SELECT SUM(amount) AS trns FROM transactions WHERE trName = '$searchTerm'";
	$readDat = mysqli_query($initialize, $getTransactions);

	if (mysqli_num_rows($readDat) > 0) {
		while ($data = mysqli_fetch_assoc($readDat)) {
			$transactionsMade = $data['trns'];

			//echo $tramsactionsMade;
		}
	}
//Calculate the debt or advances according to the results obtained from above
$dbOrAdv = $transactionsMade - $matchesInDebt;


//show all the transaction dets for the current month
$trList = "SELECT * FROM (SELECT * FROM transactions ORDER BY trDte DESC LIMIT 4) as r ORDER BY trDte";
//$trList = "SELECT * FROM transactions WHERE trName = '$searchTerm'";
$trGt = mysqli_query($initialize, $trList);

if (mysqli_num_rows($trGt) > 0) {
	while ($trans = mysqli_fetch_assoc($trGt)) {
		#Get The rows Data
		$transId = $trans['trId'];
		$transNme = $trans['trName'];
		$transAmt = $trans['amount'];
		$transTar = $trans['trDte'];
		$transWak = $trans['trTme'];

		//Html Data
		$showData = "<table class='table table-dark' id='multichange'>
						<caption>$transNme Transactions</caption>";
		$showData .= "
					<thead>
						<tr>
							<td colspan='1' class='bg-primary'>Debt / Advance: $dbOrAdv</td>
							<td colspan='1' class='bg-danger'>- For Debt, + For Advance</td>
							<td colspan='3' class='bg-warning'><a href='view_fulltr.php?user=$transNme&month=$rightNow' target='_blank'>View Full Statement</a></td>
					  	</tr>
					    <tr>
					      <th scope='col'>Transactor</th>
					      <th scope='col'>Amount</th>
					      <th scope='col'>Transaction Date</th>
					      <th class='text text-danger'>Transaction Time</th>
					    </tr>
					  </thead>";
		$showData .= "<tbody>
						<tr>
							<td>$transNme</td>
							<td>$transAmt</td>
							<td>$transTar</td>
							<td>$transWak</td>
						</tr>
					</tbody>";
		$showData .= "</table>";

		echo $showData;
	}
}


/*
 AND tarehe LIKE '$rightNow%'
 AND trDte LIKE '$rightNow%'

*/
 ?>