<?php
$initialize = mysqli_connect('localhost', 'root', '','systwone');
if (!$initialize) {
	echo "Connection to the Database has not been successful!".mysqli_error($initialize);
}

$output = '';
//echo $userInSearch;
if (isset($_GET['uname']) && !empty($_GET['uname'])) {
	$userInSearch = $_GET['uname'];
	//call the delete function
	viewUser($initialize, $userInSearch);
}

function viewUser($initialize, $userInSearch) {
	$myQ = "SELECT * FROM f2users WHERE alias = '$userInSearch'";
	$exec = mysqli_query($initialize, $myQ);

    if(mysqli_num_rows($exec) > 0){
        while($row = mysqli_fetch_assoc($exec)){
            //Get the Data from table
            $nameOfUser = $row['username'];
			$aliasOfUser = $row['alias'];
			$phoneOfUser = $row['phone'];
			$favoriteTeam = $row['favteam'];
			$userStatus = $row['login'];

			if($userStatus == 0){
				$realStat = 'Inactive';
			}elseif ($userStatus == 1) {
				$realStat = 'Active';
			}

			//show the data
			
			$output = "<div class='vuser_holder'>
							<h3 class='mhd'>$nameOfUser</h3>
							<div class='team-logo'>
								<img src='../../assets/team-logos/$favoriteTeam.png' alt='$favoriteTeam' class='team-logo-img'>
							</div>
							<div class='misc'>
								<h4 class='phn'>254$phoneOfUser</h4>
								<h4 class='act-stat'>$realStat</h4>
							</div><!--misc-->
						</div>";
			

			echo $output;
        }
    }
}


 ?>
