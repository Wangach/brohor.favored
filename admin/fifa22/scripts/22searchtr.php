<?php
include 'database.php';

$showData = '';

//get user name
$searchTerm = strtolower(mysqli_real_escape_string($dbcon, $_POST['tn']));

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

	$showData = "<div class='custom-des'>
					<h3>$searchTerm owes $dbOrAdv</h3>
					<p>
						<a href='full_transactions.php?user=$searchTerm' target='_blank'>View Statement</a>
					</p>
				</div>";
		

		echo $showData;
}else{
	$showData = $searchTerm." Has Not Made Any Transactions this Month Or they Are Not in The Database!";
	echo $showData;
}


/*
 AND tarehe LIKE '$rightNow%'
 AND trDte LIKE '$rightNow%'

*/
?>