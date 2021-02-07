<?php

$showData = '';
	
include '../../script/database.php';


$matchGetter = "SELECT * FROM (SELECT * FROM lmatches ORDER BY no DESC LIMIT 4) as r ORDER BY no";
$latestMatches = mysqli_query($initialize, $matchGetter);

if (mysqli_num_rows($latestMatches) > 0) {
	while ($row = mysqli_fetch_assoc($latestMatches)) {
		#get the rows individual data
		$hmPl = $row['Hplayer'];
		$awPl = $row['Aplayer'];
		$hmTm = $row['Hteam'];
		$awTm = $row['Ateam'];
		$loss = $row['looser'];
		$wnr = $row['winner'];
		$mId = $row['matchid'];

		/*Display The Results Depending on thecredit or debit value
		//Will do this later since I am on a deadline RN
		foreach ($row as $key => $value) {
			print_r($key . $value);
		}*/
		//html data
		$showData = "<table class='table table-dark' id='multichange'>
						<caption>Looser Recent Matches</caption>";
		$showData .= "
					<thead>
					    <tr>
					      <th scope='col'>H. Player</th>
					      <th scope='col'>A. Player</th>
					      <th class='text-danger'>Looser</th>
					      <th class='text-success'>Winner</th>
					    </tr>
					  </thead>";
		$showData .= "<tbody>
						<tr>
							<td>$hmPl</td>
							<td>$awPl</td>
							<td class='text-danger'>$loss</td>
							<td class='text-success'>$wnr</td>
						</tr>
					</tbody>";
		$showData .= "</table>";

		echo $showData;
	}
}
 ?>