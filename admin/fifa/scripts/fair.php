<?php 
	//Set Timezone
date_default_timezone_set("Africa/Nairobi");
include 'database.php';

$output = '';


//Get the form values
	$fPerson = mysqli_real_escape_string($initialize, $_POST['fhp']);
	$sPerson = mysqli_real_escape_string($initialize, $_POST['fap']);
	$fTeam = mysqli_real_escape_string($initialize, $_POST['fht']);
	$sTeam = mysqli_real_escape_string($initialize, $_POST['fat']);
	$fScore = mysqli_real_escape_string($initialize, $_POST['fhsc']);
	$sScore = mysqli_real_escape_string($initialize, $_POST['fasc']);
	$gType = mysqli_real_escape_string($initialize, $_POST['fcharge']);
	$tNow = date("h:i:sa");
	$dToday = date("d/m/Y");

	//Generate A Random match id specific for the fair matches
	$random = ["g", "H", "i", "J", "K", "L", "m", "N", "7", "8", "9"];
	$holder = "";

	for ($i=0; $i < 8; $i++) {
		$val1 = rand(0, 9);
		$genVal = $random[$val1];
		$holder = $holder.$genVal;
	}

	//Check whwther all the fields have been filled
	if (!empty($gType)) {
		//Combine the match payers
		$dongas = $fPerson.'&'.$sPerson;

		//Set The Payments
		if ($gType == 'ft') {
			$amountToPay = 25;

		}elseif ($gType == 'ht') {
			$amountToPay = 15;

		}

		//Insert data into database
		$ins = "INSERT INTO fmatches(Hplayer, Aplayer, Hteam, Ateam, Hscore, Ascore, tomatch, payers, tarehe, wakati, debt, matchid) VALUES('$fPerson', '$sPerson', '$fTeam', '$sTeam', '$fScore', '$sScore', '$gType', '$dongas', '$tNow', '$dToday', '$amountToPay', '$holder')";
		$psh = mysqli_query($initialize, $ins);

		//check whether submission is successful
		if ($psh) {
			$output = "Both ". $dongas. " Are Sharing The Cost Of ".$amountToPay.".";

			echo $output;
		}else{
			$output = "There Has Been An Error In Handling Your Request ".mysqli_error($initialize);

			echo $output;
			//echo "There Has Been An Error ".mysqli_error($initialize);
		}

	}else {
		/*$output = "<script>";
		$output .= "alert('Ensure All The Form fields are filled Properly!')";
		$output .= "</script>";*/

		echo "Empty field";
	}
 ?>