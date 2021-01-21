<?php
include '../../script/database.php';
if (isset($_GET['user']) && $_GET['month'] && !empty($_GET['month']) && !empty($_GET['user'])) {
	$userInSearch = $_GET['user'];
	$monthInSearch = $_GET['month'];
}else{
  echo "The Search Parameters are missing! Please try again!";
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
  <link rel="stylesheet" href="../../css/admin.css">
 </head>
 <body>
 	<!--/Custom Loaders/-->
	<div class="loader">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>

 	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF'];?>">My Transactions</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">

	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
	<section id="tr-first">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7">
					<div class="business-details">
						<h3>Broad Horizons Ent.</h3>
						<h4>Jubilee Hse, Githunguri.</h4>
						<p>Phone: 254 708 535-083,</p>
						<p>Website: <a href="https://www.johnito.co.ke" target="_blank">www.johnito.co.ke</a></p>
					</div><!--/.business-dets/-->
				</div><!--/column/-->
				<div class="col-md-5">
					<div id="mytme"></div>
					<div class="customer-details">
						<h4> <i class="text-warning fas fa-star"></i><?php echo $userInSearch; ?><i class="text-warning fas fa-star"></i> </h4>
						<p>Thank You For Being Our Customer!</p>
						<p>We Value You!</p>
						<button class="btn btn-sm btn-info" id="print">Print Statement</button>
					</div><!--/customer-dets/-->
				</div><!--/column/-->
			</div><!--row/-->
		</div><!--/.container-fluid/-->
	</section>
	<section id="tr-sec">
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-xs-12 col-sm-12" id="userdata">
				<div class="table-heading">
					<h3><?php echo $userInSearch; ?> Transactions</h3>
					<h6><?php echo $monthInSearch; ?></h6>
				</div><!--/.table-heading-->
				<table class="table table-striped" id="transactions-data">
					<thead>
						<tr>
						<th scope="col">Transactor</th>
						<th scope="col">Amount</th>
						<th scope="col">Date Of Transaction</th>
						<th scope="col">Transaction ID</th>
						<th scope="col">Description</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$csData = '';

							$mySearch = "SELECT * FROM transactions WHERE trName = '$userInSearch' AND trDte LIKE '%$monthInSearch%'";
						  	$axn = mysqli_query($initialize, $mySearch);
						  	//echo $mySearch;
						  	if (mysqli_num_rows($axn) > 0) {
						  		while ($myData = mysqli_fetch_assoc($axn)) {
						  			$name = $myData['trName'];
						  			$transDc =$myData['trDesc'];
						  			$amt = $myData['amount'];
						  			$dot = $myData['trDte'];
						  			$transactionId = $myData['trId'];


						  			//show the data in html
						  			$csData = "<tr>";
						  			$csData .= "
						  						<td>$name</td>
						  						<td>$amt</td>
						  						<td>$dot</td>
						  						<td>$transactionId</td>
						  						<td>$transDc</td>
						  						";
						  			$csData .= "</tr>";

						  			echo $csData;
						  		}
						  	}

						 ?>
					</tbody>
				</table>
			</div><!--/column/-->
		</div><!--/.row/-->
	</div><!--/.container-fluid/-->
	</section>
  <!--Footer-->
	<div class="container-fluid" id="tr-footer">
		<div class="row p-2 mt-2">
			<div class="col-lg-12 mb-0 ml-auto" id="footer-div">
				<footer class="trans-footer p-3">
					<div class="text-center">
						<p>Made With <i class="fa fa-heart text-danger"></i> and A Lot Of <i class="fas fa-coffee"></i> By John Kimani</p>
					</div>
				</footer>
			</div><!--/col-lg-12-->
		</div><!--row/-->
	</div><!--/.container-fluid-->

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
