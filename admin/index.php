<?php 
//Check session
include '../script/session_checker.php';
include 'users/userscr/usermaster.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Broad Horizons Ent | Welcome <?php echo $admin; ?> </title>
	<!--/Precoded CSS files-->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/all.css">
	<link rel="stylesheet" href="../css/solid.css">
	<!--own css files-->
	<link rel="stylesheet" href="../css/admin.css">
	<link rel="stylesheet" href="../css/media.css">
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
	    					<a href="index.php" target="_blank" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-home text-light mr-3 fa-lg"></i>
	    						Home
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="users/" target="_blank" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-users text-light mr-3 fa-lg"></i>
	    						Users
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="fifa/" target="_blank" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-gamepad text-light mr-3 fa-lg"></i>
	    						Games
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="movies/" target="_blank" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-video text-light mr-3 fa-lg"></i>
	    						Movies
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="payments/" target="_blank" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-money-check-alt text-light mr-3 fa-lg"></i>
	    						Financials
	    					</a>
	    				</li>

	    				<li class="nav-item mt-4">
	    					<a href="sales/" target="_blank" class="nav-link text-white p-3 mb-2 sidebar-link">
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
	    					<h4 class="text-light text-uppercase mb-0"><?php echo $admin; ?></h4>
	    				</div><!--/column/-->
	    			</div><!--/.row/-->
	    		</div><!--/col-lg-9/-->

	    	</div><!--/row/-->
	    </div><!--/.container-fluid/-->
	  </div>
	</nav>	
	
	<section id="first">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row pt-5 mt-3 mb-5">
						<div class="col-sm-4 p-2">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<i class="fas fa-futbol fa-3x text-danger"></i>
										<div class="text-right text-secondary">
											<h5>Games Played</h5>
											<h3><?php include '../script/matches_played.php'; ?></h3>
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
										<i class="fas fa-users fa-3x text-info"></i>
										<div class="text-right text-secondary">
											<h5>Registered Users</h5>
											<h3><?php calcTotUsers(); ?></h3>
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
										<i class="fas fa-film fa-3x text-warning"></i>
										<div class="text-right text-secondary">
											<h5>Available Movies</h5>
											<h3><?php include 'movies/moviescr/totmovies.php'; ?></h3>
										</div>
									</div>
								</div><!--/.card-body/-->
								<div class="card-footer">
									<i class="fas fa-sync mr-3"></i>
									<span>Update</span>
								</div><!--/.card-footer/-->
							</div><!--/card/-->
						</div><!--/col-sm-6/-->
					</div><!--/nested row/-->
				</div><!--column/-->
			</div><!--/.row/-->
		</div><!--/#container-fluid/-->
	</section><!--/#first/-->

	<section id="sec">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row">
						<div class="col-md-9 mb-2">
							<h3 class="text-center text-muted">Recent Games</h3>
						</div>
						<div class="col-md-12 col-lg-6 col-sm-12">
							<?php include 'fifa/scripts/recent_looser.php'; ?>
						</div><!--/col-md-6/-->

						<div class="col-md-12 col-lg-6 col-sm-12">
							<?php include 'fifa/scripts/recent_fair.php'; ?>
						</div><!--/col-md-6/-->
					</div><!--/.nested row/-->
				</div>
			</div>
		</div><!--/.container-fluid/-->
	</section><!--sec/-->

	<section id="third">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row">
						<div class="col-md-9 mb-2">
							<h3 class="text-center text-info text-muted">Recent Movies</h3>
						</div>
						<div class="col-md-12">
							<div class="recent-movies">
								<?php include 'movies/moviescr/latestmovies.php'; ?>
							</div><!--/.recent-movies-->
						</div><!--/col-md-12/-->
					</div><!--/.nested row/-->
				</div>
			</div>
		</div><!--/.container-fluid/-->
	</section><!--third/-->

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
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js" type="text/javascript"></script>
	<script src="../js/all.js" type="text/javascript"></script>
	<script src="../js/fontawesome.js" type="text/javascript"></script>
	<script src="../js/regular.js" type="text/javascript"></script>
	<script src="../js/index.js" type="text/javascript"></script>
</body>
</html>
