<?php 
include '../../script/database.php';

//show list of users 
function showUsers() {
	$showData = '';
	
	include '../../script/database.php';

	//Fetching The latest transactions
	$userGetter = "SELECT * FROM (SELECT * FROM users ORDER BY id DESC LIMIT 5) as r ORDER BY id";
	$lastAddedUser = mysqli_query($initialize, $userGetter);

	if (mysqli_num_rows($lastAddedUser) > 0) {
		while ($row = mysqli_fetch_assoc($lastAddedUser)) {
			#get the rows individual data
			$nameOfUser = $row['username'];
			$phNumber = $row['phone'];
			$nameOfFavorite = $row['favteam'];
			$dateOfRegistration = $row['regdate'];
			$systName = $row['alias'];
			

			/*Display The Results Depending on thecredit or debit value
			//Will do this later since I am on a deadline RN
			foreach ($row as $key => $value) {
				print_r($key . $value);
			}*/
			//html data
			$showData = "<div class='table-responsive'>";
			$showData .= "<table class='table table-dark' id='multichange'>
							<caption>Recently Added Users</caption>";
			$showData .= "
						<thead>
						    <tr>
						      <th class='text text-warning' scope='col'>User</th>
						      <th scope='col'>Phone No.</th>
						      <th scope='col'>Favorite</th>
						      <th scope='col'>Registration Date</th>
						      <th class='text text-primary' scope='col'>Action</th>
						    </tr>
						  </thead>";
			$showData .= "<tbody>
							<tr>
								<td><a class='text-lg text-warning' href='#'>$nameOfUser</a></td>
								<td>$phNumber</td>
								<td>$nameOfFavorite</td>
								<td>$dateOfRegistration</td>
								<td><a class='btn btn-primary' href='./viewuser.php?a=$systName'>View User</a></td>
							</tr>
						</tbody>";
			$showData .= "</table>";
			$showData .= "</div>";

			echo $showData;
		}
	}else{
		$showData = "There Are No Users In The Database. Try Adding some!";

		echo $showData;
	}

}

//count the total number of registered users
function calcTotUsers() {
	include '../../script/database.php';
	$totalUsers = "SELECT * FROM users";
	$getUsers = mysqli_query($initialize, $totalUsers);

	$hesabu = mysqli_num_rows($getUsers);

	echo $hesabu;
}

 ?>