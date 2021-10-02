<?php
include 'database.php';

//looser games
function looserCnt(){
    include 'database.php';
    $getMatches = "SELECT * FROM f2looser";
    $realGt = mysqli_query($dbcon, $getMatches);

    $totalLooserMatches = mysqli_num_rows($realGt);

    echo $totalLooserMatches;
}

//fair games counter
function fairCnt(){
    include 'database.php';
    $getMatches = "SELECT * FROM f2looser";
    $realGt = mysqli_query($dbcon, $getMatches);

    $totalFairMatches = mysqli_num_rows($realGt);

    echo $totalFairMatches;
}

//recently played looser games
function recLooser(){
    $showData = '';
	
    include 'database.php';


    $matchGetter = "SELECT * FROM (SELECT * FROM f2looser ORDER BY id DESC LIMIT 4) as r ORDER BY id";
    $latestMatches = mysqli_query($dbcon, $matchGetter);

    if (mysqli_num_rows($latestMatches) > 0) {
        while ($row = mysqli_fetch_assoc($latestMatches)) {
            #get the rows individual data
            $hmPl = $row['Hplayer'];
            $awPl = $row['Aplayer'];
            $hmTm = $row['Hteam'];
            $awTm = $row['Ateam'];
            $hmSc = $row['Hscore'];
            $awSc = $row['Ascore'];
            $loss = $row['looser'];
            $wnr = $row['winner'];
            $mId = $row['matchid'];

            /*Display The Results Depending on thecredit or debit value
            //Will do this later since I am on a deadline RN
            foreach ($row as $key => $value) {
                print_r($key . $value);
            }*/
            //html data
            $showData = "
                            <tr>
                                <td>$hmPl</td>
                                <td>$awPl</td>
                                <td>$hmTm</td>
                                <td>$awTm</td>
                                <td>$hmSc</td>
                                <td>$awSc</td>
                                <td class='text-danger'>$loss</td>
                                <td class='text-success'>$wnr</td>
                            </tr>";

            echo $showData;
        }
    }
}

//recently played fair games
function recFair(){
    $showData = '';
	
    include 'database.php';


    $matchGetter = "SELECT * FROM (SELECT * FROM f2looser ORDER BY id DESC LIMIT 4) as r ORDER BY id";
    $latestMatches = mysqli_query($dbcon, $matchGetter);

    if (mysqli_num_rows($latestMatches) > 0) {
        while ($row = mysqli_fetch_assoc($latestMatches)) {
            #get the rows individual data
            $hmPl = $row['Hplayer'];
            $awPl = $row['Aplayer'];
            $hmTm = $row['Hteam'];
            $awTm = $row['Ateam'];
            $hmSc = $row['Hscore'];
            $awSc = $row['Ascore'];
            $loss = $row['looser'];
            $wnr = $row['winner'];
            $mId = $row['matchid'];

            /*Display The Results Depending on thecredit or debit value
            //Will do this later since I am on a deadline RN
            foreach ($row as $key => $value) {
                print_r($key . $value);
            }*/
            //html data
            $showData = "
                            <tr>
                                <td>$hmPl</td>
                                <td>$awPl</td>
                                <td>$hmTm</td>
                                <td>$awTm</td>
                                <td>$hmSc</td>
                                <td>$awSc</td>
                                <td class='text-danger'>$loss</td>
                                <td class='text-success'>$wnr</td>
                            </tr>";

            echo $showData;
        }
    }else{
        $showData = "There Is No Such Data in DB.";
        echo $showData;
    }
}
//recently made transactions
function recTrns(){
    $showData = '';
	
	include 'database.php';

	//Fetching The latest transactions
    $transGetter = "SELECT * FROM (SELECT * FROM f2transactions ORDER BY id DESC LIMIT 5) as r ORDER BY id";
    $latestTrans = mysqli_query($dbcon, $transGetter);

    if (mysqli_num_rows($latestTrans) > 0) {
        while ($row = mysqli_fetch_assoc($latestTrans)) {
            #get the rows individual data
            $nameOfTransactor = $row['trName'];
            $transactionId = $row['trId'];
            $transactedAmt = $row['amount'];
            $paymentMode = $row['pmeth'];
            $trDescription = $row['trDesc'];
            $dateOfTransaction = $row['trDte'];
            

            /*Display The Results Depending on thecredit or debit value
            //Will do this later since I am on a deadline RN
            foreach ($row as $key => $value) {
                print_r($key . $value);
            }*/
            //html data
           
            $showData .= "  <tr>
                                <td><a class='text-lg text-warning' href='#'>$transactionId</a></td>
                                <td>$nameOfTransactor</td>
                                <td>$transactedAmt</td>
                                <td>$paymentMode</td>
                                <td>$trDescription</td>
                                <td>$dateOfTransaction</td>
                                
                            </tr>";

            echo $showData;
        }
    }

}
?>