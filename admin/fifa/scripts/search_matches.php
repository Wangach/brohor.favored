<?php 
include 'database.php';

$output = '';

//Get the user input
$searchType = mysqli_real_escape_string($initialize, $_POST['watMatches']);
$seachTerm = mysqli_real_escape_string($initialize, $_POST['nop']);

//Get data from the db depending on the search type
switch ($searchType) {
	//won matches
	case 'wonmat':
		$mySearch = "SELECT * FROM lmatches WHERE winner = '$seachTerm'";
		$realSer = mysqli_query($initialize, $mySearch);

		//If there's data found
		if (mysqli_num_rows($realSer) > 0) {
			while ($data = mysqli_fetch_assoc($realSer)) {
				$homPl = $data[''];
				$awaPl = $data['']
			}
		}
		break;
	//lost matches
	case 'losmat':
		# code...
		break;
	//Both Won And Lost
	case 'allmat':
		# code...
		break;
	default:
		# code...
		break;
}
 ?>