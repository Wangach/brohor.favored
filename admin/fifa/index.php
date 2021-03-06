<?php 
//Check session
include '../../script/session_checker.php';
include '../../script/total_matches.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Broad Horizons Ent | Admin Users Page </title>
	<!--/Precoded CSS files-->
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/all.css">
	<link rel="stylesheet" href="../../css/solid.css">
	<!--own css files-->
	<link rel="stylesheet" href="../../css/admin.css">
	<link rel="stylesheet" href="../../css/media.css">
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
	    					<a href="index.php" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-gamepad text-light mr-3 fa-lg"></i>
	    						Games
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="../movies/" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-video text-light mr-3 fa-lg"></i>
	    						Movies
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="../payments/" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-money-check-alt text-light mr-3 fa-lg"></i>
	    						Financials
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="../sales/" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-shopping-cart text-light mr-3 fa-lg"></i>
	    						Sales
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="../script/login.php?logout=1" class="nav-link text-white p-3 mb-2 sidebar-link">
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
						<div class="col-sm-4 p-2">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<i class="fas fa-play fa-3x text-primary"></i>
										<div class="text-right text-secondary">
											<h5>Looser Games</h5>
											<h3><?php include '../../script/lmatches_played.php'; ?></h3>
										</div>
									</div>
								</div><!--/.card-body/-->
								<div class="card-footer">
									<i class="fas fa-sync mr-3"></i>
									<span>Update</span>
								</div><!--/.card-footer/-->
							</div><!--/card/-->
						</div><!--/col-sm-6/-->

						<div class="col-sm-4 p-2">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<i class="fas fa-check fa-3x text-success"></i>
										<div class="text-right text-secondary">
											<h5>Fair Games</h5>
											<h3><?php include '../../script/fmatches_played.php'; ?></h3>
										</div>
									</div>
								</div><!--/.card-body/-->
								<div class="card-footer">
									<i class="fas fa-sync mr-3"></i>
									<span>Update</span>
								</div><!--/.card-footer/-->
							</div><!--/card/-->
						</div><!--/col-sm-6/-->

						<div class="col-sm-4 p-1">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<i class="fas fa-times-circle fa-3x text-danger"></i>
										<div class="text-right text-secondary">
											<h5>Total Games</h5>
											<h3><?php getTotalMatches(); ?></h3>
										</div>
									</div>
								</div><!--/.card-body/-->
								<div class="card-footer">
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
		<div class="contaiber-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row style-bg">
						<div class="col-md-4">

							<div class="my-content">
								<button class="btn btn-primary" data-toggle="modal" data-target="#fairPlay">Fair Play <strong><i class="fas fa-balance-scale"></i></strong></button>
							</div>

							<!--Registration Modal-->
							<div class="modal fade" id="fairPlay" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title text-dark">Fair Play</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div><!--/.modal-header-->
										<div class="modal-body">
											<div class="fair-feed"></div>
											<form action="scripts/fair.php" id="fair-form" method="POST">
												<div class="form-group">
													<label for="homp">Home Player:</label>
													<input type="text" class="form-control" placeholder="Enter Home Player Name..." id="fhp" name="fhp">
												</div><!--/.form-group/-->
												<div class="form-group">
													<label for="awap">Away Player:</label>
													<input type="text" class="form-control" placeholder="Enter Away Player Name..." id="fap" name="fap">
												</div><!--/.form-group/-->
												<div class="form-group">
													<label for="homet">Home Team:</label>
													<input type="text" class="form-control" placeholder="Enter Home Team..." id="fht" name="fht">
												</div><!--/.form-group/-->
												<div class="form-group">
													<label for="awat">Away Team:</label>
													<input type="text" class="form-control" placeholder="Enter Away Team..." id="fat" name="fat">
												</div><!--/.form-group/-->
												<div class="form-group">
													<label for="homsc">Home Score:</label>
													<input type="number" class="form-control" placeholder="Home Player Score..." id="fhsc" name="fhsc">
												</div><!--/.form-group/-->
												<div class="form-group">
													<label for="awasc">Away Score:</label>
													<input type="number" class="form-control" placeholder="Away Player Score..." id="fasc" name="fasc">
												</div><!--/.form-group/-->
												<div class="form-group">
													<label for="Extra Time">FT Or HT:</label>
													<p>Full Game</p>
													<input type="radio" id="faet" name="fcharge" value="ft">
													<p>Half Game</p>
													<input type="radio" id="faet" name="fcharge" value="ht">
												</div><!--/.form-group/-->

												<button type="submit" class="btn btn-primary">Record Match</button>
												<div class="fair-feed"></div>
											</form>
										</div><!--modal-body-->
									</div><!--Modal content-->
								</div><!--modal-dialog-->
							</div><!--/#regUserModal/-->
						</div><!--/.col-md-12/-->
						<div class="col-md-4">
							<div class="my-content">
								<button class="btn btn-warning" data-toggle="modal" data-target="#looserPay">Looser-Pay <strong><i class="fas fa-chess-king"></i></strong></button>
							</div>

							<!--Registration Modal-->
							<div class="modal fade" id="looserPay" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title text-dark">Looser Pay</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div><!--/.modal-header-->
										<div class="modal-body">
											<form action="scripts/looser.php" id="looser-form" method="POST">
												<div class="form-group">
													<label for="homp">Home Player:</label>
													<input type="text" class="form-control" placeholder="Enter Home Player Name..." id="hp" name="hp" required>
												</div><!--/.form-group/-->
												<div class="form-group">
													<label for="awap">Away Player:</label>
													<input type="text" class="form-control" placeholder="Enter Away Player Name..." id="ap" name="ap" required>
												</div><!--/.form-group/-->
												<div class="form-group">
													<label for="homet">Home Team:</label>
													<input type="text" class="form-control" placeholder="Enter Home Team..." id="ht" name="ht" required>
												</div><!--/.form-group/-->
												<div class="form-group">
													<label for="awat">Away Team:</label>
													<input type="text" class="form-control" placeholder="Enter Away Team..." id="at" name="at" required>
												</div><!--/.form-group/-->
												<div class="form-group">
													<label for="homsc">Home Score:</label>
													<input type="number" class="form-control" placeholder="Home Player Score..." id="hsc" name="hsc" required>
												</div><!--/.form-group/-->
												<div class="form-group">
													<label for="awasc">Away Score:</label>
													<input type="number" class="form-control" placeholder="Away Player Score..." id="asc" name="asc" required>
												</div><!--/.form-group/-->
												<div class="form-group">
													<label for="Extra Time">FT Or HT:</label>
													<p>Full Game</p>
													<input type="radio" id="aet" name="charge" value="ft">
													<p>Half Game</p>
													<input type="radio" id="aet" name="charge" value="ht">
												</div><!--/.form-group/-->
												
												<button type="submit" id="looser" class="btn btn-warning" name="recordm">Record Match</button>
												<div id="recres"></div>
											</form>
										</div><!--modal-body-->
									</div><!--Modal content-->
								</div><!--modal-dialog-->
							</div><!--/#regUserModal/-->


						</div><!--/.col-md-12/-->

						<div class="col-md-4">

							<div class="my-content">
								<button class="btn btn-success" data-toggle="modal" data-target="#perfSearch">Search User<strong> <i class="fas fa-search"></i></strong></button>
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

	<section id="userthrd">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row">
						<div class="col-md-9 mb-2 mt-4">
							<h3 class="text-center text-muted">Recently Looser Games</h3>
						</div>
						<div class="col-md-12">
							<!--<table class="table table-dark">
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
							</table>-->
							<?php include 'scripts/recent_looser.php'; ?>
						</div><!--/col-md-12/-->
					</div><!--/.nested row/-->
				</div>
			</div>
		</div><!--/.container-fluid/-->
	</section><!--sec/-->

	<section id="userfrth">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row">
						<div class="col-md-9 mb-2 mt-4">
							<h3 class="text-center text-muted">Recently Fair Games</h3>
						</div>
						<div class="col-md-12">
							<!--<table class="table table-dark">
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
							</table>-->
							<?php include 'scripts/recent_fair.php'; ?>
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
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="fifajs/fifa.js" type="text/javascript"></script>
	<script src="../../js/index.js" type="text/javascript"></script>
</body>
</html>
