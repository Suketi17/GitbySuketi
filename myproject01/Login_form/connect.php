<?php 
	$conn = mysqli_connect("localhost","root","","sale_db");
	if (mysqli_connect_error()) {
		echo "Connect DB không thành công! " . mysqli_connect_error();
	}
 ?>