<?php 
$feedb = '';

include 'db.php';
$latest = "SELECT * FROM bhmovies";
$getem = mysqli_query($initialize, $latest);

$totMovs = mysqli_num_rows($getem);

echo $totMovs;

 ?>