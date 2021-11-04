<?php
include 'database.php';
session_start();

#predefined variables
$output = '';

if (isset($_POST['lgn'])) {
	login();
}
//Upon Logout
if (isset($_GET['logout'])) {
	logout();
}


//Defined functions
function login(){
    include 'database.php';
    #get the form data
	$uName = mysqli_real_escape_string($initialize, $_POST['username']);
	$uPass = mysqli_real_escape_string($initialize, $_POST['secret']);

	$chckMatch = "SELECT * FROM admin WHERE name = '$uName' AND password = '$uPass'";
	$conf = mysqli_query($initialize, $chckMatch);

	if (mysqli_num_rows($conf) > 0) {
		//Set The Session var and redirect
		$_SESSION['administrator'] = $uName;
		header("Location: ../brohor.favored/admin/fifa22");
	}else{
		$output = "<script>";
		$output .= "alert('The Username or Password is Incorrect!');";
		$output .= "</script>";

		echo $output;
	}
}

function logout(){
    #destroy session and redirect
	unset($_SESSION['administrator']);
	header("Location: ../index.php");
}

?>