<?php
include '../../script/database.php';
if (isset($_GET['user']) && $_GET['month'] && !empty($_GET['month']) && !empty($_GET['user'])) {
  $mySearch = "SELECT * FROM";
}else{
  echo "The Search Parameters are missing! Please try again!";
}


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>View Users Monthly Transactions</title>
  <!--/Precoded CSS files-->
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/all.css">
	<link rel="stylesheet" href="../../css/solid.css">
	<!--own css files-->
  <link rel="stylesheet" href="../../css/admin.css">
 </head>
 <body>

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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-xs-12 col-sm-12" id="userdata">
				<div class="table-heading">
					<h3>$User Transactions</h3>
					<h6>$Month In Question</h6>
				</div><!--/.table-heading-->
				<table class="table table-striped table-dark">
					<thead>
						<tr>
						<th scope="col">Transactor</th>
						<th scope="col">Tr Type</th>
						<th scope="col">Amount</th>
						<th scope="col">Date Of Transaction</th>
						<th scope="col">Transaction ID</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
					</tbody>
				</table>
			</div><!--/column/-->
		</div><!--/.row/-->
	</div><!--/.container-fluid/-->
  <!--Footer-->
	<div class="container-fluid ">
		<div class="row p-2 mt-2">
			<div class="col-lg-9 ml-auto">
				<footer class="trans-footer p-3">
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
 </body>
 </html>
