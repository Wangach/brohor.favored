<?php 
include 'db.php';
$res = '';

$updatedLoc = mysqli_escape_string($initialize, $_POST['loca']);
$movFinder = mysqli_escape_string($initialize, $_POST['gotk']);

$getMov = "UPDATE bhmovies SET movieLoc = '$updatedLoc' WHERE mSec = '$movFinder'";
$newLoc = mysqli_query($initialize, $getMov);

if ($newLoc) {
    //Location updated
    $res = "Edit Has Been Successful. New Location Set To <strong class='text text-danger'>".$updatedLoc. "</strong>";

    echo $res;
}else{
    $res = "There Has Been An Error!".mysqli_error($initialize);

    echo $res;
}

 ?>