<?php
$conn = mysqli_connect('localhost','root','','elec_comp');
if (!$conn) {
	echo "Unable to connect to the server. Error: ".mysql_connect_error();
}
?>