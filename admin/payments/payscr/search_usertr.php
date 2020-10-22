<?php 
date_default_timezone_set("Africa/Nairobi");
include '../../../script/database.php';

//get user name
$searchTerm = mysqli_real_escape_string($initialize, $_POST['cusname']);
$rightNow = date("d.y)";

//We want to check the loosers table first for played matches
$getLooser = "SELECT SUM(debt) AS madeni FROM lmatches WHERE looser = '$searchTerm' AND tarehe LIKE '$rightNow%'";
$found = mysqli_query($initialize, $getLooser);

//If data relating to the query is found
if (mysqli_num_rows($found) > 0) {
	while ($row = mysqli_fetch_assoc($found)) {
		$matchesInDebt = $row['madeni'];
	}
}

//In the transactions table identify transactions made by the user
$getTransactions = "SELECT SUM(amount) AS trns FROM transactions WHERE trName = '$searchTerm' AND tarehe LIKE '$rightNow%'";
$readDat = mysqli_query($initialize, $getTransactions);

if (mysqli_num_rows($readDat) > 0) {
	while ($data = mysqli_fetch_assoc($readDat)) {
		$tramsactionsMade = $data[]
	}
}
 ?>