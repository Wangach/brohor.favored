<?php 
$initialize = mysqli_connect('localhost', 'root', '','systwone');
if (!$initialize) {
	echo "Connection to the Database has not been successful!".mysqli_error($initialize);
}


//vars
//$userInSearch = $_POST['user'];
//echo $userInSearch;
if (isset($_GET['uname']) && !empty($_GET['uname'])) {
	$userInSearch = $_GET['uname'];
	//call the delete function
	deleteUserFrmDb($initialize, $userInSearch);
}

function deleteUserFrmDb($initialize, $userInSearch) {
	$myQ = "DELETE FROM f2users WHERE alias = '$userInSearch'";
	$exec = mysqli_query($initialize, $myQ);

	if ($exec) {
		$feedback = "Successful";
		echo $feedback;
	}else{
		$feedback = "Error";
		echo $feedback;
	}
}


 ?>
