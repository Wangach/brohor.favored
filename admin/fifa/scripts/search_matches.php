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
		# code...
		break;
	//lost matches
	case 'losmat':
		# code...
		break;
	//Bot Won And Lost
	
	default:
		# code...
		break;
}
 ?>