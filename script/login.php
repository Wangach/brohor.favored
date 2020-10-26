<?php 
include 'database.php';
session_start();

if (isset($_POST['lgn'])) {
	#get the form data
	$uName = mysqli_real_escape_string($initialize, $_POST['']);
	$uPass = mysqli_real_escape_string($initialize, $_POST[''])
}
 ?>