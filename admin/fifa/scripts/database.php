<?php
$initialize = mysqli_connect('localhost', 'root', '','systwone');
if (!$initialize) {
	echo "Connection to the Database has not been successful!".mysqli_error($initialize);
}

?>