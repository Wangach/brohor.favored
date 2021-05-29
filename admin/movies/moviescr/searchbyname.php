<?php 
include '../../../script/database.php';

$feedb = '';

$mName = mysqli_real_escape_string($initialize, $_POST['nom']);

$searchQ = "SELECT * FROM bhmovies WHERE movieName LIKE '%$mName%'";
$perform = mysqli_query($initialize, $searchQ);

//Upon finding A Positive result
if (mysqli_num_rows($perform) > 0) {
	while ($row = mysqli_fetch_assoc($perform)) {
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
					      <th scope='col'>M. Producer</th>
					      <th scope='col'>M. Released</th>
					      <th scope='col'>M. Key</th>
					    </tr>
					  </thead>";
		$feedb .= "<tbody>
						<tr>
							<td class='text-success'>$jina</td>
							<td>$ct</td>
							<td>$lc</td>
							<td>$pr</td>
							<td>$dr</td>
							<td><a target='_blank' class='text-lg text-info' href='../movies/viewmovie.php?moviekey=$mkey'>$mkey</a></td>
							<td><a target='_blank' class='btn btn-sm btn-danger' href='../movies/editmovie.php?moviekey=$mkey'>Edit Entry</a></td>
						</tr>
					</tbody>";
		$feedb .= "</table>";
		$feedb .= "</div>";

		echo $feedb;
	}
}else{

	echo "There exists No such Movie In The DB!";
}

 ?>
