<?php
include '../../../script/database.php';
$feedback = '';

	$random = ["M", "O", "P", "R", "n", "q", "0", "2", "4", "8", "6"];
	$holder = "";

	for ($i=0; $i < 8; $i++) {
		$val1 = rand(0, 9);
		$genVal = $random[$val1];
		$holder = $holder.$genVal;
	}
	
	

	//get the values from the form fields
	$mImage = $_FILES['picha'];
	$nameOfMovie = mysqli_real_escape_string($initialize, $_POST['jina']);
	$mCategory = mysqli_real_escape_string($initialize, $_POST['aina']);

	$mLocation = mysqli_real_escape_string($initialize, $_POST['pahala']);
	$mRating = mysqli_real_escape_string($initialize, $_POST['tathmini']);
	$mProducer = mysqli_real_escape_string($initialize, $_POST['mtengenezaji']);
	$mRelease = mysqli_real_escape_string($initialize, $_POST['kuachiliwa']);
	//$mStory = mysqli_real_escape_string($initialize, $_POST['maelezo']);
	//$mComp = mysqli_real_escape_string($initialize, $_POST['mstate']);
	


	//For the image
	$imgName = $mImage['name'];
	$imgTempLoc = $mImage['tmp_name'];
	$fileDestination = '../movie_avatars/'.$imgName;

	//Insert To Database
	$ins = "INSERT INTO bhmovies(movieName, movieCat, moviePoster, movieLoc, movieRating, movieProducer, dateReleased, mSec) VALUES('$nameOfMovie', '$mCategory', '$imgName', '$mLocation', '$mRating', '$mProducer', '$mRelease', '$holder')";
	$actual = mysqli_query($initialize, $ins);

	//Move Image to folder
	$migrate = move_uploaded_file($imgTempLoc, $fileDestination);

	if ($actual && $migrate) {
		$feedback = "The Movie ". $nameOfMovie. " Has Been Added to the Database Successfully!";
		echo $feedback;
		//header("refresh:2;url=../records.php");
	}else{
		$feedback = "There Has Been An Error! Please try again!".mysqli_error($initialize);
		echo $feedback;
	}
 ?>