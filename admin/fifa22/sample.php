<?php

// if (isset($_GET['pg'])) {
	// 	$pg = $_GET['pg'];
	// } else {
	// 	$pg = 1;
	// }
    $output = '';
    $current = $_SERVER['PHP_SELF'];
    
	$userInSearch = $_GET['user'];

	$results_per_page = 10;
	$offset = ($pageno-1) * $results_per_page; 

	$totalPagesSql = "SELECT COUNT(*) FROM f2transactions";
	$result = mysqli_query($dbcon, $totalPagesSql);
	$totRows = mysqli_fetch_array($result)[0];
	$totPages = ceil($totRows / $recordsPerPage);

	// $sql = "SELECT * FROM f2transactions LIMIT $offset, $recordsPerPage";
	// $res_data = mysqli_query($dbcon,$sql);
        // while($row = mysqli_fetch_array($res_data)){
        //     //here goes the data
		// 	$transactor = $row['trName'];
		// 	$trAmount = $row['amount'];
		// 	$paymentMethod = $row['pmeth'];
		// 	$description = $row['trDesc'];
		// 	$dateOfTransaction = $row['trDte'];

		// 		//Html Data
		// 	$output = "<div class='table-responsive'>";
		// 	$output .= "<table class='table table-dark'>
		// 					<caption>$transactor Transactions</caption>";
		// 	$output .= "
		// 				<thead>
		// 					<tr>
		// 					<th scope='col'>Transactor</th>
		// 					<th scope='col'>Amount</th>
		// 					<th scope='col'>Transaction Date</th>
		// 					<th scope='col'>Payment Method</th>
		// 					<th class='text text-danger'>Description</th>
		// 					</tr>
		// 				</thead>";
		// 	$output .= "<tbody>
		// 					<tr>
		// 						<td>$transactor</td>
		// 						<td>$trAmount</td>
		// 						<td>$dateOfTransaction</td>
		// 						<td>$paymentMethod</td>
		// 						<td>$description</td>
		// 					</tr>
		// 				</tbody>";
		// 	$output .= "</table>";
		// 	$output .= "</div>";

			

		// 	echo $output;
        // }
        // mysqli_close($conn);
    // if(!isset($_GET['pg'])){
    //     $page = '1';
    // }else{
    //     $_GET['pg'];
    // }
    // $currentPageFirstRes = ($page-1)*$results_per_page;
    
    // // $sql='SELECT * FROM alphabet LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
    // $usertr = "SELECT * FROM f2transactions WHERE trName = '$userInSearch' LIMIT ' . $currentPageFirstRes . ', 
    // ' . $results_per_page";
    // $check = mysqli_query($dbcon, $usertr);
    // $nor = mysqli_num_rows($check);
    

    // while($row = mysqli_fetch_array($check)){
    //     $transactor = $row['trName'];
    //     $trAmount = $row['amount'];
    //     $paymentMethod = $row['pmeth'];
    //     $description = $row['trDesc'];
    //     $dateOfTransaction = $row['trDte'];
    //     //number of pages
    //     $numberOfPages = ceil($nor/$results_per_page);
    //     //links
    //     for ($page = 1;$page <=$numberOfPages;$page ++) { 
    //         $output = "<a href='$current?user=$userInSearch&pg=$page'> $page </a>";
    //         echo $output;
    //     }
    // }
	
}else{
  echo "The Search Parameters are missing! Please try again!";
}
