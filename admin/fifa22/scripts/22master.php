<?php 
//Set Timezone
// date_default_timezone_set("Africa/Nairobi");
include 'database.php';

$output = '';


//Get the form values
	$fPerson = mysqli_real_escape_string($dbcon, $_POST['hp']);
	$sPerson = mysqli_real_escape_string($dbcon, $_POST['ap']);
	$fTeam = mysqli_real_escape_string($dbcon, $_POST['ht']);
	$sTeam = mysqli_real_escape_string($dbcon, $_POST['at']);
	$fScore = mysqli_real_escape_string($dbcon, $_POST['hsc']);
	$sScore = mysqli_real_escape_string($dbcon, $_POST['asc']);
	$gType = mysqli_real_escape_string($dbcon, $_POST['matchType']);
	$voucher = strtolower(mysqli_real_escape_string($dbcon, $_POST['coup']));

	//Generate A Random match id
	$random = ["g", "h", "i", "j", "9", "8", "7", "6"];
	$holder = "";

	for ($i=0; $i < 6; $i++) {
		$val1 = rand(0, 5);
		$genVal = $random[$val1];
		$holder = $holder.$genVal;
	}

	//Check whwther all the fields have been filled
	if (!empty($gType)) {
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
		if($voucher === "n/a"){
            if ($gType == 'ft') {
                $amountToPay = 30;
    
            }elseif ($gType == 'ht') {
                $amountToPay = 15;
    
            }
        }elseif ($voucher === "cst") {
            if ($gType == 'ft') {
                $amountToPay = 25;
    
            }elseif ($gType == 'ht') {
                $amountToPay = 15;
    
            }
        }else{
            if ($gType == 'ft') {
                $amountToPay = 30;
    
            }elseif ($gType == 'ht') {
                $amountToPay = 15;
    
            }
        }

		//Insert data into database
		$ins = "INSERT INTO f2looser(Hplayer, Aplayer, Hteam, Ateam, Hscore, Ascore, winner, looser, tomatch, coupon, 
          debt, matchid) VALUES('$fPerson', '$sPerson', '$fTeam', '$sTeam', '$fScore', '$sScore', '$champion', 
          '$rMate', '$gType', '$voucher', '$amountToPay', '$holder')";
		$psh = mysqli_query($dbcon, $ins);

		//check whether submission is successful
		if ($psh) {
			$output = "Successful! <strong class='text text-danger'>".$rMate.
            "</strong> Has Lost While <strong class='text text-success'>".$champion.
            "</strong> Has Won At ".$gType." in match: <strong class='text text-info'>".$holder."</strong>";

			echo $output;
		}else{
			$output = "There Has Been An Error In Handling Your Request!";

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