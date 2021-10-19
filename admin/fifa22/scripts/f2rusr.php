<?php
    include 'database.php';

    $output = '';

    //Get THe Form Values
    $uname = mysqli_real_escape_string($dbcon, $_POST['jina']);
    $systNm = mysqli_real_escape_string($dbcon, $_POST['alias']);
    $phoNum = mysqli_real_escape_string($dbcon, $_POST['ph']);
    $favTeam = mysqli_real_escape_string($dbcon, $_POST['ftm']);
    $limitardos = mysqli_real_escape_string($dbcon, $_POST['un']);

    $qur = "INSERT INTO f2users(username, password, phone, alias, favteam, unomas) VALUES('$uname', '$uname', '$phoNum', '$systNm', '$favTeam', 
    '$limitardos')";
    $conf = mysqli_query($dbcon, $qur);
    if($conf){
        $output = "Registration Is Successful";
        echo $output;
    }else{
        $output = "There Has Been An Error => ".mysqli_error($dbcon);
        echo $output;
    }
?>