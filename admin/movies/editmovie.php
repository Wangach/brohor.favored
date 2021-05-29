<?php 
include '../../script/session_checker.php';
include 'moviescr/midchecker.php';
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Edit | <?php echo $nameOfMov; ?></title>
  <!--/Precoded CSS files-->
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/all.css">
	<link rel="stylesheet" href="../../css/solid.css">
	<!--own css files-->
  <link rel="stylesheet" href="../../css/admin.css">
  <link rel="stylesheet" href="../../css/media.css">
 </head>
 <body id="movie-body">
 	<!--/Custom Loaders/-->
	<div class="loader">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>

 	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF'];?>">My Movie</a>
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
	<section id="view-movie">
		<div class="customized-row">
			<div class="col-1-of-3">
				<div class="content">
					<img src="../movies/movie_avatars/<?php echo $postOfMov; ?>" alt="movie-Avatar">
				</div><!--/.content/-->
			</div>
			<div class="col-1-of-3">
				<div class="movie">
					<div class="movie-content">
						<p class="content-title">Category</p>
						<h3 class="movie__category"><?php echo $categoryOfMov; ?></h3>
					</div>
					<div class="movie-content">
						<p class="content-title">Location</p>
						<form action="moviescr/eloc.php" method="POST" class="update-loc">
							<div class="form-group">
								<label class="sr-only">Key</label>
								<input name="gotk" type="text" class="form-control" value="<?php echo $keyOfMov; ?>" disabled>
							</div>
							<div class="form-group">
								<label class="sr-only">Location</label>
								<input name="loca" type="text" class="form-control" value="<?php echo $locationOfMov; ?>">
							</div>
							<button name="edl" type="submit" class="btn btn-success">Update</button>
						</form>
					</div>
					<div class="movie-content">
						<p class="content-title">Rating</p>
						<h3 class="movie__Rating"><?php echo $ratOfMov; ?> </h3>
					</div>
				</div><!--/.movie/-->
			</div>
			 <div class="col-1-of-3">
			 	<div class="movie-id">
			 		<p class="content-title">Movie ID</p>
			 		<h3 class="mid">#<?php echo $keyOfMov;?></h3>
			 	</div>
			 </div>
		</div><!--content-holder-->
	</section>

	<footer class="movie-footer">
			<h3>&copy; Broad Horizons Ent
				<script>
					let allY = new Date;
					let rNow = allY.getFullYear();

					document.write(rNow);
				</script>
			</h3>
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
