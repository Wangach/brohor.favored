<?php
//Check session
include '../../script/session_checker.php';
include '../users/userscr/usermaster.php';
include 'scripts/f22counters.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $admin; ?> | FIFA 22 Admin </title>
	<!--/Precoded CSS files-->
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/all.css">
	<link rel="stylesheet" href="../../css/solid.css">
	<!--own css files-->
	<link rel="stylesheet" href="css/index.css">
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
						<img class="profile img img-thumbnail" src="images/bgs/hild.jpg" alt="Johnito">
					</a>

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
	    				</li>

	    				<li class="nav-item mt-4">
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
		<section id="usersf">
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
									  <span class="date fas fa-sync" id="refreshlooser"></span>
									  <div class="looserCnt">
											
									  </div>
									  <p>Looser Games</p>
									</div><!--f2-card-text-->
									<div class="f2-card-stats">
									  <div class="stat">
										<button class="btn f2-btn" data-toggle="modal" data-target="#looserModal">Looser-Pay</button>
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
									  <span class="date fas fa-sync" id="refreshfair"></span>
									   <div class="fairCnt">
											
									  </div>
									  <p>Fair Games</p>
									</div><!--f2-card-text-->
									<div class="f2-card-stats">
									  <div class="stat">
										<button class="btn f2-btn" data-toggle="modal" data-target="#fairModal">Fair-Play</button>
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
									  <span class="date fas fa-sync" id="refresh"></span>
									  <div class="trCnt">
										  
									  </div>
									  <p>Total Transactions</p>
									</div><!--f2-card-text-->
									<div class="f2-card-stats" id="refreshtr">
									  <div class="stat">
										<button class="btn f2-btn" data-toggle="modal" data-target="#trModal"><i class="fas fa-search"></i></button>
									  </div><!--stat-->
									</div><!--f2-card-stats-->
								</div><!--f2-card-->
							</div><!--/col-sm-4/-->
						</div>
					</div><!--/.end of column/-->
				</div><!--/.row/-->

				<!--Modals-->

				<!--Looser Pay-->
				<div class="modal fade" id="looserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Looser Pay</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="scripts/22master.php" id="f2-looser-form" method="POST">
							<div class="form-group">
								<label for="homp">Home Player:</label>
								<input type="text" class="form-control" placeholder="Enter Home Player Name..." id="hp" name="hp">
							</div><!--/.form-group/-->
							<div class="form-group">
								<label for="awap">Away Player:</label>
								<input type="text" class="form-control" placeholder="Enter Away Player Name..." id="ap" name="ap">
							</div><!--/.form-group/-->
							<div class="form-group">
								<label for="homet">Home Team:</label>
								<input type="text" class="form-control" placeholder="Enter Home Team..." id="ht" name="ht">
							</div><!--/.form-group/-->
							<div class="form-group">
								<label for="awat">Away Team:</label>
								<input type="text" class="form-control" placeholder="Enter Away Team..." id="at" name="at">
							</div><!--/.form-group/-->
							<div class="form-group">
								<label for="homsc">Home Score:</label>
								<input type="number" class="form-control" placeholder="Home Player Score..." id="hsc" name="hsc">
							</div><!--/.form-group/-->
							<div class="form-group">
								<label for="awasc">Away Score:</label>
								<input type="number" class="form-control" placeholder="Away Player Score..." id="asc" name="asc">
							</div><!--/.form-group/-->
							<div class="form-group">
								<label for="matchty">Match Type:</label>
								<select name="matchType" id="mtyp" class="form-control">
									<option value=""></option>
									<option value="ht">Half Time</option>
									<option value="ft">Full Time</option>
								</select>
							</div>
							<div class="form-group">
								<label for="awasc">Coupon:</label>
								<input type="text" class="form-control" placeholder="Apply Code..." id="coup" name="coup" value="N/A">
							</div><!--/.form-group/-->
							<button type="submit" id="f2-looser-btn" class="btn btn-primary" name="recordm">Record</button>
							<button type="button" id="clear" class="btn btn-warning" disabled="true">Clear</button>
						</form>
				      </div>
				    </div>
				  </div>
				</div>
				<!--Fair Play-->
				<div class="modal fade" id="fairModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Fair Play</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="scripts/gamechanger.php" id="f2-fair-form" method="POST">
							<div class="form-group">
								<label for="homet">Team 1:</label>
								<input type="text" class="form-control" placeholder="Enter Home Team..." id="ht" name="ht">
							</div><!--/.form-group/-->
							<div class="form-group">
								<label for="awat">Team 2:</label>
								<input type="text" class="form-control" placeholder="Enter Away Team..." id="at" name="at">
							</div><!--/.form-group/-->
							<div class="form-group">
								<label for="homsc">Home Score:</label>
								<input type="number" class="form-control" placeholder="Home Player Score..." id="hsc" name="hsc">
							</div><!--/.form-group/-->
							<div class="form-group">
								<label for="awasc">Away Score:</label>
								<input type="number" class="form-control" placeholder="Away Player Score..." id="asc" name="asc">
							</div><!--/.form-group/-->
							<button type="submit" id="f2-fair-btn" class="btn" name="fairrec">Record</button>
							<button type="button" id="fairclear" class="btn btn-warning" disabled="true">Clear</button>
						</form>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- Transactions Modal -->
				<div class="modal fade" id="trModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Search Transactions</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="scripts/22searchtr.php" id="f2-search-form" method="POST">
							<div class="form-group">
								<label for="trname">Enter Name:</label>
								<input type="text" class="form-control" placeholder="Transactor Name..." id="tn" name="tn">
							</div><!--/.form-group/-->
							<button type="submit" id="f2-txn-btn" class="btn f2-btn" name="searchtr"><i class="fas fa-search"></i></button>
						</form>
				      </div>
					  <div id="results">
						 
					  </div>
				    </div>
				  </div>
				</div>

			</div><!--/.container-fluid/-->
		</section><!--usersf-->
		<section id="f2-records">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-9 ml-auto">
						<div class="section-heading">
							<h4>Recent Games</h4>
						</div>
						<div class="row mt-3 mb-5 pt-5 f2-records">
							<div class="col-md-12">
								<nav>
									<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
										<a class="nav-item nav-link active" id="nav-looser-tab" data-toggle="tab" href="#nav-looser" role="tab" aria-controls="nav-looser" aria-selected="false">Looser Games</a>
										<a class="nav-item nav-link" id="nav-fair-tab" data-toggle="tab" href="#nav-fair" role="tab" aria-controls="nav-fair" aria-selected="true">Fair Games</a>
									</div>
								</nav>
								<div class="tab-content" id="nav-tabContent">
									<div class="tab-pane fade show active" id="nav-looser" role="tabpanel" aria-labelledby="nav-home-tab">
										<div class="table-responsive">
											<table class="table f2-table">
												<thead>
													<tr>
													<th scope='col'>H. Player</th>
													<th scope='col'>A. Player</th>
													<th scope='col'>H. Team</th>
													<th scope='col'>A. Team</th>
													<th scope='col'>H. Score</th>
													<th scope='col'>A. Score</th>
													<th class='text-danger'>Looser</th>
													<th class='text-success'>Winner</th>
													</tr>
												</thead>
												<tbody id='lholder'>
												  <?php
													recLooser();
												  ?>
												</tbody>
											  </table>
										</div><!--table-responsive-->
									</div><!--tab-pane-->
									<div class="tab-pane fade" id="nav-fair" role="tabpanel" aria-labelledby="nav-profile-tab">
										<div class="btn-holder">
											<button id="unpaid" class="btn btn-info">Show Unpaid</button>
											<button id="pay" class="btn btn-info">Pay All</button>
										</div>
										<div class="table-responsive">
											<table class="table f2-table">
												<thead>
													<tr>
													<th scope='col'>H. Team</th>
													<th scope='col'>A. Team</th>
													<th scope='col'>H. Score</th>
													<th scope='col'>A. Score</th>
													<th class='text-danger'>Payment Status</th>
													<th class='text-warning'>Id</th>
													</tr>
												</thead>
												<tbody id='fholder'>
												  <?php
													recFair();
												  ?>
												</tbody>
											  </table>
										</div><!--table-responsive-->
									</div><!--tab-pane-->
								</div><!--tab-content-->
							</div><!--col-md-12-->
						</div>
					</div><!--/.end of column/-->
				</div><!--/.row/-->
			</div><!--/.container-fluid/-->
		</section><!--f2-records-->

		<section id="f2-txns">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-9 ml-auto">
						<div class="section-heading">
							<h4>Transact</h4>
						</div>
						<div class="row mt-3 mb-5 pt-5 transactions">
							<div class="form-side">
								<div class="mini-heading">
									<h5>Pay</h5>
								</div>
								<div class="form-top">
									<h4>Pay Form</h4>
								</div>
								<form action="scripts/transact22.php" id="f2-payments-form" method="POST">
									<div class="form-group">
										<select name="txnType" id="txntyp" class="form-control">
											<option value=""></option>
											<option value="cr">Credit</option>
											<option value="db">Debit</option>
										</select>
									</div>
									<div class="form-group">
										<label for="name">Transactor: </label>
										<input type="text" class="form-control" id="trname" placeholder="Transactor..." name="cusjina">
									</div>
									<div class="form-group">
										<label for="mode">Payment Method</label>
										<select name="txnMode" id="txnmode" class="form-control">
											<option value=""></option>
											<option value="cs">Cash</option>
											<option value="mp">Mobile Money (Mpesa, Airtel Money, Tkash)</option>
											<option value="bnk">Bank</option>
											<option value="ot">Other</option>
										</select>
									</div>
									<div class="form-group">
										<label for="name">Amount: </label>
										<input type="number" class="form-control" id="tramt" placeholder="Amount..." name="kiwango">
									</div>
									<div class="form-group">
										<label for="name">Description: </label>
										<input type="text" class="form-control" id="trds" placeholder="Description..." name="maelezo">
									</div>
									<button type="submit" class="btn f2-btn" id="f2-pay">Submit</button>
								</form>
								
							</div><!--form-side-->
							<div class="trns-side">
								<div class="mini-heading">
									<h5>Recent Transactions</h5>
								</div>
								<div class="trans-holder table-responsive">
									<table class="table table-bordered f2-table">
									<thead>
										<tr>
										<th scope='col'>Transaction Id</th>
										<th scope='col'>Transactor</th>
										<th scope='col'>Amount</th>
										<th scope='col'>Mode</th>
										<th scope='col'>Description</th>
										<th class='text text-danger'>Transaction Time</th>
										</tr>
									</thead>
										<tbody>
											<?php recTrns(); ?>
										</tbody>
									  </table>
								</div><!--trans-holder-->
								
							</div><!--trns-side-->
						</div><!--transactions row-->
					</div><!--/.end of column/-->
				</div><!--/.row/-->
			</div><!--/.container-fluid/-->
		</section><!--f2-txns-->

		<section id="f2-users">
			<div class="container-fluid">
					<div class="row">
						<div class="col-lg-9 ml-auto">
							<div class="section-heading">
								<h4>Users</h4>
							</div>
							<div class="row mt-3 mb-5 pt-5 users">
								<div class="data-side">
									<div class="data-holder">
										<span class="tusers"><?php calcTotUsers(); ?></span>
										<h4>Users</h4>
									</div><!--/.data-holder-->									
								</div><!--data-side-->
								<div class="add-user-side">
									<div class="form-top">
										<h4>Add User</h4>
									</div>
									<form action="scripts/f2rusr.php" id="f2-user-form" method="POST">
										<div class="form-group">
											<label for="name">UserName: </label>
											<input type="text" placeholder="User's Name..." class="form-control" id="jina" name="jina">
										</div><!--form-group-->
										<div class="form-group">
											<label for="alias">Alias: </label>
											<input type="text" placeholder="System Name..." class="form-control" id="alias" name="alias">
										</div><!--form-group-->
										<div class="form-group">
											<label for="phone">Phone Number: </label>
											<input type="number" placeholder="Phone..." class="form-control" id="ph" name="ph">
										</div><!--form-group-->
										<div class="form-group">
											<label for="fav">Fav Team:</label>
											<input type="text" placeholder="Eg Arsenal..." class="form-control" id="ftm" name="ftm">
										</div><!--form-group-->
										<div class="form-group">
											<label for="uno">Limit: </label>
											<input type="number" placeholder="100..." class="form-control" id="un" name="un">
										</div><!--form-group-->

										<button type="submit" class="btn f2-btn" id="f2-user"><i class="fas fa-user-plus"></i></button>
									</form>
									
								</div><!--add-user-side-->
							</div><!--transactions row-->
						</div><!--/.end of column/-->
					</div><!--/.row/-->
				</div><!--/.container-fluid/-->
		</section><!--/#f2-users-->
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
	<script src="js/fifa22.js"></script>
</body>
</html>
