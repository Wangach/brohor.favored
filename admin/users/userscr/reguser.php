<?php
include '../../../script/database.php';
$output = '';

//get data from form
$nameOfUser = mysqli_real_escape_string($initialize, $_POST['fnam']);
$userPass = mysqli_real_escape_string($initialize, $_POST['pass']);
$sysName = mysqli_real_escape_string($initialize, $_POST['nickn']);
$favoriteTeam = mysqli_real_escape_string($initialize, $_POST['favt']);
$phoneNum = mysqli_real_escape_string($initialize, $_POST['phno']);


$psh = "INSERT INTO users(username, password, phone, alias, favteam) VALUES('$nameOfUser', '$userPass', '$phoneNum', '$sysName', '$favoriteTeam')";
$ens = mysqli_query($initialize, $psh);

if($ens){
    $output = $nameOfUser;
    $output .= " Has Been Registered Successfully!";

    echo $output;
}else{
    $output = "There Has Been An Error, ".mysqli_error($initialize);
    echo $output;
}
?>