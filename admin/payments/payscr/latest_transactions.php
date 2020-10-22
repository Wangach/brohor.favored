<?php 
$showData = '';
	
	include '../../script/database.php';

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
		$tmeOfTransaction = $row['trTme'];
		$valOfCr = $row['credit'];
		$valOfDb = $row['debit'];

		/*Display The Results Depending on thecredit or debit value
		//Will do this later since I am on a deadline RN
		foreach ($row as $key => $value) {
			print_r($key . $value);
		}*/
		//html data
		$showData = "<h4 id='shrink'>Latest transactions</h4>";
		$showData .= "<table class='table table-dark' id='multichange'>";
		$showData .= "
					<thead>
					    <tr>
					      <th scope='col'>Transaction Id</th>
					      <th scope='col'>Transactor</th>
					      <th scope='col'>Amount</th>
					      <th scope='col'>Transaction Date</th>
					      <th class='text text-danger'>Transaction Time</th>
					    </tr>
					  </thead>";
		$showData .= "<tbody>
						<tr>
							<td><a class='text-lg text-warning' href='#'>$transactionId</a></td>
							<td>$nameOfTransactor</td>
							<td>$transactedAmt</td>
							<td>$dateOfTransaction</td>
							<td>$tmeOfTransaction</td>
						</tr>
					</tbody>";
		$showData .= "</table>";

		echo $showData;
	}
}

 ?>