<?php 
//Check session
include '../../script/session_checker.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Broad Horizons Ent | Sales Management </title>
	<!--/Precoded CSS files-->
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/all.css">
	<link rel="stylesheet" href="../../css/solid.css">
	<!--own css files-->
	<link rel="stylesheet" href="../../css/admin.css">
	<link rel="stylesheet" href="../../css/media.css">

	<!--/Chart Import from google/-->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Category', 'Stock'],
          ['Earphones',     12],
          ['Chargers',      2],
          ['USB Cables',  2],
          ['Phone Rings', 2],
          ['Flash Disks',    7],
          ['Mem Cards',     10]
        ]);

        var options = {
          title: 'Stock Categories',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

    <!--/Line Charts/-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          ['2016',  150],
          ['2017',  120],
          ['2018',  300],
          ['2019',  500],
          ['2020',  1000]
        ]);

        var options = {
          title: 'Yearly Sales',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>



</head>
<body>
	<!--/Custom Loaders/-->
	<div class="loader">
		<div class="spinner-border text-success" role="status">
			<span></span>
		</div>
    </div>
	
	<nav class="navbar navbar-expand-md navbar-light bg-light">
	  <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <div class="container-fluid">
	    	<div class="row">
	    		<!--sidebar/-->
	    		<div class="col-xl-2 col-md-4 col-lg-3 fixed-top sidebar">
	    			<a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">BroadHorizonsEnt</a>

	    			<!--Navigation items-->
	    			<ul class="navbar-nav flex-column">
	    				<li class="nav-item mt-4">
	    					<a href="../index.php" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-home text-light mr-3 fa-lg"></i>
	    						Home
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="../users/" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-users text-light mr-3 fa-lg"></i>
	    						Users
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-gamepad text-light mr-3 fa-lg"></i>
	    						Games
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-video text-light mr-3 fa-lg"></i>
	    						Movies
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-money-check-alt text-light mr-3 fa-lg"></i>
	    						Financials
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-shopping-cart text-light mr-3 fa-lg"></i>
	    						Sales
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="#" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-sign-out-alt text-light mr-3 fa-lg"></i>
	    						LogOut
	    					</a>
	    				</li>
	    			</ul>
	    		</div><!--/.col-lg-3/-->

	    		<!--topnav/-->
	    		<div class="col-xl-10 col-md-8 col-lg-9 ml-auto bg-dark fixed-top py-2 top-navbar">
	    			<div class="row">
	    				<div class="col-md-4">
	    					<h4 class="text-light text-uppercase mb-0">Dashboard</h4>
	    				</div><!--/column/-->
	    				<div class="col-md-4">
	    					
	    				</div><!--/column/-->
	    				<div class="col-md-4">
	    					
	    				</div><!--/column/-->
	    			</div><!--/.row/-->
	    		</div><!--/col-lg-9/-->

	    	</div><!--/row/-->
	    </div><!--/.container-fluid/-->
	  </div>
	</nav>	
	
	<section id="usersf">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row mt-3 mb-5 pt-5">
						<div class="col-sm-3 p-2">
							<div class="card bg-success">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<i class="fas fa-layer-group fa-4x text-white"></i>
										<div class="text-right text-white">
											<h5>Inventory</h5>
											<h3><?php include '../../script/matches_played.php'; ?></h3>
										</div>
									</div>
								</div><!--/.card-body/-->
								<div class="card-footer text-white">
									<i class="fas fa-sync mr-3"></i>
									<span>Update</span>
								</div><!--/.card-footer/-->
							</div><!--/card/-->
						</div><!--/col-sm-6/-->

						<div class="col-sm-3 p-2">
							<div class="card bg-danger">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<i class="fas fa-exchange-alt fa-4x text-white"></i>
										<div class="text-right text-white">
											<h5>Inventory</h5>
											<h3>100</h3>
										</div>
									</div>
								</div><!--/.card-body/-->
								<div class="card-footer text-white">
									<i class="fas fa-sync mr-3"></i>
									<span>Update</span>
								</div><!--/.card-footer/-->
							</div><!--/card/-->
						</div><!--/col-sm-6/-->

						<div class="col-sm-3 p-1">
							<div class="card bg-warning">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<i class="fas fa-dollar-sign fa-4x text-white"></i>
										<div class="text-right text-white">
											<h5>Inventory Cost</h5>
											<h3>10</h3>
										</div>
									</div>
								</div><!--/.card-body/-->
								<div class="card-footer text-white">
									<i class="fas fa-sync mr-3"></i>
									<span>Update</span>
								</div><!--/.card-footer/-->
							</div><!--/card/-->
						</div><!--/col-sm-6/-->

                        <div class="col-sm-3 p-2">
							<div class="card bg-info">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<i class="fas fa-shopping-basket fa-4x text-white"></i>
										<div class="text-right text-white">
											<h5>Sold Items</h5>
											<h3>100</h3>
										</div>
									</div>
								</div><!--/.card-body/-->
								<div class="card-footer text-white">
									<i class="fas fa-sync mr-3"></i>
									<span>Update</span>
								</div><!--/.card-footer/-->
							</div><!--/card/-->
						</div><!--/col-sm-6/-->
					</div>
				</div><!--/.end of column/-->
			</div><!--/.row/-->
		</div><!--/.container-fluid/-->
	</section>

	<section id="userssec">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row violet-bg">
						<div class="col-md-4">

							<div class="my-content">
								<button class="btn btn-secondary" data-toggle="modal" data-target="#stockAdd">Add Stock <strong><i class="fas fa-cart-plus"></i></strong></button>
							</div>

							<!--Registration Modal-->
							<div class="modal fade" id="stockAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title text-dark">Add Stock</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div><!--/.modal-header-->
										<div class="modal-body">
											<div class="fair-feed"></div>
											<form action="#" id="addstocks-form" method="POST">
												<div class="form-group">
													<label for="cn">Comodity Name:</label>
													<input type="text" name="cmJina" placeholder="Name Of Comodity..." class="form-control" id="">
												</div>
												<div class="form-group">
													<label for="ct">Comodity Category:</label>
													<select name="cmCat" class="form-control" id="">
														<option value=""></option>
														<option value="earphones">Earphones</option>
														<option value="chargers">Chargers</option>
														<option value="usb">USB Cables</option>
														<option value="ring">Phone Rings</option>
														<option value="flash">Flash Drives</option>
														<option value="mem">Memory Card</option>
														<option value="other">Others</option>
													</select>
												</div>
												<div class="form-group">
													<label for="q">Quantity:</label>
													<input type="text" name="cmbp" placeholder="Buying Price..." class="form-control" id="">
												</div>
												<div class="form-group">
													<label for="bp">Buying Price:</label>
													<input type="text" name="cmbp" placeholder="Buying Price..." class="form-control" id="">
												</div>
												<div class="form-group">
													<label for="mp">Marked Price:</label>
													<input type="text" name="cmkp" placeholder="Marked Price..." class="form-control" id="">
												</div>

											</form>
										</div><!--modal-body-->
									</div><!--Modal content-->
								</div><!--modal-dialog-->
							</div><!--/#regUserModal/-->
						</div><!--/.col-md-12/-->
						<div class="col-md-4">
							<div class="my-content">
								<button class="btn btn-secondary" data-toggle="modal" data-target="#txnSearch">Track Transaction <strong><i class="fas fa-chart-line"></i></strong></button>
							</div>

							<!--Registration Modal-->
							<div class="modal fade" id="txnSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title text-dark">Search Transaction</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div><!--/.modal-header-->
										<div class="modal-body">
											<form action="scripts/looser.php" id="looser-form" method="POST">
												<div class="form-group">
													<label for="txno">Transaction Number:</label>
													<input type="text" class="form-control" placeholder="Transaction No...." id="tno" name="tno" required>
												</div><!--/.form-group/-->
												
												<button type="submit" class="btn btn-warning" name="recordm">Record Match</button>
												<div id="recres"></div>
											</form>
										</div><!--modal-body-->
									</div><!--Modal content-->
								</div><!--modal-dialog-->
							</div><!--/#regUserModal/-->


						</div><!--/.col-md-12/-->

						<div class="col-md-4">

							<div class="my-content">
								<button class="btn btn-secondary" data-toggle="modal" data-target="#perfSearch">Search Item<strong> <i class="fas fa-search"></i></strong></button>
							</div>

							<!--Registration Modal-->
							<div class="modal fade" id="perfSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title text-dark">Search User Matches</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div><!--/.modal-header-->
										<div class="modal-body">
											<form action="scripts/search_matches.php" id="search-form" method="POST">
												<div class="form-group">
													<label for="homp">Type:</label>
													<select class="form-control" name="watMatches" id="watMatches">
														<option value=""></option>
														<option value="wonmat">Won Matches</option>
														<option value="losmat">Lost Matches</option>
													</select>
												</div><!--/.form-group/-->
												<div class="form-group">
													<label for="awap">Player Name:</label>
													<input type="text" class="form-control" placeholder="Player Name..." name="nop" id="nop">
												</div><!--/.form-group/-->

												<button type="submit" class="btn btn-primary" name="">Search</button>
											</form>
										</div><!--modal-body-->
										<div id="results"></div>
									</div><!--Modal content-->
								</div><!--modal-dialog-->
							</div><!--/#regUserModal/-->
						</div><!--/.col-md-12/-->

					</div>
				</div><!--/.col-lg-9-->
			</div><!--/.row/-->
		</div><!--/.container-fluid/-->
	</section><!--usersec-->

	<section id="userfrth">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row">
						<div class="col-md-9 mb-2 mt-4">
							<h3 class="text-center text-muted">Graphical Representations</h3>
						</div>
						<div class="col-md-6">
							<div class="column-heading">
								<h3>Stock</h3>
							</div>
							<div id="piechart_3d" style="width: 430px; height: 330px;"></div>
						</div><!--/col-md-6/-->
						<div class="col-md-6">
							<div class="column-heading">
								<h3>Sales</h3>
							</div>
							<div id="curve_chart" style="width: 430px; height: 330px"></div>
						</div><!--/col-md-6/-->
					</div><!--/.nested row/-->
				</div>
			</div>
		</div><!--/.container-fluid/-->
	</section><!--sec/-->

	<section id="userfifth">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row">
						<div class="col-md-9 mb-2 mt-4">
							<h3 class="text-center text-muted">Recently Sales Transactions</h3>
						</div>
						<div class="col-md-12">
							<table class="table table-dark">
								<thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">First</th>
								  <th scope="col">Last</th>
								  <th scope="col">Handle</th>
								</tr>
								</thead>
								<tbody>
								<tr>
								  <th scope="row">1</th>
								  <td>Mark</td>
								  <td>Otto</td>
								  <td>@mdo</td>
								</tr>
								<tr>
								  <th scope="row">2</th>
								  <td>Jacob</td>
								  <td>Thornton</td>
								  <td>@fat</td>
								</tr>
								<tr>
								  <th scope="row">3</th>
								  <td>Larry</td>
								  <td>the Bird</td>
								  <td>@twitter</td>
								</tr>
								</tbody>
							</table>
						</div><!--/col-md-12/-->
					</div><!--/.nested row/-->
				</div>
			</div>
		</div><!--/.container-fluid/-->
	</section><!--sec/-->

	<section id="userthrd">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row">
						<div class="col-md-9 mb-2 mt-4">
							<h3 class="text-center text-muted">Recently Added Items</h3>
						</div>
						<div class="col-md-12">
							<table class="table table-dark">
								<thead>
								<tr>
								  <th scope="col">#</th>
								  <th scope="col">First</th>
								  <th scope="col">Last</th>
								  <th scope="col">Handle</th>
								</tr>
								</thead>
								<tbody>
								<tr>
								  <th scope="row">1</th>
								  <td>Mark</td>
								  <td>Otto</td>
								  <td>@mdo</td>
								</tr>
								<tr>
								  <th scope="row">2</th>
								  <td>Jacob</td>
								  <td>Thornton</td>
								  <td>@fat</td>
								</tr>
								<tr>
								  <th scope="row">3</th>
								  <td>Larry</td>
								  <td>the Bird</td>
								  <td>@twitter</td>
								</tr>
								</tbody>
							</table>
							
						</div><!--/col-md-12/-->
					</div><!--/.nested row/-->
				</div>
			</div>
		</div><!--/.container-fluid/-->
	</section><!--sec/-->

	

	<!--Footer-->
	<div class="container-fluid">
		<div class="row p-2 mt-2">
			<div class="col-lg-9 ml-auto">
				<footer class="my-footer p-3">
					<div class="text-center">
						<p>Made With <i class="fa fa-heart text-danger"></i> and A Lot Of <i class="fas fa-coffee"></i> By John Kimani</p>
					</div>
				</footer>
			</div><!--/col-lg-12-->
		</div><!--row/-->
	</div><!--/.container-fluid-->
	<!--/Javascript files/-->
	<script src="../../js/jquery.js"></script>
	<script src="../../js/bootstrap.js" type="text/javascript"></script>
	<script src="../../js/all.js" type="text/javascript"></script>
	<script src="../../js/fontawesome.js" type="text/javascript"></script>
	<script src="../../js/regular.js" type="text/javascript"></script>
	<script src="fifajs/fifa.js" type="text/javascript"></script>
</body>
</html>
