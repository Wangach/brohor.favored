<?php 
//Check session
include '../../script/session_checker.php';


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Broad Horizons Ent | My Movies </title>
	<!--/Precoded CSS files-->
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/all.css">
	<link rel="stylesheet" href="../../css/solid.css">
	<!--own css files-->
	<link rel="stylesheet" href="../../css/admin.css">
	<link rel="stylesheet" href="../../css/media.css">

	<!--/Chart Import from google/-->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Movie Category', 'Numbers'],
          ['Action',     12],
          ['Adventure / Epic',      2],
          ['Drama',  2],
          ['Crime', 2],
          ['Mystery',    7],
          ['Animation',     10]
        ]);

        var options = {
          title: 'Pie Rep',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>-->

</head>
<body>
	<!--/Custom Loaders/-->
	<div class="loader">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
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
	    					<a href="../fifa/" class="nav-link text-white p-3 mb-2 sidebar-link">
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
	
	<section id="movies_summary">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row mt-3 mb-5 pt-5">
						<div class="col-sm-12 p-2">
							<div class="card bg-success">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<i class="fas fa-file-video fa-4x text-white"></i>
										<div class="text-right text-white">
											<h5>Available Animes, Movies & Series</h5>
											<h3><?php include '../../script/matches_played.php'; ?></h3>
										</div>
									</div>
								</div><!--/.card-body/-->
								<div class="card-footer text-white">
									<i class="fas fa-sync mr-3"></i>
									<span>Update</span>
								</div><!--/.card-footer/-->
							</div><!--/card/-->
						</div><!--/col-sm-12/-->
					</div>
				</div><!--/.end of column/-->
			</div><!--/.row/-->
		</div><!--/.container-fluid/-->
	</section>

	<section id="movie_actions">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row movies-bg">
						<div class="col-md-3 col-xs-12 col-sm-12">

							<div class="my-content reduce-font">
								<button class="btn btn-info" data-toggle="modal" data-target="#movieAdd">Add Movie <strong><i class="fas fa-folder-plus"></i></strong></button>
							</div>
							<!--Add Movie Modal -->
							<div class="modal fade" id="movieAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
							  <div class="modal-dialog modal-dialog-centered" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLongTitle">Add Movie</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        <form action="moviescr/addmovie.php" id="addmovie" method="POST">
							        	<div class="form-group">
							        		<label for="poster">Movie Poster</label>
							        		<input type="file" accept="image/*" class="form-control" id="picha" name="picha">
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
							        	
							        	<button name="addmov" class="btn btn-success" type="submit">Add Movie</button>
							        	<div id="mdb"></div>
							        </form> 
							      </div><!--/.modal-body/-->
							    </div>
							  </div>
							</div>
						</div><!--/.col-md-3/-->

						<div class="col-md-3 col-xs-12 col-sm-12">

							<div class="my-content reduce-font">
								<button class="btn btn-warning" data-toggle="modal" data-target="#searchByName">B. Name <strong><i class="fas fa-sort-numeric-down"></i></strong></button>
							</div>
							<!--Search By Name Modal -->
							<div class="modal fade" id="searchByName" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Search By Name</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        <form action="moviescr/searchbyname.php" id="searByName" method="POST">
							        	<div class="form-group">
							        		<label for="moviename">Movie Name:</label>
							        		<input type="text" class="form-control" placeholder="Movie Name..." id="nom" name="nom">
							        	</div>

							        	<button type="submit" class="btn btn-info">Search</button>
							        </form>
							      </div><!--/.modal-body/-->
							      <div id="mbn-results"></div>
							    </div>
							  </div>
							</div>
						</div><!--/.col-md-3/-->
            <div class="col-md-3 col-xs-12 col-sm-12">

							<div class="my-content reduce-font">
								<button class="btn btn-primary" data-toggle="modal" data-target="#searByCategory">B. Category <strong><i class="fas fa-object-group"></i></strong></button>
							</div>

							<!--Search By Name Modal -->
							<div class="modal fade" id="searByCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Search By Category</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        <form action="moviescr/searchbycat.php" id="searByCat" method="POST">
							        	<div class="form-group">
							        		<label for="moviename">Movie Category:</label>
							        		<input type="text" class="form-control" placeholder="Fantasy, Drama, Action etc..." id="ctom" name="ctom">
							        	</div>
							        	<button type="submit" class="btn btn-primary">Search</button>
							        </form>
							      </div><!--/.modal-body/-->
							      <div id="mbc-results"></div>
							    </div>
							  </div>
							</div>
						</div><!--/.col-md-3/-->

						<div class="col-md-3 col-xs-12 col-sm-12">

							<div class="my-content reduce-font">
								<button class="btn btn-secondary" data-toggle="modal" data-target="#oldMv">Old Movies<strong><i class="fas fa-recycle"></i></strong></button>
							</div>

							<!--Search By Name Modal -->
							<div class="modal fade" id="oldMv" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Search Old Movies</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        <form action="#" id="searOlMov" method="POST">
							        	<div class="form-group">
							        		<label for="moviename">Movie Name:</label>
							        		<input type="text" class="form-control" placeholder="Movie Name..." id="" name="">
							        	</div>
							        	<button type="submit" class="btn btn-warning">Search</button>
							        </form>
							      </div><!--/.modal-body/-->
							      <div id="old-results"></div>
							    </div>
							  </div>
							</div>
							
						</div><!--/.col-md-3/-->

					</div><!--/.inner-row/-->
				</div><!--/.col-lg-9-->
			</div><!--/.row/-->
		</div><!--/.container-fluid/-->
	</section><!--usersec-->

	<section id="userfifth">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row">
						<div class="col-md-9 mb-2 mt-4">
							<h3 class="text-center text-muted">My Movies Data</h3>
						</div>
						<div class="col-md-12 col-sm-12">
              <div class="column-heading">
								<h3>Latest</h3>
							</div>
							<div class="latest-movies">
								<?php include 'moviescr/latestmovies.php'; ?>
							</div><!--/latest-movies-->
            </div><!--/col-md-6/-->

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
	<script src="moviejs/movie.js" type="text/javascript"></script>
	<script src="../../js/index.js" type="text/javascript"></script>
</body>
</html>
