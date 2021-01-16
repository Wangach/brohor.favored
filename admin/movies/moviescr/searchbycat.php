<?php 

include '../../../script/database.php';

$feedb = '';

$mCat = mysqli_real_escape_string($initialize, $_POST['ctom']);

$searchQ = "SELECT * FROM bhmovies WHERE movieCat LIKE '%$mCat%'";
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
		$feedb = "<table class='table table-bordered table-dark' id='multichange'>";
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
							<td><a class='text-lg text-info' href='#'>$mkey</a></td>
						</tr>
					</tbody>";
		$feedb .= "</table>";

		echo $feedb;
	}
}else{

	$feedb = "<h4>There exists No such Movie In The DB!</h4>";

	echo $feedb;

	//echo "There exists No such Movie In The DB!";
}

 ?>