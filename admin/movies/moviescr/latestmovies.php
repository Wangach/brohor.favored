<?php 
$feedb = '';

include 'db.php';
$latest = "SELECT * FROM(SELECT * FROM bhmovies ORDER BY id DESC LIMIT 4) AS x ORDER BY id";
$getem = mysqli_query($initialize, $latest);

if (mysqli_num_rows($getem) > 0) {
	while ($row = mysqli_fetch_assoc($getem)) {
		//Get The Movie Dets
		$jina = $row['movieName'];
		$ct = $row['movieCat'];
		$lc = $row['movieLoc'];
		$rt = $row['movieRating'];
		$pr = $row['movieProducer'];
		$dr = $row['dateReleased'];
		$mkey = $row['mSec'];

		//Organize and Display Data
		$feedb = "<div class='table-responsive'>";
		$feedb .= "<table class='table table-bordered table-dark' id='multichange'>";
		$feedb .= "
					<thead>
					    <tr>
					      <th scope='col'>M. Name</th>
					      <th scope='col'>M. Category</th>
					      <th scope='col'>M. Location</th>
					      <th scope='col'>M. Key</th>
					    </tr>
					  </thead>";
		$feedb .= "<tbody>
						<tr>
							<td class='text-success'>$jina</td>
							<td>$ct</td>
							<td>$lc</td>
							<td><a target='_blank' class='text-lg text-info' href='../movies/viewmovie.php?moviekey=$mkey'>$mkey</a></td>
						</tr>
					</tbody>";
		$feedb .= "</table>";
		$feedb .= "<div>";

		echo $feedb;
	}
}else{

	$feedb = "<h4>There exists No such Movie In The DB!</h4>";

	echo $feedb;

	//echo "There exists No such Movie In The DB!";
}

 ?>