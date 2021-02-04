<?php 
include 'script/login.php';
 ?>
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
	<!--/Custom Loaders/-->
	<div class="loader">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>

	<header id="myHeader">
		<div class="loginformspace">
			<div class="form-top">
				<span class="form-top-primary">Broad Horizons Ent <i class="fa fa-user"></i></span>
				<span class="form-top-main">Admin Login</span>
			</div><!--.form-top/-->
			<form action="index.php" id="admin-login" method="POST">
				<div class="form-group">
					<label for="uname">UserName:</label>
					<input type="text" class="form-control" placeholder="Your UserName...">
				</div>
				<div class="form-group">
					<label for="pass">Password:</label>
					<input type="text" class="form-control" placeholder="Your Password...">
				</div>

				<button type="submit" class="btn btn-primary" name="lgn"><i class="fa fa-sign-in-alt"></i></button>
			</form>
		</div><!--/.loginformspace/-->
	</header>		
	
	<!--/Javascript files/-->
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/all.js" type="text/javascript"></script>
	<script src="js/fontawesome.js" type="text/javascript"></script>
	<script src="js/regular.js" type="text/javascript"></script>
	<script src="js/index.js" type="text/javascript"></script>
</body>
</html>
