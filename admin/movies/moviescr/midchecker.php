<?php
if(isset($_GET['moviekey']) && !empty($_GET['moviekey'])){
	//assign the key to a variable
	$searchkey = $_GET['moviekey'];

	//Search for the movie in the database
	$sql = "SELECT * FROM bhmovies WHERE mSec = '$searchkey'";
	$run = mysqli_query($initialize, $sql);

	if(mysqli_num_rows($run) > 0){
		//get movie details from individual rows
		while($row = mysqli_fetch_assoc($run)){
			$postOfMov = $row['moviePoster'];
			$nameOfMov = $row['movieName'];
			$categoryOfMov = $row['movieCat'];
			$locationOfMov = $row['movieLoc'];
			$relDatOfMov = $row['dateReleased'];
			$ratOfMov = $row['movieRating'];
			$keyOfMov = $row['mSec'];
		}
	}
}

?>