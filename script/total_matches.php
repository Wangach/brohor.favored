<?php 
include 'database.php';

function getLooserMatches(){
	include 'database.php';
	$getMatches = "SELECT * FROM lmatches";
	$realGt = mysqli_query($initialize, $getMatches);

	$totalLooserMatches = mysqli_num_rows($realGt);

	return $totalLooserMatches;
}

function getFairMatches(){
	include 'database.php';
	$getMatches = "SELECT * FROM fmatches";
	$realGt = mysqli_query($initialize, $getMatches);

	$totalFairMatches = mysqli_num_rows($realGt);

	return $totalFairMatches;
}

function getTotalMatches(){
	/*include 'database.php';
	getFairMatches();
	getLooserMatches();
	echo $totalFairMatches;

	//$matchesPlayed = $totalFairMatches + $totalLooserMatches;

	//echo $matchesPlayed;*/
	echo 100;
}

 ?>