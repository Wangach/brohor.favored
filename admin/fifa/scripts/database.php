<?php
$initialize = mysqli_connect('localhost', 'root', '','');
if (!$initialize) {
	echo "Connection to the Database has not been successful!".mysqli_error($initialize);
}

?>