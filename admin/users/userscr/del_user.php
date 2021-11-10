<?php
$initialize = mysqli_connect('localhost', 'root', '','systwone');
if (!$initialize) {
	echo "Connection to the Database has not been successful!".mysqli_error($initialize);
}


//vars
$showData = '';
//$userInSearch = $_POST['user'];
//echo $userInSearch;
if (isset($_GET['uname']) && !empty($_GET['uname'])) {
	$userInSearch = $_GET['uname'];
	//call the delete function
	deleteUserFrmDb($initialize, $userInSearch);
}

function deleteUserFrmDb($initialize, $userInSearch) {
	$myQ = "DELETE FROM f2users WHERE alias = '$userInSearch'";
	$exec = mysqli_query($initialize, $myQ);

	if ($exec) {
		$getCurrentUser = "SELECT * FROM f2users";
		$execCurrentUser = mysqli_query($initialize, $getCurrentUser);
		if (mysqli_num_rows($execCurrentUser) > 0) {
			while ($row = mysqli_fetch_array($execCurrentUser)) {
				#get the rows individual data
				$userId = $row['id'];
				$nameOfUser = $row['username'];
				$phNumber = $row['phone'];
				$nameOfFavorite = $row['favteam'];
				$dateOfRegistration = $row['regdate'];
				$systName = $row['alias'];
				$limitardos = $row['unomas'];
				$userStatus = $row['login'];

				if($userStatus == 0){
					$realStat = 'Inactive';
				}elseif ($userStatus == 1) {
					$realStat = 'Active';
				}
				
				//html data
				$showData = "<tr class='mt-5'>
									<td><a class='text-lg text-success' href='#'>$nameOfUser</a></td>
									<td>$phNumber</td>
									<td>$nameOfFavorite</td>
									<td>$realStat</td>
									<td>
										<button id='viewbtn' data-toggle='modal' data-target='#viewUserModal' class='btn btn-primary' name='$systName' onclick='viewUser(this.name)'><i class='fas fa-eye'></i></button>
										<button id='delbtn' class='btn btn-danger my-people' name='$systName' onclick='deleteData(this.name)'><i class='fas fa-trash-alt'></i></button>
										<button id='signoutbtn' class='btn btn-warning' name='$systName' onclick='admLogoutUser(this.name)'><i class='fas fa-sign-out-alt'></i></button>
									</td>
								</tr>";

				echo $showData;
			}
		}else {
			echo "No users in the database";
		}
	}else {
		echo "Error: " . mysqli_error($initialize);
	}
}


 ?>
