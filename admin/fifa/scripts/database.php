<?php
$initialize = mysqli_connect('localhost', 'root', '','newtings');
if (!$initialize) {
	echo "Connection to the Database has not been successful!".mysqli_error($initialize);
}

?>