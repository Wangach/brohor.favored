<?php 
include 'database.php';
session_start();

#predefined variables
$output = '';

if (isset($_POST['lgn'])) {
	#get the form data
	$uName = mysqli_real_escape_string($initialize, $_POST['username']);
	$uPass = mysqli_real_escape_string($initialize, $_POST['secret']);

	$chckMatch = "SELECT * FROM admin WHERE name = '$uName' AND password = '$uPass'";
	$conf = mysqli_query($initialize, $chckMatch);

	if (mysqli_num_rows($conf) > 0) {
		//Set The Session var and redirect
		$_SESSION['administrator'] = $uName;
		header("Location: ../admin/index.php");
	}else{
		$output = "<script>";
		$output .= "alert('The Username or Password is Incorrect!');";
		$output .= "</script>";

		echo $output;
	}
}

//Upon Logout
if (isset($_GET['logout'])) {
	#destroy session and redirect
	unset($_SESSION['administrator']);
	header("Location: ../index.php");
}
 ?>