<?php 
//Set Timezone
// date_default_timezone_set("Africa/Nairobi");
include 'database.php';

$output = '';


	//Get the form values
	$fTeam = mysqli_real_escape_string($dbcon, $_POST['ht']);
	$sTeam = mysqli_real_escape_string($dbcon, $_POST['at']);
	$fScore = mysqli_real_escape_string($dbcon, $_POST['hsc']);
	$sScore = mysqli_real_escape_string($dbcon, $_POST['asc']);
	
	

	//Generate A Random match id
	$random = ["k", "l", "m", "n", "2", "8", "4", "6"];
	$holder = "";

	for ($i=0; $i < 6; $i++) {
		$val1 = rand(0, 5);
		$genVal = $random[$val1];
		$holder = $holder.$genVal;
	}

		//Insert data into database
		$ins = "INSERT INTO f2fair(Hteam, Ateam, Hscore, Ascore, matchId) VALUES('$fTeam', '$sTeam', '$fScore', '$sScore', '$holder')";
		$psh = mysqli_query($dbcon, $ins);

		//check whether submission is successful
		if ($psh) {
			$showData = '';
			$matchGetter = "SELECT * FROM (SELECT * FROM f2fair ORDER BY id DESC LIMIT 4) as r ORDER BY id";
			$latestMatches = mysqli_query($dbcon, $matchGetter);

			if (mysqli_num_rows($latestMatches) > 0) {
				while ($row = mysqli_fetch_assoc($latestMatches)) {
					#get the rows individual data
					
					$hmTm = $row['Hteam'];
					$awTm = $row['Ateam'];
					$hmSc = $row['Hscore'];
					$awSc = $row['Ascore'];
					$pcode = $row['paymentstat'];
					$mId = $row['matchId'];

					if($pcode == '0'){
						$status = "Unpaid";
					}elseif($pcode == '1'){
						$status = "Paid";
					}

					/*Display The Results Depending on thecredit or debit value
					//Will do this later since I am on a deadline RN
					foreach ($row as $key => $value) {
						print_r($key . $value);
					}*/
					//html data
					$showData = "
									<tr>
										<td>$hmTm</td>
										<td>$awTm</td>
										<td>$hmSc</td>
										<td>$awSc</td>
										<td class='text-danger'>$status</td>
										<td class='text-warning'>$mId</td>
									</tr>";

					echo $showData;
				}
			}
		}else{
			$showData = "There Has Been An Error In Handling Your Request!".mysqli_error($dbcon);

			echo $showData;
			//echo "There Has Been An Error ".mysqli_error($initialize);
		}
 ?>