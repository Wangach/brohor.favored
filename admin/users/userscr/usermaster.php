<?php 
$initialize = mysqli_connect('localhost', 'root', '','systwone');
if (!$initialize) {
	echo "Connection to the Database has not been successful!".mysqli_error($initialize);
}

//show list of users 
function showUsers() {
	$showData = '';
	
	include '../../script/database.php';

	//Fetching The recently added users
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
	$initialize = mysqli_connect('localhost', 'root', '','systwone');
	if (!$initialize) {
		echo "Connection to the Database has not been successful!".mysqli_error($initialize);
	}
	$totalUsers = "SELECT * FROM users";
	$getUsers = mysqli_query($initialize, $totalUsers);

	$hesabu = mysqli_num_rows($getUsers);

	echo $hesabu;
}

//Get Online Users
function onlineUsers(){
	$initialize = mysqli_connect('localhost', 'root', '','systwone');
	if (!$initialize) {
		echo "Connection to the Database has not been successful!".mysqli_error($initialize);
	}
	$totalUsers = "SELECT * FROM users WHERE login = '1'";
	$getOnlineUsers = mysqli_query($initialize, $totalUsers);

	$hesabu = mysqli_num_rows($getOnlineUsers);

	if ($hesabu > 0) {
		echo $hesabu;
	}elseif($hesabu === 0){
		echo 0;
	}
}

function bhentUsers(){
	$showData = '';

	include '../../script/database.php';

	//get users from the database
	$userGetter = "SELECT * FROM (SELECT * FROM users ORDER BY id DESC) as r ORDER BY id";
	$allUsers = mysqli_query($initialize, $userGetter);

	if (mysqli_num_rows($allUsers) > 0) {
		while ($row = mysqli_fetch_assoc($allUsers)) {
			#get the rows individual data
			$userId = $row['id'];
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
							<caption>Broad Horizons Users</caption>";
			$showData .= "
							<thead>
                                <tr>
                                <th scope='col'>Username</th>
                                <th scope='col'>Phone</th>
                                <th scope='col'>Favorite Team</th>
                                <th scope='col'>Date Of Registration</th>
                                <th scope='col'>Actions</th>
                                </tr>
                            </thead>";
			$showData .= "<tbody>
							<tr class='mt-5'>
								<td><a class='text-lg text-success' href='#'>$nameOfUser</a></td>
								<td>$phNumber</td>
								<td>$nameOfFavorite</td>
								<td>$dateOfRegistration</td>
								<td>
									<button class='btn btn-primary' name='$systName'><i class='fas fa-eye'></i></button>
									<button id='delbtn' class='btn btn-danger my-people' name='$systName' onclick='deleteData(this.name)'><i class='fas fa-trash-alt'></i></button>

									<button class='btn btn-warning' name='$systName'><i class='fas fa-edit'></i></button>
								</td>
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

 ?>