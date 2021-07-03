<?php 

include 'database.php';

$getMatches = "SELECT * FROM lmatches";
$realGt = mysqli_query($initialize, $getMatches);

$totalLooserMatches = mysqli_num_rows($realGt);

echo $totalLooserMatches;

 ?>