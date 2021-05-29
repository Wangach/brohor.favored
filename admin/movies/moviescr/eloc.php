<?php 
include 'db.php';
$res = '';

if (isset($_POST['edl'])) {
    $updatedLoc = mysqli_escape_string($initialize, $_POST['loca']);
    $movFinder = mysqli_escape_string($initialize, $_POST['gotk']);

    $getMov = "UPDATE bhmovies SET movieLoc = '$updatedLoc' WHERE mSec = '$keyOfMov'";
    $newLoc = mysqli_query($initialize, $getMov);

    if ($newLoc) {
        //Location updated
        $res = "<script>";
        $res .= "alert('Location Has Been Updated. Thank You!')";
        $res .= "</script>";

        echo $res;
    }else{
        $res = "<script>";
        $res .= "alert('There has been an error!')";
        $res .= "</script>";

        echo $res;
    }
}



 ?>