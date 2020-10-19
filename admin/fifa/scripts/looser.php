<?php 
//Set Timezone
date_default_timezone_set("Africa/Nairobi");
include 'database.php';

$output = '';
//wheb the submit button is pressed
if (isset($_POST['recordm'])) {
	//Get the form values
	$fPerson = mysqli_real_escape_string($initialize, $_POST['hp']);
	$sPerson = mysqli_real_escape_string($initialize, $_POST['ap']);
	$fTeam = mysqli_real_escape_string($initialize, $_POST['ht']);
	$sTeam = mysqli_real_escape_string($initialize, $_POST['at']);
	$fScore = mysqli_real_escape_string($initialize, $_POST['hsc']);
	$sScore = mysqli_real_escape_string($initialize, $_POST['asc']);
	$gType = mysqli_real_escape_string($initialize, $_POST['charge']);
	$tNow = date("h:i:sa");
	$dToday = date("d/m/Y");

	//Generate A Random match id
	$random = ["a", "b", "c", "d", "e", "F", "1", "2", "3", "5", "6"];
	$holder = "";

	for ($i=0; $i < 8; $i++) {
		$val1 = rand(0, 9);
		$genVal = $random[$val1];
		$holder = $holder.$genVal;
	}

	//Check whwther all the fields have been filled
	if (!empty($fPerson) && !empty($sPerson) && !empty($fTeam) && !empty($sTeam) && !empty($fScore) && !empty($sScore) && !empty($gType)) {
		//find out who has won or lost the game depending on the scores
		if ($fScore > $sScore) {
			#the homeplayer has won
			$champion = $fPerson;
			$rMate = $sPerson;
		}elseif ($sScore > $fScore) {
			#the away player has won
			$champion = $sPerson;
			$rMate = $fPerson;
		}

		//Set The Payments
		if ($gType == 'ft') {
			$amountToPay = 25;

		}elseif ($gType == 'ht') {
			$amountToPay = 15;

		}

		//Insert data into database
		$ins = "INSERT INTO lmatches(Hplayer, Aplayer, Hteam, Ateam, Hscore, Ascore, winner, looser, tomatch, tarehe, wakati, debt, matchid) VALUES('$fPerson', '$sPerson', '$fTeam', '$sTeam', '$fScore', '$sScore', '$champion', '$rMate', '$gType', '$dToday', '$tNow', '$amountToPay', '$holder')";
		$psh = mysqli_query($initialize, $ins);

		//check whether submission is successful
		if ($psh) {
			$output = "<script>";
			$output .= "alert('Data Has Been Inserted Succefully!!')";
			$output .= "</script>";

			echo $output;
		}else{
			$output = "<script>";
			$output .= "alert('There Has Been An Error in Handling your request!!')";
			$output .= "</script>";

			echo $output;
			//echo "There Has Been An Error ".mysqli_error($initialize);
		}

	}else {
		/*$output = "<script>";
		$output .= "alert('Ensure All The Form fields are filled Properly!')";
		$output .= "</script>";*/

		echo "Empty field";
	}
}
 ?>