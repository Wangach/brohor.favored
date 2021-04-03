<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>View Detailed Movie</title>
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
	  <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF'];?>">My Movies</a>
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
	
	<!--<section id="view-movie">
		<div id="customized-row">
			<div class="col-1-of-3">
				<img src="movie_avatars/tomjerry.jpg" alt="Movie Image" class="movie-avatar">
			</div><!--/.col-1--
			<div class="col-1-of-3">
				<div class="movie-dets">
					<h2 class="movie-dets__heading">
						<span class="movie-dets-title">Tom And Jerry 2021</span>
						<span class="movie-dets-category">Animation, Action, Adventure</span>
						<span class="movie-dets-dates">23/02/2021</span>
						<span class="movie-dets-location">HDD</span>
					</h2>
				</div>
			</div><!--/.col-2--
			<div class="col-1-of-3">
				<div class="mkey">
					<h2 class="movie-id">#FF2EU8OOP</h2>
				</div>
			</div><!--/.col-1--
		</div><!--/.row/--
	</section>-->
	<section id="view-movie">
		<div class="customized-row">
			<div class="col-1-of-3">
				<div class="content">
					<img src="../movies/movie_avatars/tomjerry.jpg" alt="movie-Avatar">
				</div><!--/.content/-->
			</div>
			<div class="col-1-of-3">
				<div class="movie">
					<h3 class="movie__title">Tom And Jerry </h3>
					<h3 class="movie__category">Animation, Adventure, Action</h3>
					<h3 class="movie__location">HDD</h3>
					<h3 class="movie__dates">23.01.2021</h3>
				</div><!--/.movie-dets/-->
			</div>
			 <div class="col-1-of-3">
			 	3
			 </div>
		</div><!--content-holder-->
	</section>

	<footer class="movie-footer">
			<h3>&copy; 2021</h3>
	</footer>

  <!--/Javascript files/-->
  
  <script src="../../js/jquery.js"></script>
  <script src="../../js/bootstrap.js" type="text/javascript"></script>
  <script src="../../js/all.js" type="text/javascript"></script>
  <script src="../../js/fontawesome.js" type="text/javascript"></script>
  <script src="../../js/regular.js" type="text/javascript"></script>
  <script src="../../js/index.js" type="text/javascript"></script>
 </body>
 </html>
