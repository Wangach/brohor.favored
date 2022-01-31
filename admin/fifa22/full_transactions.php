<?php
include 'scripts/database.php';
if (isset($_GET['user']) && !empty($_GET['user'])) {
	$userInSearch = $_GET['user'];
}else{
  echo "The Search Parameters are missing! Please try again!";
}
function getMonth(){
	$output = '';
	$current = date("m");
	switch ($current) {
		case '1':
			$output = 'January';
			break;
		case '2':
			$output = 'February';
			break;
		case '3':
			$output = 'March';
			break;
		case '4':
			$output = 'April';
			break;
		case '5':
			$output = 'May';
			break;
		case '6':
			$output = 'June';
			break;
		case '7':
			$output = 'July';
			break;
		case '8':
			$output = 'August';
			break;
		case '9':
			$output = 'September';
			break;
		case '10':
			$output = 'October';
			break;
		case '11':
			$output = 'November';
			break;
		case '12':
			$output = 'December';
			break;
		default:
			$output = 'Not A Valid Month!';
			break;
	}
	echo $output;
}


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title><?php echo $userInSearch; ?> Monthly Transactions</title>
  <!--/Precoded CSS files-->
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/all.css">
	<link rel="stylesheet" href="../../css/solid.css">
	<!--own css files-->
  <link rel="stylesheet" href="css/index.css">
 </head>
 <body>
	<div id="invoice-holder">
		<div class="invoice-top">
			<div class="logo">
				<img src="images/logo/jcodes22.svg" width="150px" height="150px" alt="BH Entertainment Logo">
				<p>Broad Horizons Entertainment</p>
			</div>
			<div class="customer">
				<h4><?php echo $userInSearch;?></h4>
				<p><?php getMonth();?> Transactions</p>
			</div>
		</div><!--invoice-top-->
		<div class="invoice-center">
			<div class="table-responsive">
				<table class="table f2-table">
					<thead>
						<tr>
							<th scope="col">Transaction Code</th>
							<th scope="col">Amount</th>
							<th scope="col">Payment Method</th>
							<th scope="col">Description</th>
							<th scope="col">Date</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$data = '';
							$lookup = "SELECT * FROM f2transactions WHERE
							 MONTH(trDte) = MONTH(CURDATE()) AND YEAR(trDte) = YEAR(CURDATE()) AND trName = '$userInSearch'";
							$exec = mysqli_query($dbcon, $lookup);
							if(mysqli_num_rows($exec) > 0){
								while($trans = mysqli_fetch_assoc($exec)){
									//get data from the array
									$trnsId = $trans['trId'];
									$bargain = $trans['amount'];
									$methodOfBargain = $trans['pmeth'];
									$bargainDescription = $trans['trDesc'];
									$dateOfBargain = $trans['trDte'];

									//HTML Data
									$data = "<tr>";
									$data .= "
												<td class='text text-bold text-warning'>$trnsId</td>
												<td>$bargain</td>
												<td>$methodOfBargain</td>
												<td>$bargainDescription</td>
												<td>$dateOfBargain</td>
											";
									$data .= "</tr>";

									echo $data;
								}
							}else{
								$data = "There Are No Transactions For This Month!";
								echo $data;
							}
						?>
					</tbody>
				</table>
			</div><!--table-responsive-->
		</div><!--invoice-center-->
		
	</div><!--invoice holder-->

  <!--/Javascript files/-->
  <script>
  	const printBtn = document.querySelector('#print');
  	printBtn.addEventListener('click',() => {
  		let conf = confirm("By Clicking OK, This Page Will Be Printed. Proceed?");
  		if (conf) {
  			window.print();
  		}else{
  			return false;
  		}
  	});
  	//getting the date and time
  	window.addEventListener('load', () => {
  		let dte = new Date;
  		let dateToday = dte.getFullYear();
  		let hrRyna = dte.getHours();
  		let mnRyna = dte.getMinutes();

  		//Adding Zero
  		let addZero = (mins) => {
  			let minMpya = mins.toString();
  			mnRyna = "0" + minMpya;
  		}

  		if (mnRyna < 10) {
  			addZero(mnRyna);
  		}

  		let combo = dateToday + ", " + hrRyna + ":" + mnRyna;

  		let timeShow = document.getElementById('mytme');
  		timeShow.innerHTML = combo;
  	});
  </script>
  <script src="../../js/jquery.js"></script>
  <script src="../../js/bootstrap.js" type="text/javascript"></script>
  <script src="../../js/all.js" type="text/javascript"></script>
  <script src="../../js/fontawesome.js" type="text/javascript"></script>
  <script src="../../js/regular.js" type="text/javascript"></script>
  <script src="../../js/index.js" type="text/javascript"></script>
 </body>
 </html>