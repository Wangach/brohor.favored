<?php
include 'database.php';

$showData = '';

//get user name
$searchTerm = mysqli_real_escape_string($dbcon, $_POST['tn']);
$rightNow = date("m/Y");

//We want to check the loosers table first for played matches
$getLooser = "SELECT SUM(debt) AS madeni FROM f2looser WHERE looser = '$searchTerm'";
	$found = mysqli_query($dbcon, $getLooser);

	//If data relating to the query is found
	if (mysqli_num_rows($found) > 0) {
		while ($row = mysqli_fetch_assoc($found)) {
			$matchesInDebt = $row['madeni'];
			//echo $matchesInDebt;
		}
	}

//In the transactions table identify transactions made by the user
$getTransactions = "SELECT SUM(amount) AS trns FROM f2transactions WHERE trName = '$searchTerm'";
	$readDat = mysqli_query($dbcon, $getTransactions);

	if (mysqli_num_rows($readDat) > 0) {
		while ($data = mysqli_fetch_assoc($readDat)) {
			$transactionsMade = $data['trns'];

			//echo $tramsactionsMade;
		}
	}
//Calculate the debt or advances according to the results obtained from above
$dbOrAdv = $transactionsMade - $matchesInDebt;


//show all the transaction dets for the current month
$trList = "SELECT * FROM (SELECT * FROM f2transactions WHERE trName = '$searchTerm' ORDER BY id DESC LIMIT 4) as r ORDER BY id";
//$trList = "SELECT * FROM transactions WHERE trName = '$searchTerm'";
$trGt = mysqli_query($dbcon, $trList);

if (mysqli_num_rows($trGt) > 0) {
	while ($trans = mysqli_fetch_assoc($trGt)) {
		#Get The rows Data
		$transId = $trans['trId'];
		$transNme = $trans['trName'];
		$transAmt = $trans['amount'];
		$transWak = $trans['trDte'];
		$transDes = $trans['trDesc'];

		//Html Data
		$showData = "<div class='table-responsive'>";
		$showData .= "<table class='table table-dark' id='multichange'>
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
					      <th class='text text-danger'>Description</th>
					    </tr>
					  </thead>";
		$showData .= "<tbody>
						<tr>
							<td>$transNme</td>
							<td>$transAmt</td>
							<td>$transWak</td>
                            <td>$transDes</td>
						</tr>
					</tbody>";
		$showData .= "</table>";
		$showData .= "</div>";

		echo $showData;
	}
}else{
	$showData = $searchTerm." Has Not Made Any Transactions this Month Or they Are Not in The Database!";
	echo $showData;
}


/*
 AND tarehe LIKE '$rightNow%'
 AND trDte LIKE '$rightNow%'

*/
?>