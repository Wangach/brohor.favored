<?php
include 'login.php';

if (!isset($_SESSION['administrator']) || empty($_SESSION['administrator'])) {
	#redirect to login page
	header("Location: ../index.php");
}else{
	//Assign the session to a variable
	$admin = $_SESSION['administrator'];
}
?>