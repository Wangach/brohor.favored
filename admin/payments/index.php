<?php 
//Check session
include '../../script/session_checker.php';

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
	    					<a href="index.php" class="nav-link text-white p-3 mb-2 sidebar-link">
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
	    					<a href="index.php" class="nav-link text-white p-3 mb-2 sidebar-link">
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
	
	<section id="payments">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row mt-3 mb-5 pt-5">
						<div class="col-sm-12 p-2">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between">
										<i class="fas fa-money-bill-wave fa-3x text-success"></i>
										<div class="text-right text-secondary">
											<h5>Transactions Made</h5>
											<h3><?php include 'payscr/transactions_made.php'; ?></h3>
										</div>
									</div>
								</div><!--/.card-body/-->
								<div class="card-footer">
									<i class="fas fa-sync mr-3"></i>
									<span>Update</span>
								</div><!--/.card-footer/-->
							</div><!--/card/-->
						</div><!--/col-sm-6/-->
					</div><!--end of row-->
				</div><!--/.end of column/-->
			</div>
		</div><!--/.container-fluid/-->
	</section>

	<section id="search-tranx">
		<div class="contaiber-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row style-bg">
						<div class="col-md-6">
							<div class="my-content">
								<p>Hello Admin</p>
							</div>
						</div><!--/.col-md-12/-->
						<div class="col-md-6">
							<div class="my-content">
								<button class="btn btn-info" data-toggle="modal" data-target="#searchUserModal">Search <strong><i class="fas fa-search"></i></strong></button>
							</div>

							<!--Registration Modal-->
							<div class="modal fade" id="searchUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title text-dark">Search Transactions</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div><!--/.modal-header-->
										<div class="modal-body">
											<form action="payscr/search_usertr.php" id="search-form" method="POST">
												<div class="form-group">
													<label for="name">Customer's Name:</label>
													<input type="text" class="form-control" placeholder="Customer Name..." name="cusname" id="cusname">
												</div><!--/.form-group/-->
												<button type="submit" class="btn btn-success">Search</button>
											</form>
										</div><!--modal-body-->
										<div id="results"></div>
									</div><!--Modal content-->
								</div><!--modal-dialog-->
							</div><!--/#searchUserModal/-->
						</div><!--/.col-md-12/-->
					</div>
				</div><!--/.col-lg-9-->
			</div><!--/.row/-->
		</div><!--/.container-fluid/-->
	</section><!--search-tranx-->

	<section id="transact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto mt-5 purple-bg">
					<div class="row mt-3 mb-5 pt-5">
						<div class="col-md-9 mb-2 mt-4">
							<h3 class="text-center text-white">Make Payments</h3>
						</div>
						<div class="col-sm-12 p-2">
							<div class="form-top-new">
								<h4>Transact</h4>
								<h5>Pay Here</h5>
							</div>
							<form action="payscr/transact.php" class="new-cs-form" id="new-cs-form" method="POST">
								<div class="form-group">
									<label for="ptype">Type</label>
									<select name="aina" id="aina" class="form-control aina">
										<option value=""></option>
										<option value="cr">Credit</option>
										<option value="db">Debit</option>
									</select>
								</div>
								<div class="form-group">
									<label for="cs-name">Name</label>
									<input type="text" class="form-control" placeholder="Enter Name Here..." name="cusjina" id="cusjina">
								</div>
								<div class="form-group">
									<label for="amt">Amount</label>
									<input type="number" class="form-control" placeholder="Enter Amount..." name="kiwango" id="kiwango">
								</div>
								<div class="form-group">
									<label for="descr">Description</label>
									<input type="text" class="form-control" placeholder="Add Description..." name="maelezo" id="maelezo">
								</div>
								<button id="trans" name="trans" type="submit" class="btn btn-success">Make Payment</button>
								<div id="feedback"></div>
							</form>
						</div><!--/col-sm-12/-->
						

					</div><!--end of row-->
				</div><!--/.end of column/-->
			</div>
		</div><!--/.container-fluid/-->
	</section>

	<section id="latest-transactions">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 ml-auto">
					<div class="row">
						<div class="col-md-9 mb-2 mt-4">
							<h3 class="text-center text-muted">Latest Transactions</h3>
						</div>
						<div class="col-md-12">
							<?php include 'payscr/latest_transactions.php'; ?>
						</div><!--/col-md-12/-->
					</div><!--/.nested row/-->
				</div>
			</div>
		</div><!--/.container-fluid/-->
	</section><!--latest-transactions/-->

	

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
	<script src="payjs/payments.js" type="text/javascript"></script>
	<script src="../../js/index.js" type="text/javascript"></script>
</body>
</html>
