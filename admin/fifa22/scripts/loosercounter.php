<?php

include 'database.php';
    $getMatches = "SELECT * FROM f2looser";
    $realGt = mysqli_query($dbcon, $getMatches);

    $totalLooserMatches = mysqli_num_rows($realGt);

    echo $totalLooserMatches;

?>