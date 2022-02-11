<?php

include 'database.php';
    $getMatches = "SELECT * FROM f2fair";
    $realGt = mysqli_query($dbcon, $getMatches);

    $totalFairMatches = mysqli_num_rows($realGt);

    echo $totalFairMatches;

?>