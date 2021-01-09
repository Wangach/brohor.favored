<?php
include '../../script/database.php';

if (isset($_POST['addmov'])) {
	$random = ["a", "b", "c", "d", "e", "F", "1", "2", "3", "5", "6"];
	$holder = "";

	for ($i=0; $i < 8; $i++) {
		$val1 = rand(0, 9);
		$genVal = $random[$val1];
		$holder = $holder.$genVal;
	}
	
	

	//get the values from the form fields
	$mImage = $_FILES['picha'];
	$nameOfMovie = mysqli_real_escape_string($cxn, $_POST['jina']);
	$mCategory = mysqli_real_escape_string($cxn, $_POST['aina']);

	$mLocation = mysqli_real_escape_string($cxn, $_POST['pahala']);
	$mRating = mysqli_real_escape_string($cxn, $_POST['tathmini']);
	$mProducer = mysqli_real_escape_string($cxn, $_POST['mtengenezaji']);
	$mRelease = mysqli_real_escape_string($cxn, $_POST['kuachiliwa']);
	$mStory = mysqli_real_escape_string($cxn, $_POST['maelezo']);
	$mComp = mysqli_real_escape_string($cxn, $_POST['mstate']);
	


	//For the image
	$imgName = $mImage['name'];
	$imgTempLoc = $mImage['tmp_name'];
	$fileDestination = '../movie_avatars/'.$imgName;

	//Insert To Database
	$ins = "INSERT INTO bhmovies(id, moviePoster,  movieName, movieCat, movieLoc, movieRating, movieProducer, dateReleased, storyline, movieStatus, mSec) VALUES('', '$imgName', '$nameOfMovie', '$mCategory', '$mLocation', '$mRating', '$mProducer', '$mRelease', '$mStory', '$mComp', '$holder')";
	$actual = mysqli_query($cxn, $ins);

	//Move Image to folder
	$migrate = move_uploaded_file($imgTempLoc, $fileDestination);

	if ($actual && $migrate) {
		echo "Movie Has Been Added Successfully!";
		header("refresh:2;url=../records.php");
	}else{
		echo "There Has Been An Error! Please try again!".mysqli_error($cxn);
	}

}
 ?>