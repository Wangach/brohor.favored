<?php
//include 'scripts/f22counters.php';
include '../../script/session_checker.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $admin; ?> | BH Ent | Movies </title>
	<!--/Precoded CSS files-->
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/all.css">
	<link rel="stylesheet" href="../../css/solid.css">
	<!--own css files-->
	<link rel="stylesheet" href="../../css/main.css">
	<!-- <link rel="stylesheet" href="../../css/admin.css">
	<link rel="stylesheet" href="../../css/media.css"> -->
</head>
<body>
	<!--/Custom Loaders/-->
	<div class="loader">
		<div class="spinner-border text-success" role="status">
			<span></span>
		</div>
    </div>
	
	<nav class="navbar navbar-expand-md navbar-light nav-f2-bg">
	  <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <div class="container-fluid">
	    	<div class="row">
	    		<!--sidebar/-->
	    		<div class="col-xl-2 col-md-4 col-lg-3 fixed-top sidebar">
	    			<a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">
						<img class="profile img img-thumbnail" src="../../assets/bgs/hild.jpg" alt="Johnito">
					</a>

	    			<!--Navigation items-->
	    			<ul class="navbar-nav flex-column">
	    				<li class="nav-item mt-4">
	    					<a href="../fifa22" class="nav-link text-white p-3 mb-2 sidebar-link">
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
	    					<a href="../movies/" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-video text-light mr-3 fa-lg"></i>
	    						Movies
	    					</a>
	    				</li>

	    				<!-- <li class="nav-item mt-4">
	    					<a href="../payments/" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-money-check-alt text-light mr-3 fa-lg"></i>
	    						Financials
	    					</a>
	    				</li> -->

	    				<!-- <li class="nav-item mt-4">
	    					<a href="../sales/" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-shopping-cart text-light mr-3 fa-lg"></i>
	    						Sales
	    					</a>
	    				</li> -->

	    				<li class="nav-item mt-4">
	    					<a href="../../script/master.php?logout=1" class="nav-link text-white p-3 mb-2 sidebar-link">
	    						<i class="fas fa-sign-out-alt text-light mr-3 fa-lg"></i>
	    						LogOut
	    					</a>
	    				</li>
	    			</ul>
	    		</div><!--/.col-lg-3/-->

	    		<!--topnav/-->
	    		<div class="col-xl-10 col-md-8 col-lg-9 ml-auto fixed-top py-2 top-navbar">
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
	
	<main>
		<section id="moviedata">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-9 ml-auto">
						<div class="row mt-3 mb-5 pt-5">
							<div class="col-sm-4">
								<div class="f2-card card-success">
									<div class="f2-card-image image-1">
										<span class="icon-info">
											<i class="fas fa-fighter-jet"></i>
										</span>
									</div>
									<div class="f2-card-text">
									  <span class="date fas fa-sync"></span>
									  <h2><?php include 'moviescr/totmovies.php'; ?></h2>
									  <p>Movies & Series</p>
									</div><!--f2-card-text-->
									<div class="f2-card-stats">
									  <div class="stat">
										<button class="btn f2-btn" data-toggle="modal" data-target="#addMovie">Add Movie</button>
									  </div><!--stat-->
									</div><!--f2-card-stats-->
								</div><!--f2-card-->
							</div><!--/col-sm-4/-->
	
							<div class="col-sm-4 p-2">
								<div class="f2-card card-warning">
									<div class="f2-card-image image-2">
										<span class="icon-pinkie">
											<i class="fas fa-futbol"></i>
										</span>
									</div>
									<div class="f2-card-text">
									  <span class="date fas fa-sync"></span>
									  <h2><?php include 'moviescr/totmovies.php'; ?></h2>
									  <p>Animations</p>
									</div><!--f2-card-text-->
									<div class="f2-card-stats">
									  <div class="stat">
										<button class="btn f2-btn" data-toggle="modal" data-target="#byname"><i class="fas fa-file-signature"></i></button>
									  </div><!--stat-->
									</div><!--f2-card-stats-->
								</div><!--f2-card-->
							</div><!--/col-sm-4/-->
	
							<div class="col-sm-4 p-1">
								<div class="f2-card card-danger">
									<div class="f2-card-image image-3">
										<span class="icon-success">
											<i class="fas fa-plus"></i>
										</span>
									</div>
									<div class="f2-card-text">
									  <span class="date fas fa-sync"></span>
									  <h2><?php include 'moviescr/totmovies.php'; ?></h2>
									  <p>Total Movies</p>
									</div><!--f2-card-text-->
									<div class="f2-card-stats">
									  <div class="stat">
										<button class="btn f2-btn" data-toggle="modal" data-target="#bycat"><i class="fas fa-object-group"></i></button>
									  </div><!--stat-->
									</div><!--f2-card-stats-->
								</div><!--f2-card-->
							</div><!--/col-sm-4/-->
						</div>
					</div><!--/.end of column/-->
				</div><!--/.row/-->

				<!--Modals-->
				<!--Add Movie-->
				<div class="modal fade" id="addMovie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Looser Pay</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="moviescr/addmovie.php" id="f2-movie-form" method="POST">
							<div class="form-group">
								<label for="poster">Movie Poster</label>
								<input type="file" accept="image/*" class="form-control" id="picha" name="picha" required>
							</div><!--/.form-group/-->
							<div class="form-group">
								<label for="mname">Movie Name:</label>
								<input type="text" class="form-control" placeholder="Spiderman, Elite Sn 1..." id="jina" name="jina" required>
							</div>
							<div class="form-group">
								<label for="mcat">Movie Category:</label>
								<input type="text" class="form-control" placeholder="Action, Drama..." id="aina" name="aina" required>
							</div>
							<div class="form-group">
								<label for="mloc">Movie Location:</label>
								<input type="text" class="form-control" placeholder="HDD..." id="pahala" name="pahala" required>
							</div>
							<div class="form-group">
								<label for="mrat">Movie Rating:</label>
								<input type="number" class="form-control" placeholder="X / 10..." id="tathmini" name="tathmini" required>
							</div>
							<div class="form-group">
								<label for="mprod">Movie Producer:</label>
								<input type="text" class="form-control" placeholder="ABC, Hulu, Freeform..." id="mtengenezaji" name="mtengenezaji" required>
							</div>
							<div class="form-group">
								<label for="mreld">Release Dates:</label>
								<input type="date" class="form-control" id="kuachiliwa" name="kuachiliwa" required>
							</div>
							<button type="submit" id="f2-movie-btn" class="btn f2-btn" name="addm">Add Movie</button>
						</form>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- Search By Name Modal -->
				<div class="modal fade" id="byname" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Movie Name</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="moviescr/searchbyname.php" id="f2-mn-form" method="POST">
							<div class="form-group">
								<label for="trname">Enter Name:</label>
								<input type="text" class="form-control" placeholder="F9 2021 etc..." id="mn" name="mn">
							</div><!--/.form-group/-->
							<button type="submit" id="f2-txn-btn" class="btn f2-btn" name="searchmn"><i class="fas fa-search"></i></button>
						</form>
				      </div>
					  <div id="mbn-results"></div>
				    </div>
				  </div>
				</div>


				<!-- Search By Category Modal -->
				<div class="modal fade" id="bycat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Movie Category</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="moviescr/searchbycat.php" id="f2-mc-form" method="POST">
							<div class="form-group">
								<label for="trname">Category:</label>
								<input type="text" class="form-control" placeholder="Drama, Mystery, Adventure Etc..." id="mc" name="mc">
							</div><!--/.form-group/-->
							<button type="submit" id="f2-txn-btn" class="btn f2-btn" name="searchcat"><i class="fas fa-search"></i></button>
						</form>
				      </div>
					  <div id="mbc-results"></div>
				    </div>
				  </div>
				</div>

			</div><!--/.container-fluid/-->
		</section><!--moviedata-->
		<section id="f2-records">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-9 ml-auto">
						<div class="movies-wrap">
							<div class="section-heading">
								<h4>Recent Movies</h4>
							</div>
							<div class="row mt-3 mb-5 pt-5 f2-records">
								<div class="col-md-12">
									<?php include 'moviescr/latestmovies.php'; ?>
								</div><!--col-md-12-->
							</div><!--/.f2-record/-->
						</div><!--/.movies-wrap/-->
					</div><!--/.end of column/-->
				</div><!--/.row/-->
			</div><!--/.container-fluid/-->
		</section><!--f2-records-->

		
	</main>

	

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
	<script src="../../js/index.js" type="text/javascript"></script>
	<script src="moviejs/movie.js"></script>
</body>
</html>
