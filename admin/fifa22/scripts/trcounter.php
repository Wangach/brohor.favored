<?php

include 'database.php';
    $getTransactions = "SELECT * FROM f2transactions";
    $realGt = mysqli_query($dbcon, $getTransactions);

    $totalTransactions = mysqli_num_rows($realGt);

    echo $totalTransactions;

?>