<?php 

include 'database.php';

$getMatches = "SELECT * FROM fmatches";
$realGt = mysqli_query($initialize, $getMatches);

$totalFairMatches = mysqli_num_rows($realGt);

echo $totalFairMatches;

 ?>