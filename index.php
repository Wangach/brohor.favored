<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Broad Horizons Ent | Admin Login </title>
	<!--/Precoded CSS files-->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/solid.css">
	<!--own css files-->
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/media.css">
</head>
<body>
	<header id="myHeader">
		<div id="org">
			<div class="beautify">
				<div class="text-box">
					<h1 class="heading">
						<span class="heading-main">Broad Horizons</span>
						<span class="heading-minor">Entertainment</span>
					</h1>
				</div>
			</div><!--/.beautify/-->
			<div class="collection">
				<div class="form-top">
					<i class="fas fa-user"></i>
					<h3>Admin Login</h3>
				</div>
				<form action="script/login.php" id="log-form" method="POST">
					<div class="form-group">
						<label for="uname" class="sr-only">Name: </label>
						<input type="text" class="form-control" placeholder="Your Username..." name="username" id="username">
					</div>
					<div class="form-group">
						<label for="password" class="sr-only">Password: </label>
						<input type="password" class="form-control" placeholder="Password..." name="secret" id="secret">
					</div>
					<button type="submit" class="btn btn-success" name="lgn">Login</button>
				</form>
			</div><!--/.collection/-->
		</div><!--/#organize/-->
	</header>		
	
	<!--/Javascript files/-->
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/all.js" type="text/javascript"></script>
	<script src="js/fontawesome.js" type="text/javascript"></script>
	<script src="js/regular.js" type="text/javascript"></script>
	<script src="js/index.js" type="text/javascript"></script>
</body>
</html>
