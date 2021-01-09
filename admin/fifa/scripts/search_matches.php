<?php 
include 'database.php';

$showData = '';

//Get the user input
$searchType = mysqli_real_escape_string($initialize, $_POST['watMatches']);
$seachTerm = mysqli_real_escape_string($initialize, $_POST['nop']);

//Get data from the db depending on the search type
switch ($searchType) {
	//won matches
	case 'wonmat':
		$mySearch = "SELECT * FROM lmatches WHERE winner = '$seachTerm'";
		$realSer = mysqli_query($initialize, $mySearch);

		//If there's data found
		if (mysqli_num_rows($realSer) > 0) {
			while ($data = mysqli_fetch_assoc($realSer)) {
				$homPl = $data['Hplayer'];
				$awaPl = $data['Aplayer'];
				$homScr = $data['Hscore'];
				$awaScr = $data['Ascore'];
				$champ = $data['winner'];
				$mId = $data['matchid'];

				//html data
				$showData = "<table class='table table-dark' id='multichange'>
								<caption>$seachTerm Won Matches</caption>";
				$showData .= "
							<thead>
							    <tr>
							      <th scope='col'>H. Player</th>
							      <th scope='col'>A. Player</th>
							      <th scope='col'>A. Score</th>
							      <th scope='col'>A. Score</th>
							      <th class='text-success'>Winner</th>
							      <th>Match Id</th>
							    </tr>
							  </thead>";
				$showData .= "<tbody>
								<tr>
									<td>$homPl</td>
									<td>$awaPl</td>
									<td>$homScr</td>
									<td>$awaScr</td>
									<td class='text-success'>$champ</td>
									<td><a class='text-lg text-info' href='#'>$mId</a></td>
								</tr>
							</tbody>";
				$showData .= "</table>";

				echo $showData;
			}
		}
		break;
	//lost matches
	case 'losmat':
		$mySearch = "SELECT * FROM lmatches WHERE looser = '$seachTerm'";
		$realSer = mysqli_query($initialize, $mySearch);

		//If there's data found
		if (mysqli_num_rows($realSer) > 0) {
			while ($data = mysqli_fetch_assoc($realSer)) {
				$homPl = $data['Hplayer'];
				$awaPl = $data['Aplayer'];
				$homTeam = $data['Hteam'];
				$awaTeam = $data['Ateam'];
				$homScr = $data['Hscore'];
				$awaScr = $data['Ascore'];
				$runMate = $data['looser'];
				$mId = $data['matchid'];

				//html data
				$showData = "<table class='table table-dark' id='multichange'>
								<caption>$seachTerm Lost Matches</caption>";
				$showData .= "
							<thead>
							    <tr>
							      <th scope='col'>H. Player</th>
							      <th scope='col'>A. Player</th>
							      <th scope='col'>H. Team</th>
							      <th scope='col'>A. Team</th>
							      <th scope='col'>A. Score</th>
							      <th scope='col'>A. Score</th>
							      <th class='text-danger'>Looser</th>
							      <th>Match Id</th>
							    </tr>
							  </thead>";
				$showData .= "<tbody>
								<tr>
									<td>$homPl</td>
									<td>$awaPl</td>
									<td>$homTeam</td>
									<td>$awaTeam</td>
									<td>$homScr</td>
									<td>$awaScr</td>
									<td class='text-danger'>$runMate</td>
									<td><a class='text-lg text-info' href='#'>$mId</a></td>
								</tr>
							</tbody>";
				$showData .= "</table>";

				echo $showData;
			}
		}
		break;
	default:
		$showData = 'Something Has Gone Wrong! Please Try Again!';
		echo $showData;
		break;
}
 ?>