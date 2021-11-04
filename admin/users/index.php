<?php
	//include 'scripts/f22counters.php';
	include '../../script/session_checker.php';
	include 'userscr/usermaster.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $admin; ?> | FIFA 22 Users </title>
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
	<section id="usersf">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-9 ml-auto">
						<div class="row mt-3 mb-5 pt-5">
							<div class="col-sm-5">
								<div class="f2-card card-success">
									<div class="f2-card-image image-1">
										<span class="icon-info">
											<i class="fas fa-fighter-jet"></i>
										</span>
									</div>
									<div class="f2-card-text">
									  <span class="date fas fa-sync"></span>
									  <h2><?php calcTotUsers(); ?></h2>
									  <p>Registered Users</p>
									</div><!--f2-card-text-->
								</div><!--f2-card-->
							</div><!--/col-sm-4/-->
	
							<div class="col-sm-5 p-2">
								<div class="f2-card card-warning">
									<div class="f2-card-image image-2">
										<span class="icon-pinkie">
											<i class="fas fa-futbol"></i>
										</span>
									</div>
									<div class="f2-card-text">
									  <span class="date fas fa-sync"></span>
									  <h2><?php onlineUsers(); ?></h2>
									  <p>Active Users</p>
									</div><!--f2-card-text-->
								</div><!--f2-card-->
							</div><!--/col-sm-4/-->
						</div><!--/.row/-->
					</div><!--/.end of column/-->
				</div><!--/.row/-->
			</div><!--container-fluid-->
		</section>
		<section id="usersdata">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-9 ml-auto">
						<div class="user-wrap">
							<div class="section-heading">
								<h4>All Users</h4>
							</div><!--section-heading-->
							<div class="row mt-3 mb-5 pt-5">
								<div class="col-sm-12 p-2">
									<div class="table-responsive many">
										<table class="table f2-table">
										<caption>Broad Horizons Users</caption>
											<thead>
												<tr>
													<th scope='col'>Username</th>
													<th scope='col'>Phone</th>
													<th scope='col'>Favorite Team</th>
													<th scope='col'>Login Status</th>
													<th scope='col'>Actions</th>
												</tr>
											</thead>
											<tbody>
												<?php bhentUsers(); ?>
											</tbody>
										</table>
									</div><!--table-responsive-->
								</div><!--/col-sm-12/-->
							</div><!--row/-->
						</div><!--/.user-wrap/-->
					</div><!--/.end of column/-->
				</div><!--/.row/-->
			</div><!--container-fluid-->
		</section>
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
	<script>
		//window.onload = loadJs();
		function deleteData(user){
			Swal.fire({
			  title: 'Are you sure?',
			  text: "Delete "+ user + "?",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes ;-('
			})
			.then((result) => {
			  if (result.isConfirmed) {
			  	let req = new XMLHttpRequest;
				req.onreadystatechange = function(){
					if (this.readyState == 4 && this.status == 200) {
						let frmdb = this.responseText;
						console.log(frmdb);
						//check the text for error or success
						if (frmdb.includes('Successful') > 0) {
							//successful request
							Swal.fire(
						      'Deleted!',
						      user + ' has been deleted Successfully.',
						      'success'
						    )
						}else if(frmdb.includes('Error') > 0){
							//failed request
							Swal.fire(
						      'Network!',
						      'Issue In Handling Request.',
						      'error'
			    			)
						}else{
							Swal.fire(
						      'Uknown!',
						      'What Are You Saying?',
						      'error'
						    )
						}
					}
				}
				req.open('GET', 'userscr/del_user.php?uname='+user);
				req.send();
			  }
			  else if (result.dismiss) {
			    swal.fire(
			      'Cancelled',
			      'Process Has Been Terminated',
			      'error'
			    )
			  }
			})
		}
		function refl(){
			location.reload();
		}
	</script>
</body>
</html>
