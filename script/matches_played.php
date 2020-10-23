<?php 

include 'database.php';

$getMatches = "SELECT * FROM lmatches";
$realGt = mysqli_query($initialize, $getMatches);

$totalMatches = mysqli_num_rows($realGt);

echo $totalMatches;

 ?>